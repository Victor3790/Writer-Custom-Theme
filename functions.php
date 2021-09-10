<?php
/**
 * Writer Custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Writer_Custom
 */

if ( ! defined( 'ABSPATH' ) ) die();

if ( ! defined( 'WRTR_CUST_THEME_NAME' ) ) {
	define( 'WRTR_CUST_THEME_NAME', 'Writer_Custom_Theme' );
}

if ( ! defined( 'WRTR_CUST_THEME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'WRTR_CUST_THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'WRTR_CUST_THEME_DIR' ) ) {
	// Get writer custom theme directory path
	define( 'WRTR_CUST_THEME_DIR', get_template_directory() );
}

if ( ! defined( 'WRTR_CUST_THEME_URI' ) ) {
	// Get writer custom theme uri
	define( 'WRTR_CUST_THEME_URI', get_template_directory_uri() );
}

/**
 * Enqueue scripts and styles
 */
require WRTR_CUST_THEME_DIR . '/inc/enqueue.php';

/**
 * Create 'Libros' post type
 */
require WRTR_CUST_THEME_DIR . '/inc/libros_post_type.php';

/**
 * Create 'Videos' post type
 */
require WRTR_CUST_THEME_DIR . '/inc/videos_post_type.php';

/**
 * Create 'Podcasts' post type
 */
require WRTR_CUST_THEME_DIR . '/inc/podcasts_post_type.php';

/**
 * Create custom fields for custom post types and about page
 */
require WRTR_CUST_THEME_DIR . '/inc/custom_fields.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
require WRTR_CUST_THEME_DIR . '/inc/setup.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
require WRTR_CUST_THEME_DIR . '/inc/content_width.php';

/**
 * Register widget area.
 */
require WRTR_CUST_THEME_DIR . '/inc/widget_area.php';

/**
 * Custom template tags for this theme.
 */
require WRTR_CUST_THEME_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require WRTR_CUST_THEME_DIR . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require WRTR_CUST_THEME_DIR . '/inc/customizer.php';

/**
 * Writer custom theme settings.
 */
require WRTR_CUST_THEME_DIR . '/inc/writer_theme_customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require WRTR_CUST_THEME_DIR . '/inc/jetpack.php';
}

