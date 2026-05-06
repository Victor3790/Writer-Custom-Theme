<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */
if ( ! defined( 'ABSPATH' ) ) die();

get_header();

if( ! function_exists( 'get_field' ) ) {

    echo '<h1>ACF plugin is needed for this page to work correctly.</h1>';
    return;

}
?>

	<main id="primary" class="site-main">
		<section class="bg-white pb-10">
			<div class="container pt-5">  
				<div class="d-flex align-items-center justify-content-between">
            		<h1 class="mb-0">Podcasts</h1>
        		</div>
        		<hr class="mb-4">

				<?php if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/card', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div>
		</section>
	</main><!-- #main -->

<?php

get_footer();
