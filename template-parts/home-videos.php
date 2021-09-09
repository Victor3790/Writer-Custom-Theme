<?php 
/* 
** Show videos
*/

if ( ! defined( 'ABSPATH' ) ) die();

?>
<section class="bg-white py-1" id="libros">
    <div class="container px-5-r py-4 pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-left"><h1>Videos</h1></div>
                <div class="pb-2 text-end"><a href="#">Ver todos</a></div>
            </div>
        </div>
        <div class="row pt-1">
            <div class="owl-carousel owl-carousel2" style="padding-right:0px;">

                <?php while( $args['videos_query']->have_posts() ) : $args['videos_query']->the_post(); ?>

                <div>
                    <a class="card card-portfolio h-100" href="<?php echo esc_url( the_permalink() ); ?>">
                        <img class="card-img-top" src="<?php echo esc_url( the_post_thumbnail_url() ); ?>">
                        <div class="card-body2">
                            <div class="d-flex align-items-center">
                                <div class="icon-stack icon-stack-sl text-blue flex-shrink-0 btn-opacity-75">
                                    <i class="fas fa-play"></i>
                                </div>
                                <div class="col ms-3">
                                    <h4 class="card-title mb-2"><?php the_title(); ?></h4>
                                </div>                       
                            </div>
                        </div>
                    </a>
                </div>   

                <?php endwhile; ?>

            </div>
        </div>
    </div>
</section>