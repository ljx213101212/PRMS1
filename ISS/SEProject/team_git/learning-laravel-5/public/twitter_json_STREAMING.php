<?php
/**
 * Created by PhpStorm.
 * User: jixiang
 * Date: 22/10/15
 * Time: 9:38 PM
 */


require_once('../phirehose-master/lib/Phirehose.php');
require_once('../phirehose-master/lib/OauthPhirehose.php');
require 'twitter_connection_STREAMING.php';

/**
 * Example of using Phirehose to display the 'sample' twitter stream.
 */
class SampleConsumer extends OauthPhirehose
{
    /**
     * Enqueue each status
     *
     * @param string $status
     *
     *
     */

    public $response = array();

    public function enqueueStatus($status)
    {
        /*
         * In this simple example, we will just display to STDOUT rather than enqueue.
         * NOTE: You should NOT be processing tweets at this point in a real application, instead they should be being
         *       enqueued and processed asyncronously from the collection process.
         */
        $data = json_decode($status, true);
        if (is_array($data) && isset($data['user']['screen_name'])) {
            $this->response['display'] = $data['user']['screen_name'] . ': ' . urldecode($data['text']) . "\n";
            //print($data['user']['screen_name'] . ': ' . urldecode($data['text']) . "\n");
            echo json_encode( $this->response);
            //print($data['user']['screen_name'] . ': ' . urldecode($data['text']) . "\n");
        }
    }
}

set_time_limit(1);
// Start streaming
$sc = new SampleConsumer(OAUTH_TOKEN, OAUTH_SECRET, Phirehose::METHOD_FILTER);
$sc->setTrack(array('morning', 'goodnight', 'hello', 'the'));
//$sc->consume();
$sc->consume();

?>