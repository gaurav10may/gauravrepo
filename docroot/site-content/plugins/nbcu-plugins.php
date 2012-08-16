<?
/**
 * Plugin Name: NBCUPress Plugin Loader
 */

/**
 * Filter plugins_url() so that it works for plugins inside the nbcu-plugins directory.
 * Props to the Mo Jangda & Automattic dev team for helping come up with this method.
 */
function nbcu_plugins_url( $url = '', $path = '', $plugin = '' ) {

	$nbcu_url = '/nbcu-plugins/';
	$plugins_plugin_dir = WP_PLUGIN_DIR;
	// clean out double // for matching purposes below
	$plugins_plugin_dir = str_replace("//","/",$plugins_plugin_dir);
	$plugin_base_name = basename( dirname( $plugin ));
	$plugin_dir_path = rtrim(str_replace( basename( dirname( $plugin ) ), '', dirname( $plugin ) ), '/');
	if(($plugin_dir_path != $plugins_plugin_dir) && $plugin_dir_path){
		$url = WP_PLUGIN_URL.$nbcu_url.$plugin_base_name;
	}
	
	return $url;
}
add_filter( 'plugins_url', 'nbcu_plugins_url', 10, 3 );

if( ! function_exists( 'get_plugins' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}

// This path needs to be relative to the core plugins folder because of how get_plugins does its lookup
$nbc_plugins_relative_path = '/nbcu-plugins/'; // can also use something like '/../../nbcuplugins/' but that gets messy and difficult to maintain, so just set up a symlink if needed

$nbc_plugins = get_plugins( $nbc_plugins_relative_path );

// Autoload our plugins
foreach ( $nbc_plugins as $plugin_basename => $plugin_data ) { 
	require_once( WP_PLUGIN_DIR . $nbc_plugins_relative_path . $plugin_basename ); 
}

add_action( 'init', 'nbcu_plugins_loader_init' );

function nbcu_plugins_loader_init() {
	add_filter( 'all_plugins', 'nbcu_plugins_loader_add_to_plugins_list' );
}

function nbcu_plugins_loader_add_to_plugins_list( $plugins ) {
	global $nbc_plugins;

	// The standard actions don't apply so let's remove them
	foreach ( $nbc_plugins as $plugin_file => $plugin_info ) {
		add_filter( 'plugin_action_links_' . $plugin_file, 'nbcu_plugins_loader_remove_plugin_actions' );
	}

	// Merge our custom plugins with the standard plugins
	return array_merge( (array) $nbc_plugins, $plugins );
}

function nbcu_plugins_loader_remove_plugin_actions( $actions ) {
	return array();
}


?>