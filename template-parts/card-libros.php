<?php
/*
*   Card for showing libros post type in archive pages    
*/

if ( ! defined( 'ABSPATH' ) ) die();

?>
<div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-5">
    <a class="card no-boder-radius card-portfolio h-100" href="<?php echo esc_url( the_permalink() ); ?>">
        <img class="no-boder-radius card-img-top" src="<?php echo esc_url( the_post_thumbnail_url() ); ?>">
        <div class="text-dark fw-bold mt-2"><p class="mb-0"><?php the_title(); ?></p></div>
    </a>
</div>
