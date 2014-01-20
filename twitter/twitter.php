<?php
    ini_set('display_errors', 1);
    require_once('TwitterAPIExchange.php');

	if(isset($_GET['count'])){
		$count = $_GET['count'];
	}
	else{ $count = 10;}
	
	if(isset($_GET['q'])){
		$q = $_GET['q'];
	}
	else{ $q = "#arduino";}
	
	/** Set access tokens here - see: https://dev.twitter.com/apps/ **/

    $settings = array(

        'oauth_access_token' => "",

        'oauth_access_token_secret' => "",

        'consumer_key' => "",

        'consumer_secret' => ""

    );

    /** Perform a GET request and echo the response **/
    $url = 'https://api.twitter.com/1.1/search/tweets.json';
    $getfield = '?q='.$q.'&'.'count='.$count.'&include_entities=false';
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange($settings);
    $json = $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();

    //$obj = json_decode($json, true);
	$obj = json_decode($json);

	//print_r($obj);
    //$tweet = $obj["statuses"][0]["text"];

	foreach ($obj->statuses as $tweet ){
		//echo $tweet->text;
		echo '<published>';
		echo 'T';
		$time = explode(' ', $tweet->created_at);
		echo str_replace(':', '', $time[3]);
		echo '<title>'.$tweet->text.'</title>';
		echo '</published>';
	}
?>