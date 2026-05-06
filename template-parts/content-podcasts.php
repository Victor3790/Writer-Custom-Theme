<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

if( ! function_exists( 'get_field' ) ) {

    echo '<h1>ACF plugin is needed for this page to work correctly.</h1>';
    return;

}

$podcast_url = get_field( 'podcast' );

$current_post_id = get_the_ID();

?>

<section class="bg-light pb-3">
<div class="container pt-5">
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0"><?php the_title(); ?></h2>
    </div>
    <hr class="mb-4">
    
    <div class="row gx-5 pt-1">
        <div class="col-12 mb-5">
            <iframe src="<?php echo $podcast_url; ?>" width="100%" height="232" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
</div>

<div class="svg-border-rounded text-white">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
</div>

</section>

<section class="bg-white pb-10">
<div class="container pt-5">    
    <div class="row gx-5 pt-1">
        <?php
            $args = array(
                'post_type' => 'podcasts',
                'post__not_in' => array( $current_post_id ),
                'posts_per_page' => 6
            );
                            
                $podcasts_query = new WP_Query( $args );

                if( $podcasts_query->have_posts() ) : 

                    while( $podcasts_query->have_posts() ) : $podcasts_query->the_post();
                        get_template_part( 'template-parts/card', get_post_type() );
                    endwhile;

                    wp_reset_postdata();
                endif;
        ?>
    </div>
</div>
</section>
<hr class="m-0" />