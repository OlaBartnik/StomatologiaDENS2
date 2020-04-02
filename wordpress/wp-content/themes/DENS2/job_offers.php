<?php
/**
 * Template Name: Job_Offers
 */

get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="section_single_page">
        <div class="banner">
            <div class="banner_text container">
            Piękny uśmiech i zdrowe zęby to dobre samopoczucie każdego dnia.<br>
                Nasi specjaliści sprawią że poczujesz się pewnie i komfortowo.
            </div>
        </div>

<div class="container">

<div class="row">
 <div class="col-8-12 single_page_box">
     <div class="header_container">

 <header class="single_page section_header">
 <h3>Praca w naszym gabinecie</h3>
        </header>
</div>

    <?php if( get_field('description2') ): ?>
 <div> <?php the_field('description2'); ?> </div>
    <?php endif; ?>

</div>

<?php endwhile; ?>
<?php endif; ?>


                <div class="col-4-12">
                <aside class="aside_job_offers">
  <div class="header_container">
  <h2 class="section_header">Oferty pracy</h2>
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