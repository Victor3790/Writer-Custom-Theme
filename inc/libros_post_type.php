<?php
function wct_register_libro() {

	/**
	 * Post Type: libros.
	 */

	$labels = [
		"name" => __( "Libros", "writer-custom" ),
		"singular_name" => __( "libro", "writer-custom" ),
	];

	$args = [
		"label" => __( "libros", "writer-custom" ),
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
		"rewrite" => [ "slug" => "libro", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"show_in_graphql" => false,
	];

	register_post_type( "libro", $args );

    /**
    * Taxonomy: Categorías.
    */
    
    $labels = [
        "name" => __( "Categorías", "barcos_barcelona" ),
        "singular_name" => __( "Categoría", "barcos_barcelona" ),
    ];
    
        
    $args = [
        "label" => __( "Categorías", "barcos_barcelona" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => false,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'categorias', 'with_front' => true, ],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "rest_base" => "categorias",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "categorias", [ "libro" ], $args );
    
}

add_action( 'init', 'wct_register_libro' );
