<?php
/**
 * Created by PhpStorm.
 * User: jixiang
 * Date: 22/10/15
 * Time: 9:41 PM
 */

require "../twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;
//namespace Abraham\TwitterOAuth;


/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token'        => "3190620692-td9gKtFzefnHa1HUQfLgqSYktdCINYcyAVO9Y27",
    'oauth_access_token_secret' => "ikFAm5aKTkyZfchDFJrWIf8xr4KHPrkCqOwRm79UhqUcU",
    'consumer_key'              => "tj5gC8eInAhyFqDZzLxj9yfJb",
    'consumer_secret'           => "5LT4EEgkRErSDIDVsMEc0najghfF2hrIdtRO7Vo8kmYV3S657P",
);

$CONSUMER_KEY = "tj5gC8eInAhyFqDZzLxj9yfJb";
$CONSUMER_SECRET = "5LT4EEgkRErSDIDVsMEc0najghfF2hrIdtRO7Vo8kmYV3S657P";
$access_token = "3190620692-td9gKtFzefnHa1HUQfLgqSYktdCINYcyAVO9Y27";
$access_token_secret = "ikFAm5aKTkyZfchDFJrWIf8xr4KHPrkCqOwRm79UhqUcU";


$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);


?>