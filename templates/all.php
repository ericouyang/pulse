<?php
/*
* Filename: all.php
* Contains the code for displaying all posts.
*
*/
require_once('../includes/config.php');
require_once('../includes/all.php');
require_once('../includes/common.php');
?>

<div class="posts">
			<?php for($i = 0; $i < $num; $i++): ?>
				<?php include('post_template.php'); ?>
			<?php endfor; ?>
	</div>
<?php include_once('../includes/get_more_button.php'); ?>
<?php include('../includes/load_extra_js.php') ?>

<script language="javascript" type="text/javascript">
	type = 'all';
	start = <?php echo $num;?>;
</script>