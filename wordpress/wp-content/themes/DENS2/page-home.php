<?php
/**
 * Template Name: Home
 */

get_header('home'); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <section id="services" class="section_sevices" id="sevices">
                 <div class="container">
            <header class="section_header">
                <h2>Nasze usługi</h2>
            </header>

            <div class="row">
                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/stomatologia-zachowacza" class="box_photo">
                            <div class="box_photo_container"><img src="<?php echo get_template_directory_uri(); ?>/images/Stomat.zachow._AdobeStock_100506477_Preview.jpeg"
                                    alt="Stomatologia Zachowawcza">
                            </div>

                            <h3 class="box_tittle">Stomatologia Zachowawcza</h3>
                        </a>

                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/ortodoncja" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Ortodoncja_AdobeStock_248841020_Preview.jpeg" alt="Ortodoncja">
                            </div>
                            <h3 class="box_tittle">Ortodoncja</h3>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/chirurgia_implantologia"" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Implanty.jpg" alt="Chirurgia Stomatologiczna Implantologia">
                            </div>
                            <h3 class=" box_tittle">Chirurgia Stomatologiczna Implantologia</h3>
                        </a>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/protetyka" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Protetyka_AdobeStock_269155967_Preview.jpeg" alt="Protetyka">
                            </div>
                            <h3 class="box_tittle">Protetyka</h3>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/zdjecia_rtg" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/RTG_AdobeStock_206079798_Preview.jpeg" alt="Zdjęcia RTG">
                            </div>
                            <h3 class="box_tittle">Zdjęcia RTG</h3>
                        </a>
                    </div>
                </div>

                <div class="col-4-12">
                    <div class="box">
                        <a href="http://localhost/nfz/" class="box_photo">
                            <div class="box_photo_container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/NFZ.jpg" alt="Narodowy Fundusz Zdrowia">
                            </div>
                            <h3 class=" box_tittle">Narodowy Fundusz Zdrowia</h3>
                        </a>
                    </div>
                </div>




            </div>
        </div>
         </section>

    <section id="aboutUs" class="section_aboutUs">
        <div class="banner">
            <div class="banner_text container">
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
                        <a href="http://localhost/klinika/" class="button">Więcej</a>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section_contact">
        <div class="banner">
            <div class="banner_text container"">
                U nas możesz skorzystać z wizyty również w ramach NFZ
            </div>

        </div>
        <div id="contact"class="container" >
            <header class="section_header">
                <h2>Kontakt</h2>
            </header>

            <div class="contact_form">
          <?php the_content();?>
            </div>

<div class="contact_adress">
    <div class="container">
            <div class="row">

                <div class="col-1-12">
                    <div class="image_box">
<img src="<?php echo get_template_directory_uri(); ?>/images/address.svg" alt="Adres" class="contact_address address">
 <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
</div>
</div>
            <div class="col-3-12">


                    <div class="address_box">
                    <p class="address_address"><strong>DENS 2</strong><br>
                    ul. Jaktorowska 8 U7<br>
                    01-202 Warszawa </br>
                    <strong>Wejście od ul. Karolkowej</strong>
                    </p>
<p class="address_hours">pon. - piąt.:  09:00 - 20:00</p>
<p class="address_phone">Tel. (22) 632 99 11<br>
Tel.  664 474 996</p>
                    </div>


        </div>


        <div class="col-4-12">
            <div class="mail_box">

            <div>
                <a href="mailto:aleksandra.dadacz@gmail.com" class="mail_link" target ="_blank">
             <img src="<?php echo get_template_directory_uri(); ?>/images/envelope.svg" alt="mail" class="contact_address mail">ortodoncja.budel@gmail.com</a>
              <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
            </div>


            <div>
             <a href="https://www.facebook.com/Dens2-Prywatna-Przychodnia-Dentystyczno-Lekarska-842138229254599/" class="fb_link" target ="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_logo.svg" alt="Facebook" class="contact_address fb">Stomatoliga DENS2</a>
             <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
            </div>

            </div>
            </div>



                <div class="col-4-12">
                    <div class="job_box">
    <a href="http://localhost/oferty-pracy/" class="job_link" target ="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hiring.svg" alt="ofety pracy" class="contact_address job">Ofety pracy</a>
             <!-- Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->
</div>
            </div>

    </div>
</div>
    </section class="section_contact">


    <div id='map' style='width: 100%; height: 480px;'></div>



</main>
    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>
