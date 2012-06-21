<?php
/***

	The Header for the theme.
	
	Displays all of the <head> section and everything up till <div id="main">

***/
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'startertheme' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/_js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?
// for development purposes, do not edit below
//if ( defined( 'SB_FORCE_THEME' ) ) {
?>
	<div id="development_info" class="native_html_style">
		<?
		$user = wp_get_current_user();
		$current_theme = get_option('current_theme');
		?>
		<dl>
			<dt>Logged in as:</dt>
			<dd><?=$user->user_login?></dd>
			<dt>Theme:</dt>
			<dd><?=SB_FORCE_THEME?></dd>
			<dt>current_theme</dt>
			<dd><?=$current_theme?></dd>
		</dl>
	</div>
<?
//}
// for development purposes, do not edit above
?>
<div id="wrapper" class="hfeed">
	<header id="header">
		<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'p'; ?>
		<<?php echo $heading_tag; ?> id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></<?php echo $heading_tag; ?>>
		<nav id="access" role="navigation">
			<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */
			wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) );
			?>
		</nav>
		<?php
		// Header Widgets.
		if ( is_active_sidebar( 'header-widget-area' ) ) : ?>
	
			<div id="header-widgets" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'header-widget-area' ); ?>
			</div><!-- #header-widgets .widget-area -->
	
		<?php endif; ?>
	</header><!-- #header -->
	<div id="main">