<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
    <?php echo $libs->addLibs(array("jquery 3", "jquery 2", "popper 1", "bootstrap 4 js", "bootstrap 4 css")); ?>
	<link rel="stylesheet" href="sources/css/style.css">
</head>
<body>
	<div id="wrapper">
		<div id="header" class="block">
			<?php echo $title; ?>	
		</div>
		<div id="content" class="block">
