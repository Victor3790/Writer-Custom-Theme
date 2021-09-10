<?php
/*
*   Card for showing blog posts in archive pages    
*/

if ( ! defined( 'ABSPATH' ) ) die();

?>
<div class="col-lg-4 mb-5">
    <a class="card lift h-100" href="<?php esc_url( the_permalink() ); ?>">
        <img class="card-img-top" src="<?php esc_url( the_post_thumbnail_url() ); ?>">
        <div class="card-body">
            <h4 class="card-title mb-2"><?php the_title(); ?></h4>
            <p class="card-text"><?php the_excerpt(); ?></p>
        </div>
        <div class="card-footer bg-transparent border-top d-flex align-items-center justify-content-between">
            <div class="small text-primary">Leer artículo</div>
            <div class="small text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></div>
        </div>
    </a>
</div>
