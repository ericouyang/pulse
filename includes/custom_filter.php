<?

//behind the scenes code for the custom_filter.php template. not used right now, depreciated in favor of dynamic loading of custom filter template.

foreach ($_POST['feed'] as $feed) {
	$sources[] = $feed;
}

$type = 'custom_filter';

?>