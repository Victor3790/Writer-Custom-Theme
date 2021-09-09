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
            <h1 class="mb-0">Videos - <?php echo $tax->name; ?></h1>
        </div>
        <hr class="mb-4">
        <div class="row gx-4 pt-1">

            <?php
            if ( have_posts() ) :

                while ( have_posts() ) :
                    the_post();

            ?>

                <div class="col-6 col-xl-4 col-xxl-3 mb-3">
                    <a class="card card-portfolio h-100" href="<?php echo esc_url( the_permalink() ); ?>">
                        <img class="card-img-bottom card-img-top" src="<?php echo esc_url( the_post_thumbnail_url() ); ?>">
                            <div class="card-body">
                                <div class="card-title"><p class="mb-0"><?php the_title(); ?></p></div>
                                    <p class="card-text text-gray-600 d-none d-lg-block small mb-0">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                    <p class="card-text text-gray-600  small">23 jun.</p>
                            </div>
                    </a>
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