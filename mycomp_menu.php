<?php
/*
Plugin Name: My Company Menu
Version: 1.1.1
Plugin URI: http://www.immense.net/
Description: Give your clients a Company Menu to manage contact information and custom subpages (like Pods managers).
Author: Immense Networks | Jason Michael Cross
Author URI: http://www.immense.net/
*/

/* Definitions */
define('MYCOMP_MENU_VERSION', '1.1.1');
define('MYCOMP_MENU_URL', plugin_dir_url( __FILE__ ));
define('CURRENT_PAGE', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

register_activation_hook( __FILE__, 'set_mycomp_menu_activate' );

if(mcm_dbversion()) {
	set_mycomp_menu_activate();
	update_option('mycomp_menu_dbversion', MYCOMP_MENU_VERSION);
}

// Determine database version number of MCM
function mcm_dbversion() {
	if(get_option('mycomp_menu_dbversion') < MYCOMP_MENU_VERSION) {
		return true;
	} else {
		return false;
	}
}

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
	add_option('mycomp_menu_dbversion', MYCOMP_MENU_VERSION);
	add_option('mycomp_menu_phone', '');
	add_option('mycomp_menu_tollfree', '');
	add_option('mycomp_menu_fax', '');
	add_option('mycomp_menu_email', '');
	add_option('mycomp_menu_add1', '');
	add_option('mycomp_menu_add2', '');
	add_option('mycomp_menu_city', '');
	add_option('mycomp_menu_state', '');
	add_option('mycomp_menu_zip', '');
	add_option('mycomp_menu_socialsprite', MYCOMP_MENU_URL.'images/socialsprite.png');
	add_option('mycomp_menu_socialsprite_icon_width', '16');
	add_option('mycomp_menu_socialsprite_icon_height', '16');
	add_option('mycomp_menu_facebook', '');
	add_option('mycomp_menu_facebook_x', '-16');
	add_option('mycomp_menu_facebook_y', '0');
	add_option('mycomp_menu_facebook_x_hover', '-16');
	add_option('mycomp_menu_facebook_y_hover', '-16');
	add_option('mycomp_menu_linkedin', '');
	add_option('mycomp_menu_linkedin_x', '-32');
	add_option('mycomp_menu_linkedin_y', '0');
	add_option('mycomp_menu_linkedin_x_hover', '-32');
	add_option('mycomp_menu_linkedin_y_hover', '-16');
	add_option('mycomp_menu_twitter', '');
	add_option('mycomp_menu_twitter_x', '-48');
	add_option('mycomp_menu_twitter_y', '0');
	add_option('mycomp_menu_twitter_x_hover', '-48');
	add_option('mycomp_menu_twitter_y_hover', '-16');
	add_option('mycomp_menu_vimeo', '');
	add_option('mycomp_menu_vimeo_x', '-64');
	add_option('mycomp_menu_vimeo_y', '0');
	add_option('mycomp_menu_vimeo_x_hover', '-64');
	add_option('mycomp_menu_vimeo_y_hover', '-16');
	add_option('mycomp_menu_youtube', '');
	add_option('mycomp_menu_youtube_x', '-80');
	add_option('mycomp_menu_youtube_y', '0');
	add_option('mycomp_menu_youtube_x_hover', '-80');
	add_option('mycomp_menu_youtube_y_hover', '-16');
	add_option('mycomp_menu_gplus', '');
	add_option('mycomp_menu_gplus_x', '0');
	add_option('mycomp_menu_gplus_y', '0');
	add_option('mycomp_menu_gplus_x_hover', '0');
	add_option('mycomp_menu_gplus_y_hover', '-16');
	add_option('mycomp_menu_skype', '');
	add_option('mycomp_menu_skype_x', '-112');
	add_option('mycomp_menu_skype_y', '0');
	add_option('mycomp_menu_skype_x_hover', '-112');
	add_option('mycomp_menu_skype_y_hover', '-16');
	add_option('mycomp_menu_rss', '');
	add_option('mycomp_menu_rss_x', '-96');
	add_option('mycomp_menu_rss_y', '0');
	add_option('mycomp_menu_rss_x_hover', '-96');
	add_option('mycomp_menu_rss_y_hover', '-16');
	add_option('mycomp_menu_stumble', '');
	add_option('mycomp_menu_stumble_x', '-128');
	add_option('mycomp_menu_stumble_y', '0');
	add_option('mycomp_menu_stumble_x_hover', '-128');
	add_option('mycomp_menu_stumble_y_hover', '-16');
	add_option('mycomp_menu_disclaimer', '');
	//help page
	add_option('mycomp_menu_icon', MYCOMP_MENU_URL.'images/mycomp_icon.png');
	add_option('mycomp_menu_compname', 'My Company');
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
		'dbversion'		=> get_option('mycomp_menu_dbversion'),
		'phone'			=> get_option('mycomp_menu_phone'),
		'tollfree'		=> get_option('mycomp_menu_tollfree'),
		'fax'			=> get_option('mycomp_menu_fax'),
		'add1'			=> get_option('mycomp_menu_add1'),
		'add2'			=> get_option('mycomp_menu_add2'),
		'city'			=> get_option('mycomp_menu_city'),
		'state'			=> get_option('mycomp_menu_state'),
		'zip'			=> get_option('mycomp_menu_zip'),
		'email'			=> get_option('mycomp_menu_email'),
		'facebook'		=> get_option('mycomp_menu_facebook'),
		'linkedin'		=> get_option('mycomp_menu_linkedin'),
		'twitter'		=> get_option('mycomp_menu_twitter'),
		'youtube'		=> get_option('mycomp_menu_youtube'),
		'vimeo'			=> get_option('mycomp_menu_vimeo'),
		'gplus'			=> get_option('mycomp_menu_gplus'),
		'rss'			=> get_option('mycomp_menu_rss'),
		'skype'			=> get_option('mycomp_menu_skype'),
		'disclaimer'	=> get_option('mycomp_menu_disclaimer'),
		'stumble'		=> get_option('mycomp_menu_stumble'),
		//'gmapcode' => get_option('mycomp_menu_gmapcode'),
	);
}

function get_mycomp_menu_help() {
	return array(
	'icon'						=> get_option('mycomp_menu_icon'),
	'compname'					=> get_option('mycomp_menu_compname'),
	'showdemo'					=> get_option('mycomp_menu_showdemo'),
	'socialsprite'				=> get_option('mycomp_menu_socialsprite'),
	'socialsprite_icon_width'	=> get_option('mycomp_menu_socialsprite_icon_width'),
	'socialsprite_icon_height'	=> get_option('mycomp_menu_socialsprite_icon_height'),
	'skype_x'					=> get_option('mycomp_menu_skype_x'),
	'skype_y'					=> get_option('mycomp_menu_skype_y'),
	'gplus_x'					=> get_option('mycomp_menu_gplus_x'),
	'gplus_y'					=> get_option('mycomp_menu_gplus_y'),
	'vimeo_x'					=> get_option('mycomp_menu_vimeo_x'),
	'vimeo_y'					=> get_option('mycomp_menu_vimeo_y'),
	'youtube_x'					=> get_option('mycomp_menu_youtube_x'),
	'youtube_y'					=> get_option('mycomp_menu_youtube_y'),
	'twitter_x'					=> get_option('mycomp_menu_twitter_x'),
	'twitter_y'					=> get_option('mycomp_menu_twitter_y'),
	'linkedin_x'				=> get_option('mycomp_menu_linkedin_x'),
	'linkedin_y'				=> get_option('mycomp_menu_linkedin_y'),
	'facebook_x'				=> get_option('mycomp_menu_facebook_x'),
	'facebook_y'				=> get_option('mycomp_menu_facebook_y'),
	'rss_x'						=> get_option('mycomp_menu_rss_x'),
	'rss_y'						=> get_option('mycomp_menu_rss_y'),
	'stumble_x'					=> get_option('mycomp_menu_stumble_x'),
	'stumble_y'					=> get_option('mycomp_menu_stumble_y'),
	'gplus_x_hover'				=> get_option('mycomp_menu_gplus_x_hover'),
	'gplus_y_hover'				=> get_option('mycomp_menu_gplus_y_hover'),
	'skype_x_hover'				=> get_option('mycomp_menu_skype_x_hover'),
	'skype_y_hover'				=> get_option('mycomp_menu_skype_y_hover'),
	'vimeo_x_hover'				=> get_option('mycomp_menu_vimeo_x_hover'),
	'vimeo_y_hover'				=> get_option('mycomp_menu_vimeo_y_hover'),
	'youtube_x_hover'			=> get_option('mycomp_menu_youtube_x_hover'),
	'youtube_y_hover'			=> get_option('mycomp_menu_youtube_y_hover'),
	'twitter_x_hover'			=> get_option('mycomp_menu_twitter_x_hover'),
	'twitter_y_hover'			=> get_option('mycomp_menu_twitter_y_hover'),
	'linkedin_x_hover'			=> get_option('mycomp_menu_linkedin_x_hover'),
	'linkedin_y_hover'			=> get_option('mycomp_menu_linkedin_y_hover'),
	'facebook_x_hover'			=> get_option('mycomp_menu_facebook_x_hover'),
	'facebook_y_hover'			=> get_option('mycomp_menu_facebook_y_hover'),
	'rss_x_hover'				=> get_option('mycomp_menu_rss_x_hover'),
	'rss_y_hover'				=> get_option('mycomp_menu_rss_y_hover'),
	'stumble_x_hover'			=> get_option('mycomp_menu_stumble_x_hover'),
	'stumble_y_hover'			=> get_option('mycomp_menu_stumble_y_hover'),
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
	wp_register_style('mycomp_frontend_stylesheet', MYCOMP_MENU_URL.'css/mycomp_frontend_style.css');
	wp_enqueue_style('mycomp_frontend_stylesheet', MYCOMP_MENU_URL.'css/mycomp_frontend_style.css');
	echo 'this works';
}
/*
if(company_social()) {
	add_action('wp_head','mycomp_frontend_load_styles', 1);
}
*/

?>