<?php
/**
 *  Functions to set up the videos cutom post type 
 * and its category taxonomy
*/

if ( ! defined( 'ABSPATH' ) ) die();

function wct_register_videos() {

	/**
	 * Post Type: videos.
	 */

	$labels = [
		"name" => __( "videos", "writer-custom" ),
		"singular_name" => __( "video", "writer-custom" ),
	];

	$args = [
		"label" => __( "videos", "writer-custom" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "video", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "videos", $args );

    /**
    * Taxonomy: Categorías.
    */
    
    $labels = [
        "name" => __( "Categorías", "writer-custom" ),
        "singular_name" => __( "Categoría", "writer-custom" ),
    ];
    
        
    $args = [
        "label" => __( "Categorías", "writer-custom" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'categorias_videos', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "categorias_videos",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "categorias_videos", [ "videos" ], $args );
    
}

add_action( 'init', 'wct_register_videos' );
