<?php
/**
 * Template part for displaying the writer's biography
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

?>

<section class="bg-white pb-10">
    <div class="container px-5 pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0"><?php the_title(); ?></h2>
        </div>
        <hr class="mb-4">
        <div class="row gx-5">
            <div class="col-md-8"><!-- pictures section -->
                <div class="row gx-5">

                    <?php foreach ( $args['imgs'] as $key => $value ) : ?>

                        <?php if( $key%2 == 0 ) : ?>

                            <div class="col-md-4">

                        <?php endif; ?>

                            <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $value['url']; ?>">
                                <img 
                                    class="card-img-top" 
                                    src="<?php echo $value['url']; ?>" 
                                    alt="<?php echo $value['alt']; ?>"
                                >                    
                            </a>

                        <?php if( $key%2 != 0 ) : ?>
                            
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>
            </div><!--  pictures section  -->
            <div class="col-md-4">                        
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
