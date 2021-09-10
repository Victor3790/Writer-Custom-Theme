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

$video_url = get_field( 'video' );

$terms = get_terms( array( 'taxonomy' => 'categorias_videos', 'hide_empty' => false ) );
$terms = array_reverse( $terms );
$current_post_id = get_the_ID();

if( is_wp_error( $terms ) )
    return;

?>

<section class="bg-light pb-5">
    <div class="container pt-5">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="mb-0">Videos</h2>
        </div>
        <hr class="mb-4">
                            
        <div class="row pt-1">
            <div class="col-md-7 col-xl-7 mb-5">
                                
                <div class="ratio ratio-16x9">
                    <iframe src="<?php echo $video_url; ?>" title="YouTube video" allowfullscreen></iframe>
                </div>
                                                         
            </div>
            <div class="col-md-5 col-xl-5">
                <a class="badge badge-marketing bg-primary-soft rounded-pill text-primary mb-3" href="#!">Nuevo</a>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <p class="px-3 text-end small"><?php echo get_field( 'autor' ); ?> - <?php echo get_field( 'fecha' ); ?></p>
                <hr>
                <h5>Compartir</h5>
                <div class="icon-list-social">
                    <a class="icon-list-social-link text-dark" 
                        target="_blank"
                        href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url( the_permalink() ); ?>">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="icon-list-social-link text-dark" 
                        target="_blank"
                        href="https://twitter.com/intent/tweet?url=<?php esc_url( the_permalink() ); ?>">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>                                           
            </div>
        </div>
    </div>         
                        
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
    </div>        
</section>

<div class="pb-7 bg-white"></div>
                    
<section class="bg-white">
    <div class="container" id="vids_tabs" >
        <ul class="nav nav-pills nav-fill">
            <?php foreach( $terms as $key => $term ) : ?>
                <li class="nav-item video_category_nav_item">
                    <a 
                        class="nav-link <?php if( $key == 0 ) echo 'active'; ?>" 
                        href="#cat_<?php echo $term->slug; ?>">
                        <?php echo $term->name; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php foreach( $terms as $key => $term ) : ?>
            <div id="cat_<?php echo $term->slug; ?>">
                <div class="container pt-2">  
                    <div class="row gx-3 pt-3 pb-7">
                        <?php
                            $args = array(
                                'post_type' => 'videos',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'categorias_videos',
                                        'field' => 'slug',
                                        'terms' => $term->slug
                                    )
                                ),
                                'post__not_in' => array( $current_post_id ),
                                'posts_per_page' => 6
                                );
                            
                                $videos_query = new WP_Query( $args );

                                if( $videos_query->have_posts() ) : 

                                    while( $videos_query->have_posts() ) : $videos_query->the_post();

                                        get_template_part( 'template-parts/card', 'videos' );

                                    endwhile;

                                endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
