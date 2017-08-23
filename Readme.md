A simple twitter client using Laravel and an Admin Template

!!REQUIRED!! Complete the .env file with your credentials:

TWITTER_CONSUMER_KEY=:)
TWITTER_CONSUMER_SECRET=:)
TWITTER_ACCESS_TOKEN=:)
TWITTER_ACCESS_TOKEN_SECRET=:)


4) Flexible routing lets you star the app with 
http://localhost:8000/tweets/ 
or
 /tweets/user, /tweets/user/filter

Main Class:

App\Classes\FetchTweeets.php


Hashtag exclusion works too, hashtags are highlighted and clickable. 
I use some regular expressions to process the selected hashtags that contain special characters, 
but could probably use a bit more effort to be perfect. 
Users can edit the tags in the input field, better than typing it out.
 