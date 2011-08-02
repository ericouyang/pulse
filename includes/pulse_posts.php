<?
//behind the scenes code for the posts.php template.
$account = $_GET['type'];
if (!isset($account)) {
	$accounts = $tumblr_accounts;
	foreach ($accounts as $account) {
		$sources[] = 'http://'.$account.'.tumblr.com/rss';
	}	
}
else {
	$sources = 'http://'.$account.'.tumblr.com/rss';
}
$type = 'pulse_posts';

?>