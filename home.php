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

					get_template_part( 'template-parts/card-blog-post' );

				endwhile;

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
		?>
		</div>
		
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-blog justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a>
            	</li>
                <li class="page-item active"><a class="page-link" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
            	<li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                <li class="page-item"><a class="page-link" href="#!">12</a></li>
                <li class="page-item">
                    <a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a>
                </li>
            </ul>
        </nav>
                            
    </div>
</section>
<hr class="m-0" />

<?php
get_footer();
