<?php
/**
 * Created by PhpStorm.
 * User: jixiang
 * Date: 21/10/15
 * Time: 1:11 PM
 */

require "twitter_connection_REST.php";


$response = array();
$content = $connection->get("account/verify_credentials");

$hash_text;
$statuses;
$length_of_tweets = 20;
$result = array();


//build_multiple_hashtag_search("this has a #hashtag a  #badhash-tag and a #goodhash_tag");


if (isset ($_GET['hash_text']))
{
$hash_text = $_GET['hash_text'];
$hash_result = build_multiple_hashtag_search($hash_text);
$statuses = $connection->get("search/tweets", array("q" => $hash_result, "until" => "2015-12-07"));
$response["success"] = $hash_text;
build_up_result_array($statuses);
echo send_array();
}

else{
    $response["error"] = "can not find hash_text in your get request!";
    echo json_encode($response);
}


function build_multiple_hashtag_search($hash_text)
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

//print_r ($statuses->statuses[0]);
//
//print_r("<br>");


function build_up_result_array($statuses)
{

    GLOBAL $length_of_tweets;
    GLOBAL $result;
    for ($i = 0; $i < $length_of_tweets; $i++) {
        $result[$i] = $statuses->statuses[$i];
    }
}

//print_r($result[4]->text);


function send_array()
{

    $response["display"] = array();
    GLOBAL $length_of_tweets;
    GLOBAL $result;
    for ($i = 0; $i < $length_of_tweets; $i++) {
        $display = array();
        $display["user_img"] = $result[$i]->user->profile_image_url;
        $display["username"] = $result[$i]->user->name;
        $display["text"] = $result[$i]->text;

//        $display["user_img"] = $result[$i]['user']['profile_image_url'];
//        $display["username"] = $result[$i]['user']['name'];
//        $display["text"] = $result[$i]['text'];

        array_push($response["display"], $display);
    }

    return json_encode($response);

}



