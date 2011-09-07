<?

//behind the scenes code for the custom_filter.php template. not used right now, depreciated in favor of dynamic loading of custom filter template.
if($_POST['feed']){
	foreach ($_POST['feed'] as $feed) {
		$sources[] = $feed;
	}
}
else {$empty = 1;}

$type = 'custom_filter';

?>