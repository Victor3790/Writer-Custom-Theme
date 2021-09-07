<?php 
/* 
** Show books per category (Taxonomy)
*/

if ( ! defined( 'ABSPATH' ) ) die();

?>
<section class="bg-white py-1" id="libros">
    <div class="container px-5-r py-4 pt-7">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-left"><h1>Libros - <?php echo $args['term']->name; ?></h1></div>
                <div class="pb-2 text-end"><a href="#">Ver todos</a></div>
            </div>
        </div>
        <div class="row pt-1">
            <div class="owl-carousel owl-carousel1" style="padding-right:0px;">

                <?php while( $args['books_query']->have_posts() ) : $args['books_query']->the_post(); ?>

                    <div>
                        <a 
                            class="card no-boder-radius card-portfolio h-100" 
                            href="<?php echo esc_url( the_permalink() ); ?>">
                                <img 
                                class="no-boder-radius card-img-top" 
                                src="<?php echo esc_url( the_post_thumbnail_url() ); ?>">               
                        </a>
                    </div>

                <?php endwhile; ?>

            </div><!-- .owl-carousel -->
        </div><!-- .row -->
    </div><!-- .container -->
</section>