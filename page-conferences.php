<?php
/**
 * Custom page for conferences info and contact
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

get_header();

if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', 'conf' );

	endwhile;

endif;

get_footer();
