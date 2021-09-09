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

$tax = $wp_query->get_queried_object();

get_header();
?>

<section class="bg-white pb-5">
    <div class="container px-5 pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Podcasts - <?php echo $tax->name; ?></h1>
        </div>
        <hr class="mb-4">
        <div class="row gx-4 pt-1">

            <?php
            if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();

            ?>

                <div class="col-12 mb-2">
                    <div class="d-flex align-items-center podcast-list">
                        <div class="icon-stack icon-stack-xl text-white flex-shrink-0">
                            <a href="<?php esc_url( the_permalink() ); ?>">
                                <img class=" card-img-top" src="<?php esc_url( the_post_thumbnail_url() ); ?>">
                            </a>
                        </div>
                        <div class="col ms-4">
                            <a href="<?php esc_url( the_permalink() ); ?>">
                                <h6 class="text-dark"><?php the_title(); ?></h6>
                            </a>
                            <p class="card-text text-gray-600 d-none d-lg-block small"><?php the_content(); ?></p>
                        </div>
                        <div class="col-auto ps-3">
                            <p class="card-text text-gray-600 small text-end">26 jun. 2021<br><?php echo get_field( 'duracion' ); ?></p>
                        </div>    
                    </div>
                </div>

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