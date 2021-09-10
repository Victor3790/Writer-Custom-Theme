<?php
/*
*   Card for showing libros post type in archive pages    
*/

if ( ! defined( 'ABSPATH' ) ) die();

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
