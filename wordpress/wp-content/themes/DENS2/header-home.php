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
        <header class="page_header">
            <div class="contact_menu">
                <div class="container">
                    <nav class="contact_nav">
                        <ul class="contact_nav_list">
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/calendar.svg" alt="Godziny otwarcia"> pon. piąt. 09:00 - 20:00
                                <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
                            </li>

                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.svg" alt="Lokalizacja">
                                DENS 2, ul. Jaktorowska 8 U7, 01-202
                                Warszawa
                                <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/dentist.svg" alt="Telefon">Tel. 664 474 996, (22) 632 99 11
                                <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="page_menu">
                <div class="container">
                    <div class="header_logo">
                        <h1>
                            <a href="/" class="page_logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo final.png" alt="Stomatologia DENS2">
                            </a>
                        </h1>
                        <a href="/" class="NFZ_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/nfz_logo_C_kolor (1).png" alt="NFZ"></a>
                    </div>
                    <nav class="page_nav">
                        <ul class="page_nav_list">
                            <li><a href="/">Strona główna</a></li>
                            <li><a href="#">Klinika</a></li>
                            <li><a href="#services">Usługi</a></li>
                            <li><a href="#">Cennik</a></li>
                            <li><a href="#contact">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>

        <div class="main_banner">
            <a href="#services">
                <img src="<?php echo get_template_directory_uri(); ?>/images/addon.png" alt="" class="main_banner_addon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt="" class="main_banner_arrow">
            </a>
        </div>
</div>


<main class="p-main" role="main">






