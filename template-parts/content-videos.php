<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

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
                    <iframe src="https://www.youtube.com/embed/b7zyO6RdxZw?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
                                                         
            </div>
            <div class="col-md-5 col-xl-5">
                <a class="badge badge-marketing bg-primary-soft rounded-pill text-primary mb-3" href="#!">Nuevo</a>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <p class="px-3 text-end small">Walter Riso - 16 jun. 2021</p>
                <hr>
                <h5>Compartir</h5>
                <div class="icon-list-social">
                    <a class="icon-list-social-link text-dark" href="#!"><i class="fab fa-instagram"></i></a>
                    <a class="icon-list-social-link text-dark" href="#!"><i class="fab fa-facebook"></i></a>
                    <a class="icon-list-social-link text-dark" href="#!"><i class="fab fa-github"></i></a>
                    <a class="icon-list-social-link text-dark" href="#!"><i class="fab fa-twitter"></i></a>
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
                ?>
                                <div class="col-6 col-xl-4 col-xxl-3 mb-3">
                                    <a class="card card-portfolio h-100" href="<?php echo esc_url( the_permalink() ); ?>">
                                        <img class="card-img-bottom card-img-top" src="<?php echo esc_url( the_post_thumbnail_url() ); ?>">
                                        <div class="card-body">
                                            <div class="card-title"><p class="mb-0"><?php the_title(); ?></p></div>
                                            <p class="card-text text-gray-600 d-none d-lg-block small mb-0">
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <p class="card-text text-gray-600  small">23 jun.</p>
                                        </div>
                                    </a>
                                </div>
                <?php 
                            endwhile;

                        endif;
                ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
