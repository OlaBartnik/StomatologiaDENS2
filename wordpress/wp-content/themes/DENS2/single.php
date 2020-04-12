<?php
/**
 * Template Name: Single
 */

get_header(); ?>


    <section class="section_single_page">
        <div class="banner_img">
        </div>

<div class="container">

<div class="row">
 <div class="col-8-12 single_page_box">
     <div class="header_container">


 <header class="single_page section_header">
 <h3>Praca w naszym gabinecie</h3>
        </header>


</div>

    <?php if( get_field('description3') ): ?>
 <div> <?php the_field('description3'); ?> </div>
    <?php endif; ?>
<br>
	<?php if (have_posts()): ?>
				<?php while (have_posts()) : the_post(); ?>

					<header class="single section_header job_tittle">
					<h3> <?php the_title(); ?> </h3> </header>


				<?php if( get_field('description4') ): ?>
 <div> <?php the_field('description4'); ?> </div>
    <?php endif; ?>

    <p class="single_page Cv_description">Osoby zainteresowane ofertą prosimy o przesyłanie CV na adres: <strong>ortodoncja.budel@gmail.com</strong></p>
 <p>
W aplikacji prosimy zawrzeć klauzulę:
“Wyrażam zgodę na przetwarzanie moich danych osobowych przez firmę DENS2 Stomatologia z siedzibą w Warszawie, ul. Jaktorowska 8 U7 01-202 Warszawa w celu prowadzenia rekrutacji na aplikowane przeze mnie stanowisko.”</p>

				<p>Data zamieszczenia ogłoszenia: <?php the_time('F j, Y'); ?></p>
				<?php endwhile; ?>
			<?php endif; ?>

</div>


                <div class="col-4-12">
                <aside class="aside_job_offers">
                <div class="header_container">
            <header class="section_header">
                <h2>Oferty pracy</h2>
            </header>
        </div>
				<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("showposts=20&paged=$page"); while ( have_posts() ) : the_post() ?>

				<div class="single_link_container">
			<div class="square"></div>
			<a class= "single_link" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
</div>
            <br>

			<?php endwhile; ?>

			<p><?php posts_nav_link(); ?></p>

    </aside>
                </div>
</div>
</div>




</section>

</main>




<?php get_footer(); ?>