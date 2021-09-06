<?php
/**
 * Enqueue scripts and styles.
 */

if ( ! defined( 'ABSPATH' ) ) die();

function writer_custom_scripts() {
	wp_enqueue_style( 'writer-custom-style', get_stylesheet_uri(), array(), WRTR_CUST_THEME_VERSION );

	wp_enqueue_script( 'writer-custom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), WRTR_CUST_THEME_VERSION, true );

	wp_enqueue_script( 
		WRTR_CUST_THEME_NAME . '_font_awesome', 
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js',
		array(),
		'5.15.1', 
		true
	);

	wp_enqueue_script( 
		WRTR_CUST_THEME_NAME . '_feather_icons', 
		'https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js',
		array(),
		'4.24.1', 
		true
	);

	wp_enqueue_script( 
		WRTR_CUST_THEME_NAME . '_bootstrap_bundle', 
		'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.0.2', 
		true
	);

	wp_enqueue_script( 
		WRTR_CUST_THEME_NAME . '_scripts', 
		WRTR_CUST_THEME_URI . '/js/scripts.js',
		array( 
				'jquery', 
				WRTR_CUST_THEME_NAME . '_feather_icons',
				WRTR_CUST_THEME_NAME . '_bootstrap_bundle'
			),
		WRTR_CUST_THEME_VERSION, 
		true
	);

	if( is_front_page() ) {

		wp_enqueue_style( 
			WRTR_CUST_THEME_NAME . '_AOS_style', 
			'https://unpkg.com/aos@next/dist/aos.css',
			array(), 
			WRTR_CUST_THEME_VERSION 
		);

		wp_enqueue_style( 
			WRTR_CUST_THEME_NAME . '_owl_style', 
			WRTR_CUST_THEME_URI . '/css/owl.carousel.min.css',
			array(), 
			WRTR_CUST_THEME_VERSION 
		);

		wp_enqueue_script( 
			WRTR_CUST_THEME_NAME . '_AOS', 
			'https://unpkg.com/aos@next/dist/aos.js',
			array(),
			WRTR_CUST_THEME_VERSION , 
			true
		);

		wp_enqueue_script( 
			WRTR_CUST_THEME_NAME . '_owl', 
			WRTR_CUST_THEME_URI . '/js/owl.carousel.js',
			array(),
			WRTR_CUST_THEME_VERSION , 
			true
		);

		wp_enqueue_script( 
			WRTR_CUST_THEME_NAME . '_home', 
			WRTR_CUST_THEME_URI . '/js/home.js',
			array( 
					'jquery', 
					WRTR_CUST_THEME_NAME . '_AOS',
					WRTR_CUST_THEME_NAME . '_owl'
				),
			WRTR_CUST_THEME_VERSION, 
			true
		);		

	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'writer_custom_scripts' );
