<?php
define( "COBOL_TYPES_URL", plugins_url(). "/cobol-press-post-types" . "/" );
define( "COBOL_TYPES_ASSETS", plugins_url(). "/cobol-press-post-types" . "/assets/");
define( "COBOL_TYPES_IMAGES", plugins_url(). "/cobol-press-post-types" . "/assets/images/");


// Dont Touch Fixes Bootstrap conflict with WordPress
add_action('admin_head', 'fix_cobol_style');
function fix_cobol_style(){
	echo '
		<style type="text/css">
			#adminmenuback{ z-index: 0; }
		</style>
	';
}
add_action('admin_menu', 'init_cobol_types_admin');
function init_cobol_types_admin(){
	/* Add Cobol Types Menu Page*/
	 add_menu_page( __("Cobol Types"), "Cobol Types", "manage_options", "cobol_types", "load_cobol_types_admin",  COBOL_TYPES_ASSETS . 'img/cobolpress.png', 59 );
	 add_submenu_page('cobol_types', 'Add New Cobol Type', 'Add New Cobol Type', 'manage_options', 'add_new_cobol_type', 'load_add_new_cobol_type');
}
function load_cobol_types_admin(){
	require 'admin/options.php';
}
function load_add_new_cobol_type(){
	require 'admin/add-new.php';
}
add_action('admin_init', 'cobol_types_styles');
function cobol_types_styles(){
	wp_register_style('cobol_types_style', COBOL_TYPES_ASSETS . 'css/bootstrap.css');
	wp_enqueue_style('cobol_types_style');
}
//add_action('admin_init', 'cobol_types_scripts');
function cobol_types_scripts(){
	wp_register_style('cobol_types_script', COBOL_TYPES_ASSETS . 'js/bootstrap.js');
	wp_enqueue_style('cobol_types_script');
}
add_action('plugins_loaded', 'load_cobol_textdomain');
function load_cobol_textdomain(){
	 load_plugin_textdomain('cobol_types', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action('init', 'load_cobal_types');
function load_cobal_types(){
	require 'load-types.php';
}