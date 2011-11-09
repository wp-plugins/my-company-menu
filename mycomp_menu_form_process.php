<?php

/**
* @plugin My Company Menu Plugin
* @title  Form processing, update database values
* @author Jason Michael Cross - www.jasonmichaelcross.com
* @author Immense Networks - www.immense.net
*/

/* OPTIONS PAGE Check if values have changed, then updated changes in wp_options table */
function update_mycomp_menu() {	
	update_option('mycomp_menu_phone', $_POST['mycomp_menu_phone']);
	update_option('mycomp_menu_tollfree', $_REQUEST['mycomp_menu_tollfree']);
	update_option('mycomp_menu_fax', $_REQUEST['mycomp_menu_fax']);
	update_option('mycomp_menu_state', $_REQUEST['mycomp_menu_state']);
	update_option('mycomp_menu_add1', $_REQUEST['mycomp_menu_add1']);
	update_option('mycomp_menu_add2', $_REQUEST['mycomp_menu_add2']);
	update_option('mycomp_menu_city', $_REQUEST['mycomp_menu_city']);
	update_option('mycomp_menu_zip', $_REQUEST['mycomp_menu_zip']);
	update_option('mycomp_menu_email', $_REQUEST['mycomp_menu_email']);
	update_option('mycomp_menu_facebook', $_REQUEST['mycomp_menu_facebook']);
	update_option('mycomp_menu_linkedin', $_REQUEST['mycomp_menu_linkedin']);
	update_option('mycomp_menu_twitter', $_REQUEST['mycomp_menu_twitter']);
	update_option('mycomp_menu_youtube', $_REQUEST['mycomp_menu_youtube']);
	update_option('mycomp_menu_vimeo', $_REQUEST['mycomp_menu_vimeo']);
	update_option('mycomp_menu_gplus', $_REQUEST['mycomp_menu_gplus']);
	update_option('mycomp_menu_skype', $_REQUEST['mycomp_menu_skype']);
	update_option('mycomp_menu_rss', $_REQUEST['mycomp_menu_rss']);
	update_option('mycomp_menu_disclaimer', $_REQUEST['mycomp_menu_disclaimer']);
	update_option('mycomp_menu_stumble', $_REQUEST['mycomp_menu_stumble']);
	//update_option('mycomp_menu_gmapcode', $_REQUEST['mycomp_menu_gmapcode']);
?>
<div id="message" class="updated fade">
	<p>Options saved.</p>
</div> <!-- /message -->
<?php
}

/* Remove values from wp_options table when plugin is deactivated. This is disabled by default -- Uncomment the following deactivation hook to remove items from database when you disable this plugin. */

//register_deactivation_hook( __FILE__, 'unset_mycomp_menu_deactivate' );

function unset_mycomp_menu_deactivate() {
	delete_option('mycomp_menu_phone');
	delete_option('mycomp_menu_tollfree');
	delete_option('mycomp_menu_fax');
	delete_option('mycomp_menu_add1');
	delete_option('mycomp_menu_add2');
	delete_option('mycomp_menu_city');
	delete_option('mycomp_menu_state');
	delete_option('mycomp_menu_zip');
	delete_option('mycomp_menu_email');
	delete_option('mycomp_menu_socialsprite');
	delete_option('mycomp_menu_socialsprite_icon_x');
	delete_option('mycomp_menu_socialsprite_icon_y');
	delete_option('mycomp_menu_socialsprite_icon_width');
	delete_option('mycomp_menu_socialsprite_icon_height');
	delete_option('mycomp_menu_facebook');
	delete_option('mycomp_menu_facebook_x');
	delete_option('mycomp_menu_facebook_y');
	delete_option('mycomp_menu_linkedin');
	delete_option('mycomp_menu_linkedin_x');
	delete_option('mycomp_menu_linkedin_y');
	delete_option('mycomp_menu_twitter');
	delete_option('mycomp_menu_twitter_x');
	delete_option('mycomp_menu_twitter_y');
	delete_option('mycomp_menu_youtube');
	delete_option('mycomp_menu_youtube_x');
	delete_option('mycomp_menu_youtube_y');
	delete_option('mycomp_menu_vimeo');
	delete_option('mycomp_menu_vimeo_x');
	delete_option('mycomp_menu_vimeo_y');
	delete_option('mycomp_menu_gplus');
	delete_option('mycomp_menu_gplus_x');
	delete_option('mycomp_menu_gplus_y');
	delete_option('mycomp_menu_skype');
	delete_option('mycomp_menu_skype_x');
	delete_option('mycomp_menu_skype_y');
	delete_option('mycomp_menu_rss');
	delete_option('mycomp_menu_rss_x');
	delete_option('mycomp_menu_rss_y');
	delete_option('mycomp_menu_stumble');
	delete_option('mycomp_menu_stumble_x');
	delete_option('mycomp_menu_stumble_y');
	delete_option('mycomp_menu_disclaimer');

	//help page
	delete_option('mycomp_menu_icon');
	delete_option('mycomp_menu_compname');
	delete_option('mycomp_menu_showdemo');
	delete_option('mycomp_menu_facebook_x_hover');
	delete_option('mycomp_menu_facebook_y_hover');
	delete_option('mycomp_menu_linkedin_x_hover');
	delete_option('mycomp_menu_linkedin_y_hover');
	delete_option('mycomp_menu_twitter_x_hover');
	delete_option('mycomp_menu_twitter_y_hover');
	delete_option('mycomp_menu_youtube_x_hover');
	delete_option('mycomp_menu_youtube_y_hover');
	delete_option('mycomp_menu_vimeo_x_hover');
	delete_option('mycomp_menu_vimeo_y_hover');
	delete_option('mycomp_menu_gplus_x_hover');
	delete_option('mycomp_menu_gplus_y_hover');
	delete_option('mycomp_menu_skype_x_hover');
	delete_option('mycomp_menu_skype_y_hover');
	delete_option('mycomp_menu_rss_x_hover');
	delete_option('mycomp_menu_rss_y_hover');
	delete_option('mycomp_menu_stumble_x_hover');
	delete_option('mycomp_menu_stumble_y_hover');
	//delete_option('mycomp_menu_gmacode');
}

/* HELP PAGE Check if values have changed, then updated changes in wp_options table */
function update_mycomp_menu_help() {	
	update_option('mycomp_menu_icon', $_POST['mycomp_menu_icon']);
	update_option('mycomp_menu_compname', $_REQUEST['mycomp_menu_compname']);
	update_option('mycomp_menu_showdemo', $_POST['mycomp_menu_showdemo']);
	update_option('mycomp_menu_socialsprite', $_POST['mycomp_menu_socialsprite']);
	update_option('mycomp_menu_socialsprite_icon_width', $_POST['mycomp_menu_socialsprite_icon_width']);
	update_option('mycomp_menu_socialsprite_icon_height', $_POST['mycomp_menu_socialsprite_icon_height']);
	update_option('mycomp_menu_facebook_x', $_POST['mycomp_menu_facebook_x']);
	update_option('mycomp_menu_facebook_y', $_POST['mycomp_menu_facebook_y']);
	update_option('mycomp_menu_linkedin_x', $_POST['mycomp_menu_linkedin_x']);
	update_option('mycomp_menu_linkedin_y', $_POST['mycomp_menu_linkedin_y']);
	update_option('mycomp_menu_twitter_x', $_POST['mycomp_menu_twitter_x']);
	update_option('mycomp_menu_twitter_y', $_POST['mycomp_menu_twitter_y']);
	update_option('mycomp_menu_youtube_x', $_POST['mycomp_menu_youtube_x']);
	update_option('mycomp_menu_youtube_y', $_POST['mycomp_menu_youtube_y']);
	update_option('mycomp_menu_vimeo_x', $_POST['mycomp_menu_vimeo_x']);
	update_option('mycomp_menu_vimeo_y', $_POST['mycomp_menu_vimeo_y']);
	update_option('mycomp_menu_gplus_x', $_POST['mycomp_menu_gplus_x']);
	update_option('mycomp_menu_gplus_y', $_POST['mycomp_menu_gplus_y']);
	update_option('mycomp_menu_skype_x', $_POST['mycomp_menu_skype_x']);
	update_option('mycomp_menu_skype_y', $_POST['mycomp_menu_skype_y']);
	update_option('mycomp_menu_rss_x', $_POST['mycomp_menu_rss_x']);
	update_option('mycomp_menu_rss_y', $_POST['mycomp_menu_rss_y']);
	update_option('mycomp_menu_stumble_x', $_POST['mycomp_menu_stumble_x']);
	update_option('mycomp_menu_stumble_y', $_POST['mycomp_menu_stumble_y']);
	update_option('mycomp_menu_facebook_x_hover', $_POST['mycomp_menu_facebook_x_hover']);
	update_option('mycomp_menu_facebook_y_hover', $_POST['mycomp_menu_facebook_y_hover']);
	update_option('mycomp_menu_linkedin_x_hover', $_POST['mycomp_menu_linkedin_x_hover']);
	update_option('mycomp_menu_linkedin_y_hover', $_POST['mycomp_menu_linkedin_y_hover']);
	update_option('mycomp_menu_twitter_x_hover', $_POST['mycomp_menu_twitter_x_hover']);
	update_option('mycomp_menu_twitter_y_hover', $_POST['mycomp_menu_twitter_y_hover']);
	update_option('mycomp_menu_youtube_x_hover', $_POST['mycomp_menu_youtube_x_hover']);
	update_option('mycomp_menu_youtube_y_hover', $_POST['mycomp_menu_youtube_y_hover']);
	update_option('mycomp_menu_vimeo_x_hover', $_POST['mycomp_menu_vimeo_x_hover']);
	update_option('mycomp_menu_vimeo_y_hover', $_POST['mycomp_menu_vimeo_y_hover']);
	update_option('mycomp_menu_gplus_x_hover', $_POST['mycomp_menu_gplus_x_hover']);
	update_option('mycomp_menu_gplus_y_hover', $_POST['mycomp_menu_gplus_y_hover']);
	update_option('mycomp_menu_rss_x_hover', $_POST['mycomp_menu_rss_x_hover']);
	update_option('mycomp_menu_rss_y_hover', $_POST['mycomp_menu_rss_y_hover']);
	update_option('mycomp_menu_stumble_x_hover', $_POST['mycomp_menu_stumble_x_hover']);
	update_option('mycomp_menu_stumble_y_hover', $_POST['mycomp_menu_stumble_y_hover']);
	update_option('mycomp_menu_skype_x_hover', $_POST['mycomp_menu_skype_x_hover']);
	update_option('mycomp_menu_skype_y_hover', $_POST['mycomp_menu_skype_y_hover']);
?>
<div id="message" class="updated fade">
	<p>Options saved. You may need to refresh this page to see changes.</p>
</div> <!-- /message -->
<meta http-equiv=refresh content="0">
<?php
}

/* Check if form has validation errors */
function mycomp_menu_form_errorcheck() {

}

?>