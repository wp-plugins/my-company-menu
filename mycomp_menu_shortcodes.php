<?php

/**
* @plugin My Company Menu Plugin
* @title  Shortcode functions
* @author Jason Michael Cross - www.jasonmichaelcross.com
* @author Immense Networks - www.immense.net
*/

/* Initialize shortcode functions */
add_shortcode('company_phone', 'company_phone');
add_shortcode('company_tollfree', 'company_tollfree');
add_shortcode('company_fax', 'company_fax');
add_shortcode('company_address', 'company_address');
add_shortcode('company_address_oneline', 'company_address_oneline');
add_shortcode('company_email', 'company_email');
add_shortcode('company', 'company_all');
add_shortcode('company_facebook', 'company_facebook');
add_shortcode('company_linkedin', 'company_linkedin');
add_shortcode('company_twitter', 'company_twitter');
add_shortcode('company_youtube', 'company_youtube');
add_shortcode('company_vimeo', 'company_vimeo');
add_shortcode('company_gplus', 'company_gplus');
add_shortcode('company_skype', 'company_skype');
add_shortcode('company_rss', 'company_rss');
add_shortcode('company_social', 'company_social');
add_shortcode('company_disclaimer', 'company_disclaimer');

// Variables
$myComp_hasSocial = 0;

// Process phone numbers


// Contact information
function mcm_contact_info($method) {
	$options = get_mycomp_menu_contact();
	return $options[$method];
}

function company_phone() {
	return mcm_contact_info('phone');
}
function company_tollfree() {
	return mcm_contact_info('tollfree');
}
function company_fax() {
	return mcm_contact_info('fax');
}
function company_disclaimer() {
	return mcm_contact_info('disclaimer');
}
function company_email() {
	$options = get_mycomp_menu_contact();
	$myCompEmail = '<a href="mailto:'.$options['email'].'" title="'.$options['email'].'">'.$options['email'].'</a>';
	return $myCompEmail;
}

// Social media

// Determine if social network has URL and return value
function mcm_social_display($name) {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	if($options[$name] != '') {
		$mcm_social_data = '<a style="background-position: '.$hoptions[$name.'_x'].'px '.$hoptions[$name.'_y'].'px;" href="'.$options[$name].'" title="See us on '.ucfirst($name).'">'.ucfirst($name).'</a>';
		return $mcm_social_data;
	} else {
		return false;
	}
}

// Pass each social network to Display Function
function company_gplus() {
	return mcm_social_display('gplus');
}
function company_facebook() {
	return mcm_social_display('facebook');
}
function company_twitter() {
	return mcm_social_display('twitter');
}
function company_linkedin() {
	return mcm_social_display('linkedin');
}
function company_youtube() {
	return mcm_social_display('youtube');
}
function company_vimeo() {
	return mcm_social_display('vimeo');
}
function company_skype() {
	return mcm_social_display('skype');
}
function company_rss() {
	return mcm_social_display('rss');
}
function company_stumble() {
	global $wpdb;
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();

	if($options['stumble']) {
		$mcm_social_data = '<a style="background-position: '.$hoptions['stumble_x'].'px '.$hoptions['stumble_y'].'px;" href="http://www.stumbleupon.com/submit?url='.CURRENT_PAGE.'" title="Submit this page to Stumble">StumbleUpon</a>';
		return $mcm_social_data;
	} else {
		return false;
	}
}

function company_social($socialbefore = "", $socialafter = "", $container = "ul", $each = "li") {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	$gplus = company_gplus();
	$facebook = company_facebook();
	$twitter = company_twitter();
	$linkedin = company_linkedin();
	$youtube = company_youtube();
	$vimeo = company_vimeo();
	$skype = company_skype();
	$rss = company_rss();
	$stumble = company_stumble();

	if($gplus) {
		$gplus = '<'.$each.' class="mcm_gplus">'.$gplus.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($facebook) {
		$facebook = '<'.$each.' class="mcm_facebook">'.$facebook.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($twitter) {
		$twitter = '<'.$each.' class="mcm_twitter">'.$twitter.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($linkedin) {
		$linkedin = '<'.$each.' class="mcm_linkedin">'.$linkedin.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($skype) {
		$skype = '<'.$each.' class="mcm_skype">'.$skype.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($youtube) {
		$youtube = '<'.$each.' class="mcm_youtube">'.$youtube.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($vimeo) {
		$vimeo = '<'.$each.' class="mcm_vimeo">'.$vimeo.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($rss) {
		$rss = '<'.$each.' class="mcm_rss">'.$rss.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($stumble) {
		$stumble = '<'.$each.' class="mcm_stumble">'.$stumble.'</'.$each.'>';
		$hasSocial = 1;
	}

	if($facebook || $twitter || $linkedin || $youtube || $skype || $vimeo || $gplus || $rss || $stumble) {
		$myComp_social = 
		'<'.$container.' class="mcm_social">'.
			$socialbefore . $gplus . $facebook . $twitter . $linkedin . $skype . $youtube . $vimeo . $rss . $stumble . $socialafter .
		'</'.$container.'> <!-- /social -->';
		return $myComp_social;
	} else {
		return false;
	}
}
	/**
	*
	* 
	*/
	function mcm_social_frontstyle() {
		$options = get_mycomp_menu_contact();
		$hoptions = get_mycomp_menu_help();

		$gplus = company_gplus();
		$facebook = company_facebook();
		$twitter = company_twitter();
		$linkedin = company_linkedin();
		$youtube = company_youtube();
		$vimeo = company_vimeo();
		$skype = company_skype();
		$rss = company_rss();
		$stumble = company_stumble();
	?>
		 <style type="text/css" media="screen">
			.mcm_social {overflow: hidden;}
			.mcm_social li {float: right; margin-right: 5px; list-style: none;}
			.mcm_social li a {text-indent: 9999em; display: block; background-image: url("<?php echo $hoptions['socialsprite'] ?>?ver='.rand(1, 1000).'"); background-repeat: no-repeat; width: <?php echo $hoptions['socialsprite_icon_width'] ?>px; height: <?php echo $hoptions['socialsprite_icon_height'] ?>px;}
			.mcm_social li.mcm_gplus a:hover {background-position: <?php echo $hoptions['gplus_x_hover'] ?>px <?php echo $hoptions['gplus_y_hover'] ?>px !important;}
			.mcm_social li.mcm_facebook a:hover {background-position: <?php echo $hoptions['facebook_x_hover'] ?>px <?php echo $hoptions['facebook_y_hover'] ?>px !important;}
			.mcm_social li.mcm_twitter a:hover {background-position: <?php echo $hoptions['twitter_x_hover'] ?>px <?php echo $hoptions['twitter_y_hover'] ?>px !important;}
			.mcm_social li.mcm_linkedin a:hover {background-position: <?php echo $hoptions['linkedin_x_hover'] ?>px <?php echo $hoptions['linkedin_y_hover'] ?>px !important;}
			.mcm_social li.mcm_youtube a:hover {background-position: <?php echo $hoptions['youtube_x_hover'] ?>px <?php echo $hoptions['youtube_y_hover'] ?>px !important;}
			.mcm_social li.mcm_skype a:hover {background-position: <?php echo $hoptions['skype_x_hover'] ?>px <?php echo $hoptions['skype_y_hover'] ?>px !important;}
			.mcm_social li.mcm_vimeo a:hover {background-position: <?php echo $hoptions['vimeo_x_hover'] ?>px <?php echo $hoptions['vimeo_y_hover'] ?>px !important;}
			.mcm_social li.mcm_rss a:hover {background-position: <?php echo $hoptions['rss_x_hover'] ?>px <?php echo $hoptions['rss_y_hover'] ?>px !important;}
			.mcm_social li.mcm_stumble a:hover {background-position: <?php echo $hoptions['stumble_x_hover'] ?>px <?php echo $hoptions['stumble_y_hover'] ?>px !important;}
		</style>
	<?php
	}
	add_action('wp_head', 'mcm_social_frontstyle');

/* Physical address */

// Wrap physical address in <address> tags and display on several lines
function company_address() {
	$options = get_mycomp_menu_contact();

	if($options['add1'] && $options['city'] && $options['state'] && $options['zip']) {

		if($options['add2'] != '') {
			$myCompAddress = '<address>' . $options['add1'] . '<br />' . $options['add2'] . '<br />' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		} else {
			$myCompAddress = '<address>' . $options['add1'] . '<br />' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		}
		return $myCompAddress;
	} else {
		return false;
	}
}

// Wrap physical address in <address> tags and display on one line
function company_address_oneline() {
	$options = get_mycomp_menu_contact();

	if($options['add1'] && $options['city'] && $options['state'] && $options['zip']) {

		if($options['add2'] != '') {
		$myCompAddress = '<address>' . $options['add1'] . ' ' . $options['add2'] . ', ' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		} else {
			$myCompAddress = '<address>' . $options['add1'] . ' ' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		}
		return $myCompAddress;
	} else {
		return false;
	}
}

function company_all() {
	// still need to update this function
	$address = company_address();
	$phone = company_phone();
	$fax = company_fax();
	$email = company_email();

	$myCompAll = '<ul id="mycomp_contact">
			<li><strong>Phone: </strong>' . $phone . '</li>
			<li><strong>Fax: </strong>' . $fax . '</li>
			<li><strong>Email: </strong>' . $email . '</li>
		</ul>' . $address;
	return $myCompAll;
}

?>