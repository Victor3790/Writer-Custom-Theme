<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Writer_Custom
 */

require WRTR_CUST_THEME_DIR . '/inc/walker_nav_menu.php';

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <!--Navbar-->
                <?php if( is_front_page() ) : ?>
                    <nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top">
                <?php else : ?>
                    <nav class="navbar navbar-marketing navbar-expand-lg bg-dark navbar-dark">
                <?php endif; ?>
                    <div class="container px-5">
                        <a class="navbar-brand text-white" href="index.php">Escritor</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'Primary',
                                    'theme_location'    => 'menu-1',
                                    'walker'            => new Wrtr_Cust_Walker_Nav_Menu(),
                                    'container'         => 'ul',
                                    'menu_class'        => 'navbar-nav ms-auto me-lg-5',
                                ) );
                            ?>
                            <a style="background-color:#876501; border-color:#876501;" class="btn fw-500 ms-lg-4 btn-teal" href="#">
                                <i class="me-2" data-feather="star"></i>
                                Membresía
                            </a>
                        </div><!-- .collapse -->
                    </div><!-- .container -->
                </nav><!--Navbar-->
				