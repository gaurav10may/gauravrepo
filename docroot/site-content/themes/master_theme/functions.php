<?php
/***

	SITE Theme functions and definitions

***/

/************************************************************************************************************************

	GENERAL ITEMS
	
************************************************************************************************************************/


/*--------------------------------------------------------------------------------------
*
*	REQUIRE: custom-content-types-custom-fields
*
*	@desc Requires a file which is used to create all Custom Post Types and Custom Taxonomies
*	@author Scott Nath
*	@since 1.1
* 
*-------------------------------------------------------------------------------------*/
require_once('_inc/custom-post-types-taxonomy.php');

/*--------------------------------------------------------------------------------------
*
*	REQUIRE: advanced-custom-fields
*
*	@desc Requires a file which is includes functions for created custom fields
*	@author Scott Nath
*	@since 1.1
* 
*-------------------------------------------------------------------------------------*/
require_once('_inc/advanced-custom-fields.php');


/*--------------------------------------------------------------------------------------
*
*	site_theme_setup
*
*	@desc Sets up theme defaults and registers support for various WordPress features.
*	@author Scott Nath
*	@uses register_nav_menus() To add support for navigation menus
		http://codex.wordpress.org/Function_Reference/register_nav_menus
*	@uses post-thumbnails
		http://codex.wordpress.org/Post_Thumbnails
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'site_theme_setup' ) ){
	function site_theme_setup() {
	
		// MENUS
		register_nav_menu( 'primary', 'Primary Menu' );
	
		add_theme_support( 'post-thumbnails' );
		/* EXAMPLE
		http://codex.wordpress.org/Function_Reference/add_theme_support
		Enable for Posts and "movie" post type but not for Pages:
		add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) );
		*/
		
	}
	add_action( 'after_setup_theme', 'site_theme_setup' );
} // ! function_exists( 'site_theme_setup' )


/**
 * Register widgetized areas
 *
 */
 
/*--------------------------------------------------------------------------------------
*
*	site_theme_widgets_init
*
*	@desc Creates widgitized area(s)
*	@author Scott Nath
*	@uses http://codex.wordpress.org/Function_Reference/register_sidebar
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'site_theme_widgets_init' ) ){
	function site_theme_widgets_init() {
		// Header Area, located in header
		register_sidebar( array(
			'name' => 'Header Widget Area',
			'id' => 'header-widget-area',
			'description' => 'The header widget area',
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<header><h3 class="widget-title">',
			'after_title' => '</h3></header>',
		) );
	
	}
	/** Register sidebars by running site_theme_widgets_init() on the widgets_init hook. */
	add_action( 'widgets_init', 'site_theme_widgets_init' );
} // ! function_exists( 'site_theme_widgets_init' )


/************************************************************************************************************************

	ADMINISTRATION VIEW
	
************************************************************************************************************************/


/*--------------------------------------------------------------------------------------
*
*	site_dashboard_inner
*
*	@desc Uses the action "site_dashboard_widget_inner" to add content to the SITE dashboard widget
*	@author Scott Nath
*	@requires site_dashboard_widget_function() in NBCUPress
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'site_dashboard_inner' ) ){
	function site_dashboard_inner(){
		echo 'This code goes into the site dashboard module';
		?>
		<!-- EXAMPLE: -->
		<ul>
			<li><a href="<?=get_admin_url()?>edit.php?post_type=page">Edit Pages</a></li>
		</ul>
		<?
	}
	add_action( 'site_dashboard_widget_inner', 'site_dashboard_inner', 10, 2 );
} // ! function_exists( 'site_dashboard_inner' )



/*--------------------------------------------------------------------------------------
*
*	load_custom_wp_admin_style
*
*	@desc Adds a css file from this theme folder that can override css in the admin area
*	@author Scott Nath
*	@uses http://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'load_custom_wp_admin_style' ) ){
	function load_custom_wp_admin_style(){
		wp_register_style( 'theme_admin_css', get_bloginfo('template_directory') . '/_css/admin.css', false, '1.0.0' );
		wp_enqueue_style( 'theme_admin_css' );
	}
	add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');
} // ! function_exists( 'load_custom_wp_admin_style' )



/************************************************************************************************************************

	FRONT OF WEBSITE
	
************************************************************************************************************************/

/*-------------------------------------------------------------------------------------- 
*
*	nbcupress_theme_init()
*
*	@desc 'init' is called before any headers are sent to the browser. 'theme_init' is used to queue up the css files
*	@author Scott Nath
*	@uses http://codex.wordpress.org/Function_Reference/wp_enqueue_style
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'theme_init' ) ){
	function nbcupress_theme_init() {
		if (!is_admin()) {
		    $theme  = get_theme( get_current_theme() );
			wp_enqueue_style( 'global-style', get_template_directory_uri() . '/_css/global.css', false, $theme['Version'] );
			wp_enqueue_style( 'page_structure-style', get_template_directory_uri() . '/_css/page_structure.css', false, $theme['Version'] );
			wp_enqueue_style( 'content_structure-style', get_template_directory_uri() . '/_css/content_structure.css', false, $theme['Version'] );
			wp_enqueue_style( 'general_styles-style', get_template_directory_uri() . '/_css/general_styles.css', false, $theme['Version'] );
			wp_enqueue_style( 'specific_styles-style', get_template_directory_uri() . '/_css/specific_styles.css', false, $theme['Version'] );
			wp_enqueue_style( 'buttons_and_icons-style', get_template_directory_uri() . '/_css/buttons_and_icons.css', false, $theme['Version'] );
		}
	}
}
add_action('init', 'nbcupress_theme_init');

/*-------------------------------------------------------------------------------------- 
*
*	nbcupress_scripts_init
*
*	@desc Used to add Javascripts to the client-facing side of the site.
*	@author Scott Nath
*	@uses http://codex.wordpress.org/Function_Reference/wp_enqueue_script
*	@since 1.0
*

*	@NOTE: jQuery is automatically added by NBCUPress. If you want site.js to be below other scripts you must include 
		the HANDLE of those in the "dependencies" section of wp_enqueue_script.

*	@EXAMPLE:
		wp_enqueue_script('site_js', get_template_directory_uri() . '/_js/site.js', array('jquery','jquery-ui-core'), '1.0');
			//registers site_js as requiring BOTH jquery AND jquery-ui-core and enqueues the script
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'nbcupress_scripts_init' ) ){
	function nbcupress_scripts_init() {
	
		// enqueue our script
		wp_enqueue_script('site_js', get_template_directory_uri() . '/_js/site.js', array('jquery'), '1.0');
	}    
	add_action('wp_enqueue_scripts', 'nbcupress_scripts_init');
} // nbcupress_scripts_init


/*-------------------------------------------------------------------------------------- 
*
*	site_theme_item_posted_on()
*
*	@desc Uses multiple functions to create the "Posted On" date. This can be changed to fit whatever this site needs.
*	@author Scott Nath
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
if ( ! function_exists( 'site_theme_item_posted_on' ) ){
	function site_theme_item_posted_on() {
		printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'startertheme' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'startertheme' ), get_the_author() ),
			esc_html( get_the_author() )
		);
	}
} // ! function_exists( 'site_theme_item_posted_on' )
