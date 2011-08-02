<?php
//sets the http header. should correct any encoding issues.
header('Content-type: text/html; charset=utf-8');

//set your timezone here
date_default_timezone_set('US/Eastern');

//title of your site
$site_title = "Project Pulse | Discover the latest campus happenings";


//your site description. used for description metadata
$site_description = "The Pulse is where the community can learn and share about the latest campus happenings.";
//number of posts to display initially
$num = 15;

//number of additional posts to display each time more is loaded
$additional = 10;

//define the twitter accounts by username
$twitter_accounts = array(
	'example_twitter'
);

$tumblr_accounts = array(
	'example_tumblr', 
);

$main_tumblr_url = 'example_tumblr.tumblr.com'; //this is the account that ppl will post to

//define additional rss feeds you want to parse
$additional_sources = array(

	);
?>