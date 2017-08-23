<?php
/**
 * Created by PhpStorm.
 * User: lenny
 * Date: 8/8/17
 * Time: 1:29 PM
 */

namespace App\Classes;

use Mockery\Exception;
use Thujohn\Twitter\Facades\Twitter;
use \Datetime;

class FetchTweets {
    private $filter;
    private $user;
    private $tweet_fetch_count;
    private $earlyist_date ;
    private $tweet_array = [];

    /**
     * NinjaFetchTweets constructor.
     * @param $user
     * @param null $filter
     * @param int $tweet_fetch_count
     */
    public function __construct($user, $filter = null, $tweet_fetch_count = 40){
        //Most flexible way of doing things, considering  filter is an option.
        //Twitter allows a max of 200 tweets in one shot.
        //A lower count may (or may not) be better for lots of concurrency, so the server isn't bogged. Good basis to experiment.
        //If I had more time and this was production I would look into code profiling.
        $this->tweet_fetch_count = $tweet_fetch_count;
        $this->filter  = $filter;
        $this->user = $user;
        $month_ago = new DateTime('-1 month');
        $this->earlyist_date = strtotime($month_ago->format('Y-m-d\TH:i:s.u') );

    }


    /**
     * @param $date
     */
    public function set_earliest_date($date){
        //Since the specs call for a month, this is totally optional, but may be handy in the future. Not worth cluttering the constructor
        $this->earlyist_date = $date;
    }

    /**
     * @param null $twitter_data_provider
     * @return array
     *
     * Implements transparently retrieving an arbitrary number of tweets, despite API limits and hacks.
     */
    public function fetch_tweet_array ($twitter_data_provider = null ){
        //Allow for injection of any data provider that roughly implements the assoc array interface below. We may want to use some mocking for testing down the line
        if($twitter_data_provider === null) {return [];};
        try {
            //Todo: auth exceptions are not caught.
            $json_tweets = json_decode($twitter_data_provider(['screen_name' => $this->user, 'count' => $this->tweet_fetch_count, 'format' => 'json']));
        } catch(Exception $e) {
            return [];
        }
        $fetchmore = (count($json_tweets) > 0) ? true : false;
        $last_id = $json_tweets[count($json_tweets) - 1]->id - 1;

        while ($fetchmore === true) {
            
            foreach ($json_tweets as $tweet) {

                if (strtotime($tweet->created_at) > $this->earlyist_date) {
                    if (!isset($tweet->retweeted_status)) {

                        $tweet_text = trim($tweet->text  );

                        //create a highlighted class
                        //TODO: Allow text transform injection functions as a parameter to modify tweet
                        $tweet_text_func = function ($tweet_text) {return preg_replace("/(#.*?)[ |,|.|-|!]|(#.*?$)/", '<span  v-on:click="htag" class="hashclick">\1</span> ', $tweet_text);};
                        $tweet_text = ($tweet_text_func)($tweet_text);

                        if ($this->filter !== null) {
                            if (strpos("#".$tweet_text, $this->filter) === false) { //Add tweet ifet not in filter
                                 $this->insert_tweet($tweet, $tweet_text);
                            }

                        } else { //No filter was selected so all tweets are fair game
                            $this->insert_tweet($tweet, $tweet_text);
                        }

                    } else { //future, handle retweets here

                    }
                } else { //end if past due tweets
                    $fetchmore = false;

                }
            }

            if ($fetchmore) {
                $json_tweets = json_decode($twitter_data_provider(['screen_name' => $this->user, 'count' => $this->tweet_fetch_count , 'format' => 'json', 'max_id' => $last_id]));

                if (count($json_tweets) > 0) {
                    $fetchmore = true;
                    $last_id = ($json_tweets[count($json_tweets) - 1]->id) - 1;
                } else {
                    $fetchmore = false;
                    break;
                }
            } else {
                break;
            }
        }


        return array_reverse($this->tweet_array);
    }
    
    private function insert_tweet($raw_tweet, $text = null) {
        //refactored out, we may want new fields in the view and this is quite easy to maintain.
        array_push($this->tweet_array, ["tweet_date" => $raw_tweet->created_at, "text" => $text  , "likes" => $raw_tweet->favorite_count, "rts" => $raw_tweet->retweet_count, "rtt" => $raw_tweet->retweeted]);

    }





}