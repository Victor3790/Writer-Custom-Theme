<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

get_header();
?>

<section class="bg-white pb-5">
    <div class="container px-5 pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Libros</h1>
        </div>
        <hr class="mb-4">
        <div class="row gx-4 pt-1">

            <?php
            if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/card', 'libros' );

            ?>



            <?php

                endwhile;

            endif;

            ?>

        </div>
    </div>

    <?php get_template_part( 'template-parts/pagination' ); ?>

</section>
<hr class="m-0" />

<?php
get_footer();