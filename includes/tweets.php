<?
//behind the scenes code for the tweets.php template.

//turns the twitter accounts into urls
foreach ($twitter_accounts as $username) {
	$sources[] = "http://twitter.com/statuses/user_timeline/$username.rss";
}
$type = 'tweets';

?>