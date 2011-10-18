<?php
/*
Plugin Name: My Company Menu
Version: 1.0.2
Plugin URI: http://www.jasonmichaelcross.com/
Description: Manage common company information (phone number, email, physical address, etc.) within WordPress. 
Author: Immense Networks | Jason Michael Cross
Author URI: http://www.immense.net/
*/

/* Definitions */
define('MYCOMP_MENU_VERSION', '1.0.2');
define('MYCOMP_MENU_URL', plugin_dir_url( __FILE__ ));

register_activation_hook( __FILE__, 'set_mycomp_menu_activate' );

/* Create Admin menus */
include ('mycomp_menu_admin_menus.php');
include ('mycomp_menu_mce.php');

function reset_mycomp_menu() {
	if($_REQUEST['submit_reset']) {
        unset_mycomp_menu_deactivate();
    }
}
/* Create default values in wp_options table when plugin is activated */
function set_mycomp_menu_activate() {
	add_option('mycomp_menu_phone', '');
	add_option('mycomp_menu_tollfree', '');
	add_option('mycomp_menu_fax', '');
	add_option('mycomp_menu_email', '');
	add_option('mycomp_menu_add1', '');
	add_option('mycomp_menu_add2', '');
	add_option('mycomp_menu_city', '');
	add_option('mycomp_menu_state', '');
	add_option('mycomp_menu_zip', '');
	add_option('mycomp_menu_facebook', '');
	add_option('mycomp_menu_linkedin', '');
	add_option('mycomp_menu_twitter', '');
	add_option('mycomp_menu_youtube', '');
	add_option('mycomp_menu_vimeo', '');
	add_option('mycomp_menu_gplus', '');
	add_option('mycomp_menu_disclaimer', '');
	//help page
	add_option('mycomp_menu_icon', MYCOMP_MENU_URL.'images/mycomp_icon.png');
	add_option('mycomp_menu_compname', 'Company');
	add_option('mycomp_menu_showdemo', '');
	//add_option('mycomp_menu_gmapcode', '');
}

/* Load the Admin CSS */
function mycomp_menu_load_styles() {
	wp_enqueue_style('mycomp_admin_style', MYCOMP_MENU_URL.'css/mycomp_admin_style.css');
}
add_action("admin_print_styles",'mycomp_menu_load_styles');

/* Returns array of values for admin options page */
function get_mycomp_menu_contact() {
	return array(
		'phone' => get_option('mycomp_menu_phone'),
		'tollfree' => get_option('mycomp_menu_tollfree'),
		'fax' => get_option('mycomp_menu_fax'),
		'add1' => get_option('mycomp_menu_add1'),
		'add2' => get_option('mycomp_menu_add2'),
		'city' => get_option('mycomp_menu_city'),
		'state' => get_option('mycomp_menu_state'),
		'zip' => get_option('mycomp_menu_zip'),
		'email' => get_option('mycomp_menu_email'),
		'facebook' => get_option('mycomp_menu_facebook'),
		'linkedin' => get_option('mycomp_menu_linkedin'),
		'twitter' => get_option('mycomp_menu_twitter'),
		'youtube' => get_option('mycomp_menu_youtube'),
		'vimeo' => get_option('mycomp_menu_vimeo'),
		'gplus' => get_option('mycomp_menu_gplus'),
		'disclaimer' => get_option('mycomp_menu_disclaimer')
		//'gmapcode' => get_option('mycomp_menu_gmapcode'),
	);
}

function get_mycomp_menu_help() {
	return array(
	'icon' => get_option('mycomp_menu_icon'),
	'compname' => get_option('mycomp_menu_compname'),
	'showdemo' => get_option('mycomp_menu_showdemo')
	);
}

/* Functions to enqueue scripts for file uploading */
function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', MYCOMP_MENU_URL.'/js/mycomp_menu_help.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');
}

/* Enqueue scripts for file uploading on Manage Help page */
if (isset($_GET['page']) && $_GET['page'] == 'manage_help') {
	add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
}

/* Pulls markup into main My Company Options page */
function load_mycomp_menu() {
	$options = get_mycomp_menu_contact();
	include ('mycomp_menu_markup.php');
}

/* Pulls markup into My Company Help page */
function load_mycomp_menu_help() {
	$hoptions = get_mycomp_menu_help();
	include ('mycomp_menu_help.php');
}

// Use custom mcm_menu if available in Uploads directory */
function load_mcm_menu_custom() {
  include('../wp-content/uploads/mcm_menu.php');
}

// Use default mcm_menu.php
function load_mcm_menu_default() {
  include('../wp-content/plugins/my-company-menu/mcm_menu.php'); // use default mcm_menu
}

/* Pull in functions for processing forms*/
include ('mycomp_menu_form_process.php');

/* Pull in shortcode functions for front-end use */
include('mycomp_menu_shortcodes.php');


/* Frontend CSS (if applicable) */
function mycomp_frontend_load_styles() {
	//wp_register_style('mycomp_frontend_stylesheet', MYCOMP_MENU_URL.'css/mycomp_frontend_style.css');
	wp_enqueue_style('mycomp_frontend_stylesheet', MYCOMP_MENU_URL.'css/mycomp_frontend_style.css');
}
$hasSocial = company_social();
if($hasSocial) {
	add_action('wp_head','mycomp_frontend_load_styles');
}

?>