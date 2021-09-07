<?php
/**
 * Custom page for the author biography
 *
 * @package Writer_Custom
 */

get_header();
?>
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'bio' );

			endwhile;

		endif;
		?>

<?php
get_footer();
