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
            <source src="<?php echo WRTR_CUST_THEME_URI ?>/assets/video/BannerWalterRiso4.mp4" type="video/mp4">
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
get_footer();
