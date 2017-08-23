<?php

namespace App\Http\Controllers;

use \Datetime;
use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;
use App\Classes\FetchTweets;

class TweetController extends Controller
{
    public function show($id = null, $filter = null)
    {
        if($id===null && $filter ===null){
            $tweet_array = [];
            return view('pages.twitter', compact('tweet_array', 'filter', 'id'));
        }

        $nx = new FetchTweets($id, $filter);
        $tweet_array= $nx->fetch_tweet_array("Twitter::getUserTimeline");
        return view('pages.twitter', compact('tweet_array', 'filter', 'id'));
    }
}
