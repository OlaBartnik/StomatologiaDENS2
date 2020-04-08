<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">

<meta name="application-name" content="<?php bloginfo('name'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">



 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>





<main class="p-main" role="main">




