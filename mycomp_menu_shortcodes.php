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
add_shortcode('company_address', 'company_address_oneline');
add_shortcode('company_email', 'company_email');
add_shortcode('company', 'company_all');
add_shortcode('company_facebook', 'company_facebook');
add_shortcode('company_linkedin', 'company_linkedin');
add_shortcode('company_twitter', 'company_twitter');
add_shortcode('company_youtube', 'company_youtube');
add_shortcode('company_vimeo', 'company_vimeo');
add_shortcode('company_gplus', 'company_gplus');
add_shortcode('company_rss', 'company_rss');
add_shortcode('company_social', 'company_social');
add_shortcode('company_disclaimer', 'company_disclaimer');

// Variables
$myComp_hasSocial = 0;

// Contact information
function company_phone() {
	$options = get_mycomp_menu_contact();
	return $options['phone'];
}

function company_tollfree() {
	$options = get_mycomp_menu_contact();
	return $options['tollfree'];
}

function company_fax() {
	$options = get_mycomp_menu_contact();
	return $options['fax'];
}

function company_disclaimer($tag = "p") {
	$options = get_mycomp_menu_contact();
	echo '<'.$tag.'>'.$options['disclaimer'].'</'.$tag.'>';
}

function company_email() {
	$options = get_mycomp_menu_contact();
	$myCompEmail = '<a href="mailto:'.$options['email'].'" title="'.$options['email'].'">'.$options['email'].'</a>';
	return $myCompEmail;
}

// Social media
function company_gplus() {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	if($options['gplus'] != '') {
		$myCompGplus = '<a style="background-position: '.$hoptions['gplus_x'].'px '.$hoptions['gplus_y'].'px;" href="'.$options['gplus'].'" title="See us on Google+">Google+</a>';
		$social_gplus = 1;
		$myComp_hasSocial = 1;
		return $myCompGplus;
	} else {
		return false;
	}
}

function company_facebook() {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	if($options['facebook'] != '') {
		$myCompFacebook = '<a style="background-position: '.$hoptions['facebook_x'].'px '.$hoptions['facebook_y'].'px;" href="'.$options['facebook'].'" title="See our Facebook fan page">Facebook fan page</a>';
		$social_facebook = 1;
		$myComp_hasSocial = 1;
		return $myCompFacebook;
	} else {
		return false;
	}
}

function company_youtube() {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	if($options['youtube'] != '') {
		$myCompYoutube = '<a style="background-position: '.$hoptions['youtube_x'].'px '.$hoptions['youtube_y'].'px;" href="'.$options['youtube'].'" title="See our YouTube channel">YouTube channel</a>';
		$social_youtube = 1;
		$myComp_hasSocial = 1;
		return $myCompYoutube;
	} else {
		return false;
	}
}

function company_vimeo() {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	global $mcm_hoptions;
	if($options['vimeo'] != '') {
		$myCompVimeo = '<a style="background-position: '.$hoptions['vimeo_x'].'px '.$hoptions['vimeo_y'].'px;" href="'.$options['vimeo'].'" title="See our Vimeo videos">See our Vimeo videos</a>';
		$social_vimeo = 1;
		$myComp_hasSocial = 1;
		return $myCompVimeo;
	} else {
		return false;
	}
}

function company_linkedin() {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	if($options['linkedin'] != '') {
		$myCompLinkedin = '<a style="background-position: '.$hoptions['linkedin_x'].'px '.$hoptions['linkedin_y'].'px;" href="'.$options['linkedin'].'" title="See our LinkedIn profile">See our LinkedIn profile</a>';
		$social_linkedin = 1;
		$myComp_hasSocial = 1;
		return $myCompLinkedin;
	} else {
		return false;
	}
}

function company_twitter() {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	if($options['twitter'] != '') {
		$myCompTwitter = '<a style="background-position: '.$hoptions['twitter_x'].'px '.$hoptions['twitter_y'].'px;" href="'.$options['twitter'].'" title="Follow us on Twitter">Follow us on Twitter</a>';
		$social_twitter = 1;
		$myComp_hasSocial = 1;
		return $myCompTwitter;
	} else {
		return false;
	}
}

function company_rss() {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	if($options['rss'] != '') {
		$myCompRss = '<a style="background-position: '.$hoptions['rss_x'].'px '.$hoptions['rss_y'].'px;" href="'.$options['rss'].'" title="Subscribe via RSS">Subscribe via RSS</a>';
		$social_rss = 1;
		$myComp_hasSocial = 1;
		return $myCompRss;
	} else {
		return false;
	}
}

function company_social($container = "ul", $each = "li") {
	$options = get_mycomp_menu_contact();
	$hoptions = get_mycomp_menu_help();
	$gplus = company_gplus();
	$facebook = company_facebook();
	$twitter = company_twitter();
	$linkedin = company_linkedin();
	$youtube = company_youtube();
	$vimeo = company_vimeo();
	$rss = company_rss();

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

	if($facebook || $twitter || $linkedin || $youtube || $vimeo || $gplus || $rss) {
		$myComp_social = 
		'<'.$container.' class="mcm_social">'.
			$gplus . $facebook . $twitter . $linkedin . $youtube . $vimeo . $rss .
		'</'.$container.'> <!-- /social -->';
		$mcm_socialsprite = '
			<style>
				.mcm_social {overflow: hidden;}
				.mcm_social li {float: right; margin-right: 5px;}
				.mcm_social li a {text-indent: -9999em; display: block; background-image: url('.$hoptions['socialsprite'].'); background-repeat: no-repeat; width: '.$hoptions['socialsprite_icon_width'].'px; height: '.$hoptions['socialsprite_icon_height'].'px;}
				.mcm_social li.mcm_gplus a:hover {background-position: '.$hoptions['gplus_x_hover'].'px '.$hoptions['gplus_y_hover'].'px !important;}
				.mcm_social li.mcm_facebook a:hover {background-position: '.$hoptions['facebook_x_hover'].'px '.$hoptions['facebook_y_hover'].'px !important;}
				.mcm_social li.mcm_twitter a:hover {background-position: '.$hoptions['twitter_x_hover'].'px '.$hoptions['twitter_y_hover'].'px !important;}
				.mcm_social li.mcm_linkedin a:hover {background-position: '.$hoptions['linkedin_x_hover'].'px '.$hoptions['linkedin_y_hover'].'px !important;}
				.mcm_social li.mcm_youtube a:hover {background-position: '.$hoptions['youtube_x_hover'].'px '.$hoptions['youtube_y_hover'].'px !important;}
				.mcm_social li.mcm_vimeo a:hover {background-position: '.$hoptions['vimeo_x_hover'].'px '.$hoptions['vimeo_y_hover'].'px !important;}
				.mcm_social li.mcm_rss a:hover {background-position: '.$hoptions['rss_x_hover'].'px '.$hoptions['rss_y_hover'].'px !important;}
			</style>
		';
		$myComp_social .= $mcm_socialsprite;
		return $myComp_social;
	} else {
		return false;
	}
}

// Physical address
function company_address() {
	$options = get_mycomp_menu_contact();

	if($options['add1'] && $options['city'] && $options['state'] && $options['zip']) {

		if($options['add2'] != '') {
			$myCompAddress = '<address>' . $options['add1'] . '<br />' . $options['add2'] . '<br />' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		} else {
			$myCompAddress = '<address>' . $options['add1'] . '<br />' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		}
		echo $myCompAddress;
	} else {
		return false;
	}
}

function company_address_oneline() {
	$options = get_mycomp_menu_contact();

	if($options['add1'] && $options['city'] && $options['state'] && $options['zip']) {

		if($options['add2'] != '') {
		$myCompAddress = '<address>' . $options['add1'] . ' ' . $options['add2'] . ', ' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		} else {
			$myCompAddress = '<address>' . $options['add1'] . ' ' . $options['city'] . ', ' . $options['state'] . ' ' . $options['zip'] . '</address>';
		}
		echo $myCompAddress;
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