<?php
/***

	SITE Options Override for ENVIRONMENT
	Override code for options which should be overridden in a single environment. This file is called from /nbcupress/nbcupress.php

***/



/*--------------------------------------------------------------------------------------
*
*	Override Single non-Serialized Option
*
*	@desc This is how you override an single option which is not in a serialized array
*	@author Scott Nath
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
/*
function nbcupress_single_blogdescription(){
	
	return 'Some other blog description';
}
$filter = new nbcupress_CallbackFilter(array('blogdescription' => nbcupress_single_blogdescription()));
add_filter('pre_option_blogdescription', array($filter, 'blogdescription'));
*/

/*--------------------------------------------------------------------------------------
*
*	Override Entire Serialized Option
*
*	@desc This is how you override an entire set of options which are in wp_options via a serialized array
*	@requires nbcupress_CallbackFilter Class, which is inside [docroot]/nbcupress/nbcu-plugins/nbcupress/nbcupress.php
*	@author Scott Nath
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
/*
function nbcupress_full_nbcupress_ramp_settings(){
	$nbcupress_ramp_settings = array( 
		'nbcupress_ramp_onoff' => '1', 
		'nbcupress_ramp_search_url' => 'header-pix',
		'nbcupress_ramp_autcomplete_url' => 'foot-pix'
	);
	return $nbcupress_ramp_settings;
}
$filter = new nbcupress_CallbackFilter(array('nbcupress_ramp_settings' => nbcupress_full_nbcupress_ramp_settings()));
add_filter('pre_option_nbcupress_ramp_settings', array($filter, 'nbcupress_ramp_settings'));
*/


/*--------------------------------------------------------------------------------------
*
*	Override One Option in an existing Serialized Option
*
*	@desc This is how you override a single option inside a serialized option in wp_options
*	@requires nbcupress_CallbackFilter Class, which is inside [docroot]/nbcupress/nbcu-plugins/nbcupress/nbcupress.php
*	@requires $wpdb - http://codex.wordpress.org/Class_Reference/wpdb
*	@author Scott Nath
*	@since 1.0
* 
*-------------------------------------------------------------------------------------*/
/*
function nbcupress_one_nbcupress_pixelman_settings(){
	global $wpdb;
	// get the options from the db
	$current_options = $wpdb->get_var( $wpdb->prepare( "SELECT option_value FROM $wpdb->options WHERE option_name='nbcupress_pixelman_settings';" ) );
	// unserialize the options into an array
	$current_options_array = unserialize($current_options);
	// change a single option inside the array
	$current_options_array['nbcupress_pixelman_onoff'] = '1';
	
	return $current_options_array;
	
}
$filter = new nbcupress_CallbackFilter(array('nbcupress_pixelman_settings' => nbcupress_one_nbcupress_pixelman_settings()));
add_filter('pre_option_nbcupress_pixelman_settings', array($filter, 'nbcupress_pixelman_settings'));
*/

?>