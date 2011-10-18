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
	if($options['gplus'] != '') {
		$myCompGplus = '<a href="'.$options['gplus'].'" title="See our Google+"><img src="'.MYCOMP_MENU_URL.'/images/social_gplus.png" alt="See our Google+ profile" width="16" height="16" /></a>';
		$social_gplus = 1;
		$myComp_hasSocial = 1;
		return $myCompGplus;
	} else {
		return false;
	}
}

function company_facebook() {
	$options = get_mycomp_menu_contact();
	if($options['facebook'] != '') {
		$myCompFacebook = '<a href="'.$options['facebook'].'" title="See our Facebook fan page"><img src="'.MYCOMP_MENU_URL.'/images/social_facebook.png" alt="See our Facebook fan page" width="16" height="16" /></a>';
		$social_facebook = 1;
		$myComp_hasSocial = 1;
		return $myCompFacebook;
	} else {
		return false;
	}
}

function company_youtube() {
	$options = get_mycomp_menu_contact();
	if($options['youtube'] != '') {
		$myCompYoutube = '<a href="'.$options['youtube'].'" title="See our YouTube channel"><img src="'.MYCOMP_MENU_URL.'/images/social_youtube.png" alt="See our YouTube videos" width="16" height="16" /></a>';
		$social_youtube = 1;
		$myComp_hasSocial = 1;
		return $myCompYoutube;
	} else {
		return false;
	}
}

function company_vimeo() {
	$options = get_mycomp_menu_contact();
	if($options['vimeo'] != '') {
		$myCompVimeo = '<a href="'.$options['vimeo'].'" title="See our Vimeo videos"><img src="'.MYCOMP_MENU_URL.'/images/social_vimeo.png" alt="See our Vimeo videos" width="16" height="16" /></a>';
		$social_vimeo = 1;
		$myComp_hasSocial = 1;
		return $myCompVimeo;
	} else {
		return false;
	}
}

function company_linkedin() {
	$options = get_mycomp_menu_contact();
	if($options['linkedin'] != '') {
		$myCompLinkedin = '<a href="'.$options['linkedin'].'" title="See our LinkedIn profile"><img src="'.MYCOMP_MENU_URL.'/images/social_linkedin.png" alt="See our LinkedIn profile" width="16" height="16" /></a>';
		$social_linkedin = 1;
		$myComp_hasSocial = 1;
		return $myCompLinkedin;
	} else {
		return false;
	}
}

function company_twitter() {
	$options = get_mycomp_menu_contact();
	if($options['twitter'] != '') {
		$myCompTwitter = '<a href="'.$options['twitter'].'" title="Follow us on Twitter"><img src="'.MYCOMP_MENU_URL.'/images/social_twitter.png" alt="Follow us on Twitter" width="16" height="16" /></a>';
		$social_twitter = 1;
		$myComp_hasSocial = 1;
		return $myCompTwitter;
	} else {
		return false;
	}

}

function company_social($container = "ul", $each = "li") {
	$gplus = company_gplus();
	$facebook = company_facebook();
	$twitter = company_twitter();
	$linkedin = company_linkedin();
	$youtube = company_youtube();
	$vimeo = company_vimeo();

	if($gplus) {
		$gplus = '<'.$each.'>'.$gplus.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($facebook) {
		$facebook = '<'.$each.'>'.$facebook.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($twitter) {
		$twitter = '<'.$each.'>'.$twitter.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($linkedin) {
		$linkedin = '<'.$each.'>'.$linkedin.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($youtube) {
		$youtube = '<'.$each.'>'.$youtube.'</'.$each.'>';
		$hasSocial = 1;
	}
	if($vimeo) {
		$vimeo = '<'.$each.'>'.$vimeo.'</'.$each.'>';
		$hasSocial = 1;
	}

	if($facebook || $twitter || $linkedin || $youtube || $vimeo || $gplus) {
		$myComp_social = 
		'<'.$container.' class="mcm_social">'.
			$gplus . $facebook . $twitter . $linkedin . $youtube . $vimeo .
		'</'.$container.'> <!-- /social -->';
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