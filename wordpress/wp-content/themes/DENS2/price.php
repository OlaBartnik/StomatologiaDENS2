<?php
/**
 * Template Name: Price
 */

get_header(); ?>


<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="section_pirce">
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

            <header class="section_header">
                <h2>Cennik usług</h2>
            </header>



            <div class="price_box_tab">
                    <h3>Stomatologia zachowawcza</h3>
<div>
    <table>
    <thead>
        <tr>
            <td>Nazwa usługi:</td>
            <td>Cena:</td>
        </tr>
    </thead>

    <tbody>
        <tr>
        <td><?php the_field('name_1'); ?></td>
            <td><?php the_field('price_1'); ?></td>
        </tr>

        <tr>
        <td><?php the_field('name_2'); ?></td>
            <td><?php the_field('price_2'); ?></td>
        </tr>

    </tbody>


</table>

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