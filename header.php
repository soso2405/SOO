<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" />
	<?php wp_head();?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/monSite/css/reset.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/principale.css" />

    <?php if( is_page_template("page_template/shop.php") ) { ?>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shop.css" />
<?php } ?>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/principale.css" />
    <?php if( is_single() ) { ?>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/article.css" />
<?php } ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/principale.responsive.css" />
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hamb.css" />
</head>
<body>
    <div id="wrap">
	<header>
		 <a href="home.php"><img class="logo" src="http://localhost/wordpress/wp-content/uploads/2019/10/logo.png" alt="logo"></a>
            <div id="nav-icon1" class="hamb">
  <span></span>
  <span></span>
  <span></span>
</div>
	</header>
