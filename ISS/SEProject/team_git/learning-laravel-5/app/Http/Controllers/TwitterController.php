<?php

namespace App\Http\Controllers;
require "twitteroauth/autoload.php";
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;




class TwitterController extends Controller
{


var $CONSUMER_KEY = "tj5gC8eInAhyFqDZzLxj9yfJb";
var $CONSUMER_SECRET = "5LT4EEgkRErSDIDVsMEc0najghfF2hrIdtRO7Vo8kmYV3S657P";
var $access_token = "3190620692-td9gKtFzefnHa1HUQfLgqSYktdCINYcyAVO9Y27";
var $access_token_secret = "ikFAm5aKTkyZfchDFJrWIf8xr4KHPrkCqOwRm79UhqUcU";


var $connection;
var $length_of_tweets = 20;
var $result = array();

    public function __construct(){

        $this->connection = new TwitterOAuth($this->CONSUMER_KEY, $this->CONSUMER_SECRET, $this->access_token, $this->access_token_secret);
    }

    public function twitterRest(){
        return view('pages.twitter_REST');
    }

    public function twitterRESTApi(Request $request){

        $response = array();
        //$content = $this->connection->get("account/verify_credentials");
        //return response()->json(['display', 'Information updated']);
        //return response()->json(['display',  $request->input('hash_text')]);
        if ($request->has('hash_text'))
        {
            $hash_text = $request->input('hash_text');
            //return response()->json(['display',  $hash_text]);
            //$hash_result = build_multiple_hashtag_search($hash_text);

            $statuses = $this->connection->get("search/tweets", array("q" => $hash_text, "until" => "2015-12-07"));
            return response()->json(['display',  $statuses]);
            $response["success"] = $hash_text;
            $this->build_up_result_array($statuses);
            return response()->json( $this->send_array());
//            echo $this->send_array();
        }

        else{
            $response["error"] = "can not find hash_text in your get request!";
            return response()->json(json_encode($response));
        }

    }

    public function build_multiple_hashtag_search($hash_text)
    {

        $return_value = "";
        preg_match_all("/(#\w+)/", $hash_text, $matches);
        for ($i = 0; $i < sizeof($matches[0]); $i++) {

            if ($i != sizeof($matches[0]) - 1) {
                $return_value = $return_value . "%23" . $matches[0][$i] . "+OR+";
            } else {
                $return_value = $return_value . "%23" . $matches[0][$i];
            }
        }


        return $return_value;


    }


    public function build_up_result_array($statuses)
    {

        for ($i = 0; $i < $this->length_of_tweets; $i++) {
            $this->result[$i] = $statuses->statuses[$i];
        }
    }

//print_r($result[4]->text);


    public function send_array()
    {

        $response["display"] = array();
        for ($i = 0; $i < $this->length_of_tweets; $i++) {
            $display = array();
            $display["user_img"] = $this->result[$i]->user->profile_image_url;
            $display["username"] = $this->result[$i]->user->name;
            $display["text"] = $this->result[$i]->text;

//        $display["user_img"] = $result[$i]['user']['profile_image_url'];
//        $display["username"] = $result[$i]['user']['name'];
//        $display["text"] = $result[$i]['text'];

            array_push($response["display"], $display);
        }

        return json_encode($response);

    }



}
