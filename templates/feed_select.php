<?php
require_once('includes/config.php');
require_once('includes/all.php');

//define the ones you want to be able to be selected here. array key is the name to be displayed, the value is the url of the rss feed.
$selectables = array(
	'@example' => $sources[0],
);

?>
<form id="feed-select" action="custom_filter.php" method="POST">
<h4>Filter:</h4>
<?php foreach($selectables as $key=>$value): ?>
	<span>
	<?php if(substr($value, 0, 1) == '@'): ?>
	<input name="feed[]" value="<?php echo $value;?>" type="checkbox" class="feed-checkbox twitter" checked="checked"/><?=$key?>
	<?php else: ?>
	<input name="feed[]" value="<?php echo $value;?>" type="checkbox" class="feed-checkbox" checked="checked"/><?=$key?>
	<?php endif; ?>
	</span>
<?php endforeach; ?>
</form>