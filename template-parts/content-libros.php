<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();
?>

<section class="bg-white pb-5">
    <div class="container px-5 pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Libros</h1>
        </div>
        <hr class="mb-4">
        <div class="row gx-5">
            <div align="center" class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="fade-up">
                <a style="max-width:80%" class="card no-boder-radius card-portfolio mb-5" href="<?php esc_url( the_post_thumbnail_url('large') ); ?>">
                    <!--<img class="no-boder-radius card-img-top" src="<?php //esc_url( the_post_thumbnail_url('large') ); ?>">-->
                    <?php the_post_thumbnail('full', ['class'=>'no-boder-radius card-img-top']); ?>
                </a>
                                    
            </div>
            <div class="col-lg-8 col-md-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="align-items-center justify-content-between">
                    <h2 class="page-header-ui-title mb-3"><?php the_title(); ?></h2>
					<?php the_content(); ?>
                </div>
                <div class="row gx-5 mt-5">
                    <div class="col-lg-4">
                        <div class="d-flex h-100">
                            <div class="icon-stack flex-shrink-0 bg-teal text-white"><i class="fas fa-book"></i></div>
                            <div class="ms-4">
                                <h6>Número de páginas</h6>
                                <p class="text-dark-50 small"><?php echo get_field( 'paginas' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex h-100">
                            <div class="icon-stack flex-shrink-0 bg-teal text-white"><i class="fas fa-globe"></i></div>
                            <div class="ms-4">
                                <h6>Idioma</h6>
                                <p class="text-dark-50 small"><?php echo get_field( 'idioma' ); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex h-100">
                            <div class="icon-stack flex-shrink-0 bg-teal text-white"><i class="fas fa-store-alt"></i></div>
                            <div class="ms-4">
                                <h6>Editorial</h6>
                                <p class="text-dark-50 small"><?php echo get_field( 'editorial' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="m-0" />
