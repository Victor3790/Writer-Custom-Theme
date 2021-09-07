<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

get_header();
?>

<section class="bg-white pb-10">
    <div class="container pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Blog</h2>
        </div>
        <hr class="mb-4">
		<div class="row gx-5 mb-5">

		<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/card', 'blog' );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
		?>
		</div>

        <?php get_template_part( 'template-parts/pagination' ); ?>
                            
    </div>
</section>
<hr class="m-0" />

<?php
get_footer();
