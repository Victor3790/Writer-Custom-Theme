<?php 
/* 
** Show books per category (Taxonomy)
*/

if ( ! defined( 'ABSPATH' ) ) die();

?>
<section class="bg-white py-1 pb-10" id="Articulos">
    <div class="container px-5-r py-4 pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-left"><h2>Artículos</h2></div>
                <div class="pb-2 text-end">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>">
                        Ver todos
                    </a>
                </div>
            </div>
        </div>
        <div class="row pt-1">
            <div class="owl-carousel owl-carousel3" style="padding-right:0px;">

                <?php while ( $args['posts_query']->have_posts() ) : $args['posts_query']->the_post(); ?>

                    <div><!-- Blog post start -->
                        <a class="card card-articulos-index lift h-100" href="<?php esc_url( the_permalink() ); ?>">
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
                    </div><!-- Blog post end -->
                        
                <?php endwhile; ?>

            </div><!-- .owl-carousel -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>