<?php
/*
* Filename: tweets.php
* Contains the code for displaying the tweets filter
*
*/
require_once('../includes/config.php');
require_once('../includes/tweets.php');
require_once('../includes/common.php');
?>

<div class="page-title">Only Campus Tweets  
	<a class="reset-filter" href="../../index.php">(&laquo; view all)</a></div> 
<div class="posts">
		<?php for($i = 0; $i < $num; $i++): ?>
			<?php include('post_template.php'); ?>
		<?php endfor; ?>
</div>
<?php include_once('../includes/get_more_button.php'); ?>
<?php include('../includes/load_extra_js.php') ?>

<script language="javascript" type="text/javascript">
	type = 'tweets';
	start = <?php echo $num;?>;
</script>