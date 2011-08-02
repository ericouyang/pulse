<?php
//behind the scenes code for the all.php template

//turns the twitter accounts into urls
foreach ($twitter_accounts as $username) {
	$sources[] = "http://twitter.com/statuses/user_timeline/$username.rss";
}

foreach ($tumblr_accounts as $account) {
	$sources[] = 'http://'.$account.'.tumblr.com/rss';
}

//adds the additional sources to the $sources array
foreach ($additional_sources as $source) {
	$sources[] = $source;
}

$type = 'all';

?>