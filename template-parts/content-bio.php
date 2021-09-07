<?php
/**
 * Template part for displaying the writers biography
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

// Get the images together with alt info.

if ( ! defined( 'ABSPATH' ) ) die();

if( ! function_exists( 'get_field' ) ) {

    echo '<h1>ACF plugin is needed for this page to work correctly.</h1>';
    return;

}

$imgs = array();

$imgs['pic_1']['id'] = get_field( 'foto_1' );
$imgs['pic_2']['id'] = get_field( 'foto_2' );
$imgs['pic_3']['id'] = get_field( 'foto_3' );
$imgs['pic_4']['id'] = get_field( 'foto_4' );
$imgs['pic_5']['id'] = get_field( 'foto_5' );
$imgs['pic_6']['id'] = get_field( 'foto_6' );

foreach ( $imgs as &$img ) {

    if( ! $img['id'] ) {

        $img['url'] = WRTR_CUST_THEME_URI . '/assets/img/backgrounds/bg-dropdown-xl.jpg';
        $img['alt'] = 'Imagen del autor';

    } else {

        $attachment = get_post( $img['id'] );

        $img['url'] = $attachment->guid;
        $img['alt'] = get_post_meta( $img['id'], '_wp_attachment_image_alt', true );        

    }

}

?>

<section class="bg-white pb-10">
    <div class="container px-5 pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0"><?php the_title(); ?></h2>
        </div>
        <hr class="mb-4">
        <div class="row gx-5">
            <div class="col-md-8">
                <div class="row gx-5">
                    <div class="col-md-4">
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_1']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_1']['url']; ?>" 
                                alt="<?php echo $imgs['pic_1']['alt']; ?>"
                            >                    
                        </a>
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_2']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_2']['url']; ?>" 
                                alt="<?php echo $imgs['pic_2']['alt']; ?>"
                            >                    
                        </a>
                    </div>
                    <div class="col-md-4">
                    <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_3']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_3']['url']; ?>" 
                                alt="<?php echo $imgs['pic_3']['alt']; ?>"
                            >                    
                        </a>
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_4']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_4']['url']; ?>" 
                                alt="<?php echo $imgs['pic_4']['alt']; ?>"
                            >                    
                        </a>
                    </div>
                    <div class="col-md-4">
                    <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_5']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_5']['url']; ?>" 
                                alt="<?php echo $imgs['pic_5']['alt']; ?>"
                            >                    
                        </a>
                        <a class="card card-portfolio mb-5" target="_blank" href="<?php echo $imgs['pic_6']['url']; ?>">
                            <img 
                                class="card-img-top" 
                                src="<?php echo $imgs['pic_6']['url']; ?>" 
                                alt="<?php echo $imgs['pic_6']['alt']; ?>"
                            >                    
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">                        
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
