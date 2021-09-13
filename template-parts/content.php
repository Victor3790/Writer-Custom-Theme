<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

$author_id = get_the_author_meta('ID');
?>

<section class="bg-white pb-10">
    <div class="container pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Blog</h1>
        </div>
        <hr class="mb-4">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="single-post">
                    <h2><?php the_title(); ?></h2>
                    <div class="d-flex align-items-center justify-content-between mb-5">
                        <div class="single-post-meta me-4">
                            <img class="single-post-meta-img" src="<?php echo get_avatar_url( $author_id ); ?>" />
                            <div class="single-post-meta-details">
                                <div class="single-post-meta-details-name"><?php the_author(); ?></div>
                                <div class="single-post-meta-details-date"><?php the_date(); ?></div>
                            </div>
                        </div>
                        <div class="single-post-meta-links">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url( the_permalink() ); ?>">
								<i class="fab fa-twitter fa-fw"></i>
							</a>
                            <a href="https://twitter.com/intent/tweet?url=<?php esc_url( the_permalink() ); ?>">
								<i class="fab fa-facebook-f fa-fw"></i>
							</a>
                        </div>
                    </div>
                    <img class="img-fluid mb-2 rounded" src="<?php esc_url( the_post_thumbnail_url() ); ?>" />
                    <div class="small text-gray-500 text-center"><?php echo get_the_post_thumbnail_caption(); ?></div>
                    <div class="single-post-text my-5">
						<?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
</section>
<hr class="m-0" />
