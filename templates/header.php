<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<title><?php echo $site_title?></title>
<meta name="description" content="<?php echo $site_description?>" />
<!-- 1140px Grid styles for IE --><!--[if lte IE 9]>
<link href="/css/ie.css" media="screen" rel="stylesheet" type="text/css" />
<![endif]-->
<!-- The 1140px Grid - http://cssgrid.net/ -->
<link href="/css/1140.css" media="screen" rel="stylesheet" type="text/css" />
<!-- Your styles -->
<link href="/css/common.css" media="screen" rel="stylesheet" type="text/css" />
<link href="/css/styles.css" media="screen" rel="stylesheet" type="text/css" />
<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript">
	start = <?php echo $num;?>;
	additional = <?php echo $additional;?>;
</script>
<link rel="shortcut icon" href="/favicon.png">
</head>

<body>

<div class="container">
	<div class="row">
		<div id="logo">
			<a href="/"><h1><?php echo $site_title?></h1></a>
		</div>
		<div id="menu">
			<a href="https://github.com/ericouyang/pulse">Go to Project Pulse</a>
		</div>
