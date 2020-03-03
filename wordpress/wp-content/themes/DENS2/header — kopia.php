<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"">

<meta name="application-name" content="<?php bloginfo('name'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">



 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<body>
<div class="page_hero">



        <div class="main_banner">
            <a href="#services">
                <img src="<?php echo get_template_directory_uri(); ?>/images/addon.png" alt="" class="main_banner_addon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="" class="main_banner_arrow">
            </a>
        </div>
 </div>



 <main id="content" class="site-content">