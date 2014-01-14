<?php
// Define paths
define('MAIN', dirname(__FILE__) . '/');
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

  <title>Clare Housing Board</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    
	<link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/reset.css"> 
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/clare.css">      
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/board.css">      
    
    <!--[if lt IE 9]>
	    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->  
    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
  
  <?php wp_head(); ?>  	
</head>

<body <?php body_class(); ?>>

<header class="contentbox">
        
    <a href="<?php echo home_url(); ?>">
		<img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" id="logo" alt="Clare Housing - Partners in AIDS Care" />
    </a>
        
    <div class="banner">
        <?php 
        // No custom post types here, unlike on main site. Just choose from 4 random banner images
        $num = rand(1, 4);  

        $url = get_bloginfo('template_url'); ?>
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/banner-home<?php echo $num; ?>.jpg">

      <?php wp_nav_menu('Primary Menu'); ?>
    </div>

</header>

<div id="container" class="clearfix contentbox">
    
    <div id="main" role="main" class="clearfix gradient">
      <div class="callout"></div>
      <?php if (!is_front_page()) { ?>
      <h3 class="entry-title"><a href="<?php echo home_url(); ?>">Back to Main &raquo;</a></h3>
      <?php } ?>