<?php
/**
 * Template Name: Price
 */

get_header(); ?>


<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="section_single_page price">
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
<div class="col-8-12 single_page_box">

        <div class="header_container">
            <header class="section_header">
                <h2>Cennik usług</h2>
            </header>
        </div>

<div class="accordion">

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Stomatologia zachowawcza</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
    </div>


    <?php if( get_field('table_1') ): ?>
    <?php the_field('table_1'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Endodoncja <br>specjalistyczne leczenie kanałowe pod mikroskopem</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_2') ): ?>
    <?php the_field('table_2'); ?>
    <?php endif; ?>
</div>

 <div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Ortodoncja</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_3') ): ?>
    <?php the_field('table_3'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Chirurgia stomatologiczna</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_4') ): ?>
    <?php the_field('table_4'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Implantologia</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_5') ): ?>
    <?php the_field('table_5'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Protetyka</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_6') ): ?>
    <?php the_field('table_6'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Diagnostyka radiologiczna RTG</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_7') ): ?>
    <?php the_field('table_7'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Profilaktyka</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_8') ): ?>
    <?php the_field('table_8'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Wybielanie</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_9') ): ?>
    <?php the_field('table_9'); ?>
    <?php endif; ?>
</div>

<div class="accordion_tab">
     <div class="accordion_tab_title">
     <h3>Konsultacje specjalistyczne</h3>
     <div class="accordion_tab_arrow"><div class="arrow-down"></div></div>
     </div>


    <?php if( get_field('table_10') ): ?>
    <?php the_field('table_10'); ?>
    <?php endif; ?>
</div>

</div>

<div class="price_descritpion">
Cennik podany na stronie internetowej nie stanowi oferty handlowej w rozumieniu przepisów Kodeksu Cywilnego.<br>
Zawiera tylko wybrane zabiegi i usługi, które oferuje klinika.<br>
Z uwagi na specyfikację branży stomatologicznej plan i koszt leczenia można precyzyjnie określić dopiero na podstawie badania i konsultacji z lekarzem stomatologiem.<br>
Ceny podane w cenniku mogą ulec zmianie.

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