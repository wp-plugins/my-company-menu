/**
* @plugin My Company Settings Plugin
 * @title  JS
 * @author Jason Michael Cross - www.jasonmichaelcross.com
 * @author Immense Networks - www.immense.net
 */

jQuery(document).ready(function ($) {

	$('#mycomp_menu_icon_button').click(function() {
		 formfield = $('#mycomp_menu_icon').attr('name');
		 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');

		window.send_to_editor = function(html) {
			icon_imgurl = $('img',html).attr('src');
			$('#mycomp_menu_icon').val(icon_imgurl);
			tb_remove();
		}
		 return false;
	});

	$('#mycomp_menu_socialsprite_button').click(function() {
		 formfield = $('#mycomp_menu_socialsprite').attr('name');
		 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	
		window.send_to_editor = function(html) {
			socialsprite_imgurl = $('img',html).attr('src');
			$('#mycomp_menu_socialsprite').val(socialsprite_imgurl);
			tb_remove();
		}
		 return false;
	});
});