<?php
/*
* Filename: posts.php
* Contains the code for displaying the posts filter.
*
*/
require_once('../includes/config.php');
require_once('../includes/pulse_posts.php');
require_once('../includes/common.php');
?>

	<div class="page-title">Only <?php echo $data->get_title()?> Posts  <a class="reset-filter" href="#all">(&laquo; view all)</a></div> 
	<div class="posts">
			<?php for($i = 0; $i < $num; $i++): ?>
				<?php include('post_template.php'); ?>
			<?php endfor; ?>
	</div>

<?php include_once('../includes/get_more_button.php'); ?>
<?php include('../includes/load_extra_js.php') ?>

<script language="javascript" type="text/javascript">
	type = 'pulse_posts';
	start = <?php echo $num;?>;
</script>
