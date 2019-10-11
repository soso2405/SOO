<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" />
	<?php wp_head();?>
</head>
<body>
	<header>
		<h1> <?php bloginfo('name');?></h1>
		<h2> <?php bloginfo('description');?></h2>
		<nav><?php wp_nav_menu(array('theme_location'=>'menu-principal',
														'container_class' =>'menu-principal',

								));?></nav>
	</header>
