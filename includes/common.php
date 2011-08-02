<?php
/*
* Filename: includes/common.php
* Contains the common php code for the website to function. Includes the configuration file and Simplepie.
*
*/
require_once('simplepie.php');

$main_tumblr_url = $main_tumblr_account.'.tumblr.com';


//creates new SimplePie object
$data = new SimplePie();

//sets the urls
$data->set_feed_url($sources);

//if you add ?cache=false to the end of the url, it will temporarily disable caching. Useful for testing

$disabled = $_GET['cache'];
if ($disabled  == 'false') {
	$data->enable_cache(false);
}

// Allow the object, param, and embed tags so we can display embedded videos from the RSS feeds
$strip_htmltags = $data->strip_htmltags;
array_splice($strip_htmltags, array_search('object', $strip_htmltags), 1);
array_splice($strip_htmltags, array_search('param', $strip_htmltags), 1);
array_splice($strip_htmltags, array_search('embed', $strip_htmltags), 1);
array_splice($strip_htmltags, array_search('iframe', $strip_htmltags), 1);

// add these tags. Removed br tag for cleanness
$data->strip_htmltags(array_merge($strip_htmltags, array('br')));

//sets cache location
$data->set_cache_location('../cache');

//SimplePie magic
$data->init();

//function grabs the Twitter username based on the status provided by the RSS feed
function getUsername($status) {
	$pos = strpos($status, ':');
	return strtolower(substr($status, 0, $pos));
}

//function grabs account name from feed url
function getAccount($url) {
	$account = substr($url, 0, -12);
	return substr($account, 7);
}

?>