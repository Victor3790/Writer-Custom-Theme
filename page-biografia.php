<?php
/**
 * Custom page for the author biography
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

for ($i=1; $i <= 6; $i++) { 

    $img = array();

    $img['id'] = get_field( 'foto_' . $i );

    if( ! $img['id'] ) {

        $img['url'] = WRTR_CUST_THEME_URI . '/assets/img/backgrounds/bg-dropdown-xl.jpg';
        $img['alt'] = 'Imagen del autor';

    } else {

        $attachment = get_post( $img['id'] );

        $img['url'] = $attachment->guid;
        $img['alt'] = get_post_meta( $img['id'], '_wp_attachment_image_alt', true );        

    }

    //$imgs['pic_' . $i] = $img;

    array_push( $imgs, $img );

}

get_header();

if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'bio', array( 'imgs' => $imgs ) );

	endwhile;

endif;

get_footer();
