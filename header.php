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
                            <!--<ul class="navbar-nav ms-auto me-lg-5">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="biografia.php">Biografía</a></li>
                                <li class="nav-item dropdown no-caret">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Libros
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                        <a class="dropdown-item py-3" href="libros1.php">
                                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="book-open"></i></div>
                                            <div>
                                                <div class="small text-gray-500">Categoría 1</div>
                                                Descripción corta de categoría 1
                                            </div>
                                        </a>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item py-3" href="libros2.php">
                                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i></div>
                                            <div>
                                                <div class="small text-gray-500">Categoría 2</div>
                                                Descripción corta de categoría 2
                                            </div>
                                        </a>
                                        <div class="dropdown-divider m-0"></div>
                                            
                                    </div>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="videos.php">Videos</a></li>
                                <li class="nav-item"><a class="nav-link" href="podcast.php">Podcasts</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                            </ul>-->
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'menu-1',
                                    'container'         => 'ul',
                                    'menu_class'        => 'navbar-nav ms-auto me-lg-5',
                                    'fallback_cb'       => false
                                ) );
                            ?>
                            <a style="background-color:#876501; border-color:#876501;" class="btn fw-500 ms-lg-4 btn-teal" href="#">
                                <i class="me-2" data-feather="star"></i>
                                Membresía
                            </a>
                        </div><!-- .collapse -->
                    </div><!-- .container -->
                </nav><!--Navbar-->
				