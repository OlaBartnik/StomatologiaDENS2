<?php
/**
 * Template Name: AboutUs_gallery
 */

get_header(); ?>


<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

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


        <?php if( get_field('name') ): ?>
 <header class="services_single_page section_header">
 <h3><?php the_field('name'); ?></h3>
        </header>
    <?php endif; ?>

</div>


    <?php if( get_field('picture') ): ?>
        <div class="services_single_page photo">
 <img src="<?php the_field('picture'); ?>"  width="200px" height="auto" alt="<?php the_field('name'); ?>">
 <h4 class="descritption_tittle"><?php the_field('descritption_tittle');?></h4>
 </div>

    <?php endif; ?>


    <?php if( get_field('description') ): ?>
 <div> <?php the_field('description'); ?> </div>
    <?php endif; ?>

</div>








                <div class="col-4-12">
                <?php get_sidebar(); ?>
                </div>
</div>




<div class="row">

 <div class="col-12-12 gallery">

 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/slider.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/slider_small.jpg" alt=""/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/slider2_small.jpg" alt=""/></a>



 <a class="group" rel="group1" href="<?php echo get_template_directory_uri(); ?>/images/slider3.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/slider3_small.jpg" alt=""/></a>
 </div>

 </div>



</div>

</section>

</main>
    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>