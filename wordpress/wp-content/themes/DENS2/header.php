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
                        <a href="<?php echo home_url(); ?>" class="page_logo"">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logoDENS2.png" alt="Stomatologia DENS2"></a>
                        </h1>
                        <a href="http://localhost/nfz/" class="NFZ_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/nfz.png" alt="NFZ"></a>
                    </div>
                    <nav class="page_nav">

                        <ul class="page_nav_list">
                            <li><a href="/">Strona główna</a></li>
                            <li><a href="http://localhost/klinika/">Klinika</a></li>

                            <li><a class="page_nav_list_button_link" href="http://localhost/#services">Usługi <span class="page_nav_list_button">&#43;</span></a>
                            <ul class="page_nav_sublist">
                            <li class="page_nave_sublist_el">
                            <a href="http://localhost/stomatologia-zachowacza" class="page_nav_sublist_link">Stomatologia zachowawcza</a>
                        </li>
                        <li class="page_nave_sublist_el">
                            <a href="http://localhost/ortodoncja" class="page_nav_sublist_link">Ortodoncja</a>
                        </li>

                        <li class="page_nave_sublist_el">
                            <a href="http://localhost/chirurgia_implantologia" class="page_nav_sublist_link">Chirurgia Implantologia</a>
                        </li>
                        <li class="page_nave_sublist_el">
                            <a href="http://localhost/protetyka" class="page_nav_sublist_link">Protetyka</a>
                        </li>
                        <li class="page_nave_sublist_el">
                            <a href="http://localhost/zdjecia_rtg" class="page_nav_sublist_link">Zdjęcia RTG</a>
                        </li>
                        <li class="page_nave_sublist_el">
                            <a href="http://localhost/nfz/" class="page_nav_sublist_link">NFZ</a>
                        </li>



                            </ul>
                            </li>

                            <li><a href="http://localhost/cennik/">Cennik</a></li>
                            <li><a href="http://localhost/#contact">Kontakt</a></li>
                        </ul>
                    </nav>

                    <button type="button" class="toggle-main-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                </div>
            </div>

</header>


<main class="p-main" role="main">




 