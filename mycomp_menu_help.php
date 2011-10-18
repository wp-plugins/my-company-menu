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
	<h2>My Company Menu Help</h2>
	<div class="metabox-holder mcm_box">
		<form name="mycomp_menu_help_form" method="post">
			<div class="postbox">
			   	<h3>Company Menu Settings</h3>
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
				<h3>For Theme Developers</h3>
				<div class="section">
					<p>All shortcodes will return values, not echo them. You should verify if each field has a value, then echo something based on success/failure. Each shortcode shares the name of the function for your template pages.</p>
					<p>For example, the shortcode for the Company Phone Number is <strong>[company_phone]</strong>. So, incorporate this into your template with:</p>
					<pre>
	&lt;?php
	  if(company_phone()) {
	    echo company_phone();
	  } else {
	  	echo 'No phone number entered';
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