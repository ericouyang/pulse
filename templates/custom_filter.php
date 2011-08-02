<?php
/*
* Filename: custom_filter.php
* Contains the code for displaying a custom filter
*
*/
require_once('../includes/config.php');
require_once('../includes/custom_filter.php');
require_once('../includes/common.php');
?>

<div class="page-title">Custom Filter  
	<a class="reset-filter" href="../index.php">(&laquo; view all)</a></div> 
<div class="posts">
		<?php for($i = 0; $i < $num; $i++): ?>
			<?php include('post_template.php'); ?>
		<?php endfor; ?>
</div>
<?php include_once('../includes/get_more_button.php'); ?>
<?php include('../includes/load_extra_js.php') ?>

<script language="javascript" type="text/javascript">
	type = 'custom_filter';
	start = <?php echo $num;?>;
</script>