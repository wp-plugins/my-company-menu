<?php 

/**
* @plugin My Company Menu Plugin
* @title  Markup for Company Help page
* @author Jason Michael Cross - www.jasonmichaelcross.com
* @author Immense Networks - www.immense.net
*/

?>

<div class="wrap">
	<div class="icon32" id="icon-options-general"><br></div>
	<h2>My Company Menu Help/Settings</h2>
	<div class="metabox-holder mcm_box">
		<form name="mycomp_menu_help_form" method="post">
			<div class="postbox">
			   	<h3>Company menu settings</h3>
			   	<div class="section">
				   	<table class="form-table">
				   	<tbody>
					   	<tr>
					   		<th scope="row"><label for="mycomp_menu_icon">Menu Icon</label></th>
							<td><input class="regular-text" id="mycomp_menu_icon" type="text" name="mycomp_menu_icon" value="<?php echo $hoptions['icon']; ?>" /><input id="mycomp_menu_icon_button" type="button" value="Upload Image" /><br /><span class="description">Icon should be 16x16 pixels, PNG-24 with Transparency.</span></td>
						</tr>
						<tr>
							<th scope="row"><label for="mycomp_menu_compname">Menu Name</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_compname" value="<?php echo $hoptions['compname']; ?>" id="mycomp_menu_compname" /><br /><span class="description">Used for the link in the Admin's Sidebar.</span></td>
						</tr>
						<?php if(!file_exists('../wp-content/uploads/mcm_menu.php')) { // hide checkbox if custom file exists ?>
						<tr>
							<th scope="row"><label for="mycomp_menu_showdemo">Hide demo page</label></th>
							<td><input type="checkbox" name="mycomp_menu_showdemo" id="mycomp_menu_showdemo"<?php if($hoptions['showdemo']){echo ' checked="checked"';}  ?> /><br /><span class="description">Check here to remove Demo Page Link from the side nav. Moving mcm_menu.php to Uploads directory will also remove Demo Page.</span></td>
						</tr>
						<?php } ?>
					</tbody>
					</table>
				</div> <!-- /section -->
				<div class="submit-box">
					<input type="submit" value="<?php _e('Save All Changes') ?>" class="button-primary" id="submit" name="submit">
					<p class="submit"><input type="button" value="Reset values" onClick="this.form.reset()" /></p>
				</div> <!-- submit-box -->
			</div> <!-- /postbox -->

			<div class="postbox">
			   	<h3>Social media icons sprite</h3>
			   	<div class="section">
			   		<p>Setup your social networking icons as an <a target="_blank" href="http://www.w3schools.com/css/css_image_sprites.asp" title="Learn how to use image sprites">image sprite</a> here.</p>
				   	<table class="form-table">
					   	<tbody>
						   	<tr>
						   		<th scope="row"><label for="mycomp_menu_socialsprite">Image sprite</label></th>
								<td><input class="regular-text" id="mycomp_menu_socialsprite" type="text" name="mycomp_menu_socialsprite" value="<?php
									if($hoptions['socialsprite']) {
										echo $hoptions['socialsprite'];
									} else {
										echo MYCOMP_MENU_URL.'/images/socialsprite.png';
									}
								?>" /><input id="mycomp_menu_socialsprite_button" type="button" value="Upload Image" /><br /><span class="description">Png-24 with alpha transparency recommended</span></td>
							</tr>
							<tr>
								<th scope="row"><label>Dimensions of each icon (in pixels)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_socialsprite_icon_width" value="<?php echo $hoptions['socialsprite_icon_width']; ?>" id="mycomp_menu_socialsprite_icon_width" /><br /><span class="description">Individual icon width (in pixels)</span></td>
								<td><input class="regular-text" type="text" name="mycomp_menu_socialsprite_icon_height" value="<?php echo $hoptions['socialsprite_icon_height']; ?>" id="mycomp_menu_socialsprite_icon_height" /><br /><span class="description">Individual icon height (in pixels)</span></td>
							</tr>
						</tbody>
					</table>
					<h4>Icon coordinates</h4>
					<p>Put your X and Y coordinates for each icon's upstate and hover state (may need negative values for proper positioning).</p>
					<table class="form-table">
					<tbody>
						<tr>
							<td><p>Display available social media icons: [company_social]</p></td>
							<td><?php
								if(company_social()) {
									echo company_social('', '<li><span class="description">Available icons</span></li>');
								} else {
									echo '<span class="description">Insert URLs on Company Page to show how icons will look on frontend.</span>';
								}
							?></td>
						</tr>
						<tr>
							<th scope="row"><label>Google Plus</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_gplus_x" value="<?php echo $hoptions['gplus_x']; ?>" id="mycomp_menu_gplus_x" /><br /><span class="description">X-coordinate</span><input class="regular-text" type="text" name="mycomp_menu_gplus_x_hover" value="<?php echo $hoptions['gplus_x_hover']; ?>" id="mycomp_menu_gplus_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_gplus_y" value="<?php echo $hoptions['gplus_y']; ?>" id="mycomp_menu_gplus_y" /><br /><span class="description">Y-coordinate</span><input class="regular-text" type="text" name="mycomp_menu_gplus_y_hover" value="<?php echo $hoptions['gplus_y_hover']; ?>" id="mycomp_menu_gplus_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>Facebook</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_facebook_x" value="<?php echo $hoptions['facebook_x']; ?>" id="mycomp_menu_facebook_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_facebook_x_hover" value="<?php echo $hoptions['facebook_x_hover']; ?>" id="mycomp_menu_facebook_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_facebook_y" value="<?php echo $hoptions['facebook_y']; ?>" id="mycomp_menu_facebook_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_facebook_y_hover" value="<?php echo $hoptions['facebook_y_hover']; ?>" id="mycomp_menu_facebook_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>Twitter</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_twitter_x" value="<?php echo $hoptions['twitter_x']; ?>" id="mycomp_menu_twitter_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_twitter_x_hover" value="<?php echo $hoptions['twitter_x_hover']; ?>" id="mycomp_menu_twitter_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_twitter_y" value="<?php echo $hoptions['twitter_y']; ?>" id="mycomp_menu_twitter_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_twitter_y_hover" value="<?php echo $hoptions['twitter_y_hover']; ?>" id="mycomp_menu_twitter_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>LinkedIn</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_linkedin_x" value="<?php echo $hoptions['linkedin_x']; ?>" id="mycomp_menu_linkedin_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_linkedin_x_hover" value="<?php echo $hoptions['linkedin_x_hover']; ?>" id="mycomp_menu_linkedin_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_linkedin_y" value="<?php echo $hoptions['linkedin_y']; ?>" id="mycomp_menu_linkedin_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_linkedin_y_hover" value="<?php echo $hoptions['linkedin_y_hover']; ?>" id="mycomp_menu_linkedin_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>Skype</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_skype_x" value="<?php echo $hoptions['skype_x']; ?>" id="mycomp_menu_skype_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_skype_x_hover" value="<?php echo $hoptions['skype_x_hover']; ?>" id="mycomp_menu_skype_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_skype_y" value="<?php echo $hoptions['skype_y']; ?>" id="mycomp_menu_skype_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_skype_y_hover" value="<?php echo $hoptions['skype_y_hover']; ?>" id="mycomp_menu_skype_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>YouTube</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_youtube_x" value="<?php echo $hoptions['youtube_x']; ?>" id="mycomp_menu_youtube_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_youtube_x_hover" value="<?php echo $hoptions['youtube_x_hover']; ?>" id="mycomp_menu_youtube_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_youtube_y" value="<?php echo $hoptions['youtube_y']; ?>" id="mycomp_menu_youtube_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_youtube_y_hover" value="<?php echo $hoptions['youtube_y_hover']; ?>" id="mycomp_menu_youtube_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>Vimeo</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_vimeo_x" value="<?php echo $hoptions['vimeo_x']; ?>" id="mycomp_menu_vimeo_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_vimeo_x_hover" value="<?php echo $hoptions['vimeo_x_hover']; ?>" id="mycomp_menu_vimeo_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_vimeo_y" value="<?php echo $hoptions['vimeo_y']; ?>" id="mycomp_menu_vimeo_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_vimeo_y_hover" value="<?php echo $hoptions['vimeo_y_hover']; ?>" id="mycomp_menu_vimeo_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>StumbleUpon</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_stumble_x" value="<?php echo $hoptions['stumble_x']; ?>" id="mycomp_menu_vimeo_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_stumble_x_hover" value="<?php echo $hoptions['stumble_x_hover']; ?>" id="mycomp_menu_stumble_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_stumble_y" value="<?php echo $hoptions['stumble_y']; ?>" id="mycomp_menu_stumble_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_stumble_y_hover" value="<?php echo $hoptions['stumble_y_hover']; ?>" id="mycomp_menu_stumble_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
						<tr>
							<th scope="row"><label>RSS Feed</label></th>
							<td><input class="regular-text" type="text" name="mycomp_menu_rss_x" value="<?php echo $hoptions['rss_x']; ?>" id="mycomp_menu_rss_x" /><br /><span class="description">X-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_rss_x_hover" value="<?php echo $hoptions['rss_x_hover']; ?>" id="mycomp_menu_rss_x_hover" /><br /><span class="description">X-coordinate on hover</span></td>
							<td><input class="regular-text" type="text" name="mycomp_menu_rss_y" value="<?php echo $hoptions['rss_y']; ?>" id="mycomp_menu_rss_y" /><br /><span class="description">Y-coordinate</span><br /><input class="regular-text" type="text" name="mycomp_menu_rss_y_hover" value="<?php echo $hoptions['rss_y_hover']; ?>" id="mycomp_menu_rss_y_hover" /><br /><span class="description">Y-coordinate on hover</span></td>
						</tr>
					</tbody>
					</table>
				</div> <!-- /section -->
				<div class="submit-box">
					<input type="submit" value="<?php _e('Save All Changes') ?>" class="button-primary" id="submit" name="submit">
					<p class="submit"><input type="button" value="Reset values" onClick="this.form.reset()" /></p>
				</div> <!-- submit-box -->
			</div> <!-- /postbox -->

			<div class="postbox">
				<h3>For theme developers</h3>
				<div class="section">
					<p>All shortcodes will return boolean values. You should verify if each field has a value, then echo something based on success/failure. Each shortcode shares the name of the function for your template pages.</p>
					<h4>Best-practice way to show data</h4>
					<p>For example, the shortcode for the Company Phone Number is [company_phone]. So, incorporate this into your template with:</p>
<pre>
&lt;?php
if(company_phone()) {
  echo company_phone();
} else {
  echo 'No phone number entered';
}
?&gt;</pre>
				<h4>Customize social media listing</h4>
				<p>Custom the output of the Social Media icons by providing arguments for the function.</p>
				<p>company_social('before', 'after', 'containerElement', 'listElement');</p>
				<ul>
					<li><strong>before:</strong> Markup placed <em>before</em> individual list elements</li>
					<li><strong>after:</strong> Markup placed <em>after</em> individual list elements</li>
					<li><strong>containerElement:</strong> Container element (default 'ul')</li>
					<li><strong>listElement:</strong> List element of each item (default 'li')</li>
				</ul>
<pre>
&lt;?php
if(company_social()) {
   echo company_social('&lt;li&gt;&lt;strong&gt;Social media: &lt;/strong&gt;&lt;/li&gt;');
}
?&gt;</pre>
					</form>
					<form name="mycomp_reset_form" method="post" action="<?php reset_mycomp_menu() ?>">
						<h4>Full Uninstall</h4>
						<p>Database values are not removed when the plugin is deactivated. Click this button to remove all values this plugin has stored in the database, then deactivate the plugin.</p>
						<input type="submit" value="<?php _e('Remove MCM from database') ?>" class="button-primary" name="submit_reset" /> <span class="description">Warning: This cannot be undone.</span>
					</form>
				</div> <!-- /section -->
			</div> <!-- /postbox -->
		<p>For assitance, please visit <a href="http://www.immense.net/company-menu-plugin-wordpress/" title="Visit our website">http://www.immense.net/company-menu-plugin-wordpress/</a>.</p>
	</div> <!-- /metabox-holder -->
</div> <!-- /wrap -->