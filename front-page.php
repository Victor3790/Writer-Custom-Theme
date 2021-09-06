<?php
/**
 * The front page or home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Writer_Custom
 */

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

                        <h1 class="page-header-ui-title">Nombre escritor</h1>
                        <p class="page-header-ui-text mb-5">Descripción corta del escritor</p>

                        <a class="btn btn-teal fw-500 me-2" href="#libros">
                            Conoce su trabajo.
                            <i class="ms-2" data-feather="arrow-right"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php 

        /* 
        ** Wordpress loop to get books per category.
        */

        $terms = get_terms( array( 'taxonomy' => 'categorias_libros', 'hide_empty' => false ) );

        if( ! is_wp_error( $terms ) ) {
            foreach( $terms as $term ) {

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

                if( $books_query->have_posts() ) { 
    ?>

                    <section class="bg-white py-1" id="libros">
                        <div class="container px-5-r py-4 pt-7">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-left"><h1>Libros - <?php echo $term->name; ?></h1></div>
                                    <div class="pb-2 text-end"><a href="#">Ver todos</a></div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="owl-carousel owl-carousel1" style="padding-right:0px;">

                                    <?php while( $books_query->have_posts() ) : $books_query->the_post(); ?>

                                        <div>
                                            <a 
                                                class="card no-boder-radius card-portfolio h-100" 
                                                href="<?php echo esc_url( the_permalink() ); ?>">
                                                <img 
                                                    class="no-boder-radius card-img-top" 
                                                    src="<?php echo esc_url( the_post_thumbnail_url() ); ?>">               
                                            </a>
                                        </div>

                                    <?php endwhile; ?>

                                </div><!-- .owl-carousel -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </section>

    <?php 
                }//end if
    
            }//end foreach

        }// end if
    
    ?>

    <?php 
        /*
        ** Regular Wordpress loop to get posts.
        */
    ?>
    <section class="bg-white py-1 pb-10" id="Articulos">
        <div class="container px-5-r py-4 pt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-left"><h1>Artículos</h1></div>
                    <div class="pb-2 text-end"><a href="#">Ver todos</a></div>
                </div>
            </div>
            <div class="row pt-1">
                <div class="owl-carousel owl-carousel3" style="padding-right:0px;">

                    <?php
                        if ( have_posts() ) :

                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/card-post' );

                            endwhile;

                        else :

                            echo 'No hay artículos para mostrar.';

                        endif;
                    ?>

                </div><!-- .owl-carousel -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php
get_footer();
