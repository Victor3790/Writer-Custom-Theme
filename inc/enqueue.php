<?php
/**
 * Enqueue scripts and styles.
 */

if ( ! defined( 'ABSPATH' ) ) die();

function writer_custom_scripts() {
	wp_enqueue_style( 'writer-custom-style', get_stylesheet_uri(), array(), WRTR_CUST_VERSION );
	//wp_style_add_data( 'writer-custom-style', 'rtl', 'replace' );

	wp_enqueue_script( 'writer-custom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), WRTR_CUST_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'writer_custom_scripts' );
