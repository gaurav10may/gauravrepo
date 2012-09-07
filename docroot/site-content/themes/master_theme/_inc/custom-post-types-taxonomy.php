<?php
/***

	SITE Custom Post Types, Custom Taxonomy

***/

/*--------------------------------------------------------------------------------------
*
*	nbcupress_custom_init_cpt
*
*	@desc This function should contain Custom post types/taxonomy
*	@author Scott Nath
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'nbcupress_custom_init_cpt' ) ){
	function nbcupress_custom_init_cpt(){
	
	
	/*
	EXAMPLE CUSTOM TAXONOMY CREATION
	*/
	/*
		$args = array(
		    'label'                         => 'Example Categories',
	        'labels'                => array(
	            'name'              => __( 'Example Categories' ),
	            'singular_name'     => __( 'Example Category' )
	            ),
		    'public'                        => true,
		    'hierarchical'                  => true,
		    'show_ui'                       => true,
		    'show_in_nav_menus'             => true,
		    'args'                          => array( 'orderby' => 'term_order' ),
		    'rewrite'                       => array( 'slug' => 'categories', 'with_front' => false ),
		    'query_var'                     => true
		);
		register_taxonomy( 'examples', 'example', $args );
	*/
	/*
	EXAMPLE custom post type
	*/
	/*
		register_post_type( 'example',
		    array(
		        'labels'                => array(
		            'name'              => __( 'Examples' ),
		            'singular_name'     => __( 'Example' )
		            ),
		        'description' => '',
				'public' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'capability_type' => 'post',
				'hierarchical' => false,
				'query_var' => true,
		        'supports' => array( 'title','editor','revisions','thumbnail','author' ),
		        'rewrite' => array( 'slug' => 'whats-hot/#%postname%', 'with_front' => false ),
		        'has_archive' => true,
				'taxonomies'		=> array( 'examples' ) //
		    )
		);
	*/
		
	}
	add_action( 'init', 'nbcupress_custom_init_cpt' );
} // ! function_exists( 'nbcupress_custom_init_cpt' )
?>