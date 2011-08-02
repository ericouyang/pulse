<?php
/*
* Filename: includes/more.php
* This is the page that is loaded dynamically by jquery to display more posts. Configure the number of posts you want in config.php. 
*
*/
//grabs where to start displaying from a post variable passed on by jquery
$start = $_POST['start'];
$type = $_POST['type'];

require_once('../includes/config.php');
require_once ("../includes/$type.php");
require_once('../includes/common.php');


?>

<?php for($i = $start; $i < $start+$additional; $i++): ?>
	<?php include('post_template.php'); ?>
<?php endfor; ?>

<?php include('../includes/load_extra_js.php') ?>
