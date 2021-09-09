<?php
/**
 *  Functions to set up the podcasts cutom post type 
 * and its category taxonomy
*/

if ( ! defined( 'ABSPATH' ) ) die();

function wct_register_podcasts() {

	/**
	 * Post Type: podcasts.
	 */

	$labels = [
		"name" => __( "podcasts", "writer-custom" ),
		"singular_name" => __( "podcast", "writer-custom" ),
	];

	$args = [
		"label" => __( "podcasts", "writer-custom" ),
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
		"rewrite" => [ "slug" => "podcast", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "podcasts", $args );

    /**
    * Taxonomy: Categorías.
    */
    
    $labels = [
        "name" => __( "Categorías podcasts", "writer-custom" ),
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
        "rewrite" => [ 'slug' => 'categorias_podcasts', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "categorias_podcasts",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "categorias_podcasts", [ "podcasts" ], $args );
    
}

add_action( 'init', 'wct_register_podcasts' );
