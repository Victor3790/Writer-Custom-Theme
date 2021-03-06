<?php
/**
 * The front page or home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */
if ( ! defined( 'ABSPATH' ) ) die();

get_header();
?>

    <!-- Page Header-->
    <header id="header-home" class="page-header-ui page-header-ui-dark bg-gradient-primary-to-secondary">
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlayh"></div>
        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo esc_url( WRTR_CUST_THEME_URI . '/assets/video/BannerWalterRiso4.mp4' ); ?>" type="video/mp4">
        </video>

        <div class="page-header-ui-content pt-10">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 pt-5" data-aos="fade-up">

                        <h1 class="page-header-ui-title">
                            <?php 
								$name = get_theme_mod( 'wrtr_cust_name_handle' ); 
								echo ( empty( $name ) ) ? 'Nombre escritor' : $name;
							?>
                        </h1>
                        <p class="page-header-ui-text mb-5">
                            <?php 
								$name = get_theme_mod( 'wrtr_cust_description_handle' ); 
								echo ( empty( $name ) ) ? 'Descripción corta del escritor' : $name;
							?>
                        </p>

                        <a class="btn btn-teal fw-500 me-2" href="#libros">
                            Conoce su trabajo.
                            <i class="ms-2" data-feather="arrow-right"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-white py-1" id="libros">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php 

        /* 
        ** Wordpress loop to get books per category.
        */

        $terms = get_terms( array( 'taxonomy' => 'categorias_libros', 'hide_empty' => false ) );

        if( ! is_wp_error( $terms ) ) :
            foreach( $terms as $term ) :

                $args = array(
                    'post_type' => 'libros',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'categorias_libros',
                            'field' => 'slug',
                            'terms' => $term->slug
                        )
                    ),
                    'posts_per_page' => 8
                );

                $books_query = new WP_Query( $args );

                if( $books_query->have_posts() ) : 

                    get_template_part( 
                        'template-parts/home', 
                        'books', 
                        array( 'term' => $term, 'books_query' => $books_query ) 
                    );

                endif;
    
            endforeach;

        endif;
    
    ?>

    <div></div>
    
    <?php 
        /*
        ** Wordpress loop to get videos.
        */

        $args = array(
            'post_type' => 'videos',
            'posts_per_page' => 8
        );

        $videos_query = new WP_Query( $args );

        if( $videos_query->have_posts() ) : 

            get_template_part( 
                'template-parts/home', 
                'videos', 
                array( 'videos_query' => $videos_query ) 
            );

        endif;
    ?>

    <div></div>
    
    <?php 
        /*
        ** Wordpress loop to get posts.
        */

        $args = array(
            'posts_per_page' => 8
        );

        $posts_query = new WP_Query( $args );

        if( $posts_query->have_posts() ) : 

            get_template_part( 
                'template-parts/home', 
                'posts', 
                array( 'posts_query' => $posts_query ) 
            );

        endif;
    ?>

<?php
get_footer();
