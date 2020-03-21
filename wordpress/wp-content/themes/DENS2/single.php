<?php
/**
 * Template Name: Single
 */

get_header(); ?>


    <section class="section_single_page">
        <div class="banner">
            <div class="banner_text container">
             <p>Lorem ipsum</p>
             <p>Dolor sit amet</p>
             <p>Ac morbi et ut quis</p>
             <p>Cursus sit </p>
            </div>
        </div>

<div class="container">

<div class="row">
 <div class="col-8-12">
     <div class="header_container">


 <header class="single_page section_header">
 <h3>Oferty pracy</h3>
        </header>


</div>

    <?php if( get_field('description3') ): ?>
 <div> <?php the_field('description3'); ?> </div>
    <?php endif; ?>
<br>
	<?php if (have_posts()): ?>
				<?php while (have_posts()) : the_post(); ?>

					<header class="single section_header">
					<h3> <?php the_title(); ?> </h3> </header>


				<?php if( get_field('description4') ): ?>
 <div> <?php the_field('description4'); ?> </div>
	<?php endif; ?>

				<p>Data zamieszczenia ogłoszenia: <?php the_time('F j, Y'); ?></p>
				<?php endwhile; ?>
			<?php endif; ?>

</div>


                <div class="col-4-12">
                <aside>
  <div class="header_container">
  <h2 class="section_header">Aktualne oferty pracy</h2>
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