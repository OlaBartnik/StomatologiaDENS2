<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<section id="services" class="section_sevices" id="sevices">
        <div class="container">
            <header class="section_header">
                <h2>Nasze usługi</h2>
            </header>

            <div class="row">
                <div class="col-4-12">
                    <div class="box">
                        <a href="" class="box_photo">
                            <div class="box_photo_container"><img src="<?php echo get_template_directory_uri(); ?>/images/Stomat.zachow._AdobeStock_100506477_Preview.jpeg"
                                    alt="Stomatologia Zachowawcza">
                            </div>

                            <h2 class="box_tittle">Stomatologia Zachowawcza</h2>
                        </a>

                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Ortodoncja_AdobeStock_248841020_Preview.jpeg" alt="Ortodoncja">
                            </div>
                            <h2 class="box_tittle">Ortodoncja</h2>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Implanty.jpg" alt="Chirurgia Stomatologiczna Implantologia">
                            </div>
                            <h2 class=" box_tittle">Chirurgia Stomatologiczna Implantologia</h2>
                        </a>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-4-12">
                    <div class="box">
                        <a href="" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Protetyka_AdobeStock_269155967_Preview.jpeg" alt="Protetyka">
                            </div>
                            <h2 class="box_tittle">Protetyka</h2>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/RTG_AdobeStock_206079798_Preview.jpeg" alt="Zdjęcia RTG">
                            </div>
                            <h2 class="box_tittle">Zdjęcia RTG</h2>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/NFZ.jpg" alt="Narodowy Fundusz Zdrowia">
                            </div>
                            <h2 class=" box_tittle">Narodowy Fundusz Zdrowia</h2>
                        </a>
                    </div>
                </div>




            </div>
        </div>

    </section>

    <section id="aboutUs" class="section_aboutUs">
        <div class="banner">
            <div class="banner_text">
                Piękny uśmiech i zdrowe zęby to dobre samopoczucie każdego dnia.<br>
                Nasi specjaliści sprawią że poczujesz się pewnie i komfortowo.
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-6-12">

                </div>

                <div class="col-6-12">
                    <header class="section_header">
                        <h2>Nasza Klinika</h2>
                    </header>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-6-12">
                    <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/gabinet.jpg" alt="Dens2 Klinika" class="section_aboutUS_photo"></div>
                </div>

                <div class="col-6-12">
                    <div class="section_aboutUs_article">
                        <p class="section_aboutUs_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est
                            ultricies viverra posuere nibh tincidunt fermentum aliquet pellentesque. Rutrum dui rutrum
                            odio
                            vitae. Risus, viverra in morbi auctor enim est. Blandit porta tristique elementum
                            scelerisque
                            sed facilisis sit. Viverra varius nunc diam vel, lectus curabitur faucibus sed elit. Ornare
                            posuere diam et semper mauris nunc platea ut metus. Eget vestibulum ut commodo vestibulum.
                            Scelerisque egestas vitae quam risus quis nisi euBlandit. Ornare posuere diam et semper
                            mauris nunc platea ut metus. Eget vestibulum ut commodo vestibulum.
                            Scelerisque egestas vitae quam risus quis nisi eu.</p>
                        <a href="/" class="button">Więcej</a>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section_contact">
        <div class="banner">
            <div class="banner_text">
                U nas możesz skorzystać z wizyty również w ramach NFZ
            </div>

        </div>
        <div class="container">
            <header class="section_header">
                <h2>Kontakt</h2>
            </header>
            <div class="contact_form"></div>
        </div>
    </section>


<?php get_footer(); ?>
