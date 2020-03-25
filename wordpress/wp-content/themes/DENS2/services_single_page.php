<?php
/**
 * Template Name: Services_Single_Page
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


        <?php if( get_field('name') ): ?>
 <header class="services_single_page section_header">
 <h3><?php the_field('name'); ?></h3>
        </header>
    <?php endif; ?>

</div>




    <?php if( get_field('description') ): ?>
 <div> <?php the_field('description'); ?> </div>
    <?php endif; ?>

</div>




                <div class="col-4-12">
                <?php get_sidebar(); ?>
                </div>
</div>
</div>




</section>

</main>
    <?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>