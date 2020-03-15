<?php
/**
 * Template Name: Price
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
            <header class="section_header">
                <h2>Cennik usług</h2>
            </header>
        </div>


    <div class="accordion">

     <div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Stomatologia zachowawcza</h3>
    <img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.svg" alt="" class="accordion_tab_arrow">
    </div>


    <?php if( get_field('table_1') ): ?>
    <?php the_field('table_1'); ?>
    <?php endif; ?>
    </div>


    <div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Endodoncja <br>specjalistyczne leczenie kanałowe pod mikroskopem</h3>
    <img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.svg" alt="" class="accordion_tab_arrow">
    </div>


    <?php if( get_field('table_2') ): ?>
    <?php the_field('table_2'); ?>
    <?php endif; ?>
    </div>



    </div>


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