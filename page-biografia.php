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

get_header();
?>
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'bio', array( 'imgs' => $imgs ) );

			endwhile;

		endif;
		?>

<?php
get_footer();
