<?php
/***

	SITE Custom Post Types, Custom Taxonomy and Advanced Custom Fields

***/


/*--------------------------------------------------------------------------------------
*
*	nbcupress_custom_init
*
*	@desc This function should contain anything that needs to happen on Wordpress init. Custom post types/taxonomy, Advanced Custom Fields, etc.
*	@author Scott Nath
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'nbcupress_custom_init' ) ){
	function nbcupress_custom_init(){
	
	/*EXAMPLE CUSTOM POST TYPE CREATION
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
		        'has_archive' => true
		    )
		);
	*/
	
	
	/*EXAMPLE CUSTOM TAXONOMY CREATION
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
	
	
	}
	add_action( 'init', 'nbcupress_custom_init' );
} // ! function_exists( 'nbcupress_custom_init' )
?>