<?php
/**
* @plugin My Company Menu Plugin
* @title  Init and markup admin menus
* @author Jason Michael Cross - www.jasonmichaelcross.com
* @author Immense Networks - www.immense.net
*/
 ?>
<div class="wrap">
    <div class="icon32" id="icon-options-general"><br /></div>
    <h2>My Company Menu</h2>
    <p>You can display the contents of the input boxes from your Company Page using the shortcode below that box. For instance, use [company_phone], and it will get replaced with the phone number you typed into that input box.</p>
    <div class="postbox-container mcm_box" style="width:70%;">
		<div class="metabox-holder">
			<form name="mycomp_menu_form" method="post">
				<div class="postbox">
					<h3>Contact Information</h3>
					<div class="section">
						<table class="form-table">
							<tr>
								<th scope="row"><label for="mycomp_menu_phone">Phone Number</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_phone" value="<?php echo $options['phone']; ?>" id="mycomp_menu_phone" /><br /><span class="description">Use this shortcode <code>[company_phone]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_tollfree">Toll Free Number</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_tollfree" value="<?php echo $options['tollfree']; ?>" id="mycomp_menu_tollfree" /><br /><span class="description">Use this shortcode <code>[company_tollfree]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_fax">Fax Number</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_fax" value="<?php echo $options['fax']; ?>" id="mycomp_menu_fax" /><br /><span class="description">Use this shortcode <code>[company_fax]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_email">Email Address</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_email" value="<?php echo $options['email']; ?>" id="mycomp_menu_email" /><br /><span class="description">Use this shortcode <code>[company_email]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_disclaimer">Disclaimer</label></th>
								<td><textarea class="regular-text" rows="6" cols="85" name="mycomp_menu_disclaimer" id="mycomp_menu_disclaimer"><?php echo $options['disclaimer']; ?></textarea><br /><span class="description">Use this shortcode <code>[company_disclaimer]</code></td>
							</tr>
						</table>
					</div> <!-- /section -->
					<div class="submit-box">
						<input type="submit" value="<?php _e('Save All Changes') ?>" class="button-primary" id="submit" name="submit">
						<p class="submit"><input type="button" value="Reset values" onClick="this.form.reset()" /></p>
					</div> <!-- submit-box -->
				</div> <!-- /postbox -->

				<div class="postbox">
					<h3>Physical Address</h3>
					<div class="section">
						<table class="form-table">
							<tr>
								<th scope="row"><label for="mycomp_menu_add1">Address 1</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_add1" value="<?php echo $options['add1']; ?>" id="mycomp_menu_add1" /></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_add2">Address 2</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_add2" value="<?php echo $options['add2']; ?>" id="mycomp_menu_add2" /></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_city">City</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_city" value="<?php echo $options['city']; ?>" id="mycomp_menu_city" /></td>
							</tr>
							<tr>
									<th scope="row"><label for="mycomp_menu_state">State</label></th>
									<td><select name="mycomp_menu_state" value="<?php echo $options['state']; ?>" id="mycomp_menu_state">
									<?php
										$selected = 'selected="selected" ';
									?>
											<option <?php if($options['state'] === "") {echo $selected;} ?>value=""></option>
											<option <?php if($options['state'] === "AK") {echo $selected;} ?>value="AK">AK</option>
											<option <?php if($options['state'] === "AL") {echo $selected;} ?>value="AL">AL</option>
											<option <?php if($options['state'] === "AR") {echo $selected;} ?>value="AR">AR</option>
											<option <?php if($options['state'] === "AZ") {echo $selected;} ?>value="AZ">AZ</option>
											<option <?php if($options['state'] === "CA") {echo $selected;} ?>value="CA">CA</option>
											<option <?php if($options['state'] === "CO") {echo $selected;} ?>value="CO">CO</option>
											<option <?php if($options['state'] === "CT") {echo $selected;} ?>value="CT">CT</option>
											<option <?php if($options['state'] === "DC") {echo $selected;} ?>value="DC">DC</option>
											<option <?php if($options['state'] === "DE") {echo $selected;} ?>value="DE">DE</option>
											<option <?php if($options['state'] === "FL") {echo $selected;} ?>value="FL">FL</option>
											<option <?php if($options['state'] === "GA") {echo $selected;} ?>value="GA">GA</option>
											<option <?php if($options['state'] === "HI") {echo $selected;} ?>value="HI">HI</option>
											<option <?php if($options['state'] === "IA") {echo $selected;} ?>value="IA">IA</option>
											<option <?php if($options['state'] === "ID") {echo $selected;} ?>value="ID">ID</option>
											<option <?php if($options['state'] === "IL") {echo $selected;} ?>value="IL">IL</option>
											<option <?php if($options['state'] === "IN") {echo $selected;} ?>value="IN">IN</option>
											<option <?php if($options['state'] === "KS") {echo $selected;} ?>value="KS">KS</option>
											<option <?php if($options['state'] === "KY") {echo $selected;} ?>value="KY">KY</option>
											<option <?php if($options['state'] === "LA") {echo $selected;} ?>value="LA">LA</option>
											<option <?php if($options['state'] === "MA") {echo $selected;} ?>value="MA">MA</option>
											<option <?php if($options['state'] === "MD") {echo $selected;} ?>value="MD">MD</option>
											<option <?php if($options['state'] === "ME") {echo $selected;} ?>value="ME">ME</option>
											<option <?php if($options['state'] === "MI") {echo $selected;} ?>value="MI">MI</option>
											<option <?php if($options['state'] === "MN") {echo $selected;} ?>value="MN">MN</option>
											<option <?php if($options['state'] === "MO") {echo $selected;} ?>value="MO">MO</option>
											<option <?php if($options['state'] === "MS") {echo $selected;} ?>value="MS">MS</option>
											<option <?php if($options['state'] === "NC") {echo $selected;} ?>value="MT">MT</option>
											<option <?php if($options['state'] === "ND") {echo $selected;} ?>value="NC">NC</option>
											<option <?php if($options['state'] === "NE") {echo $selected;} ?>value="ND">ND</option>
											<option <?php if($options['state'] === "NE") {echo $selected;} ?>value="NE">NE</option>
											<option <?php if($options['state'] === "NH") {echo $selected;} ?>value="NH">NH</option>
											<option <?php if($options['state'] === "NJ") {echo $selected;} ?>value="NJ">NJ</option>
											<option <?php if($options['state'] === "NM") {echo $selected;} ?>value="NM">NM</option>
											<option <?php if($options['state'] === "NV") {echo $selected;} ?>value="NV">NV</option>
											<option <?php if($options['state'] === "NY") {echo $selected;} ?>value="NY">NY</option>
											<option <?php if($options['state'] === "OH") {echo $selected;} ?>value="OH">OH</option>
											<option <?php if($options['state'] === "OK") {echo $selected;} ?>value="OK">OK</option>
											<option <?php if($options['state'] === "OR") {echo $selected;} ?>value="OR">OR</option>
											<option <?php if($options['state'] === "PA") {echo $selected;} ?>value="PA">PA</option>
											<option <?php if($options['state'] === "RI") {echo $selected;} ?>value="RI">RI</option>
											<option <?php if($options['state'] === "SC") {echo $selected;} ?>value="SC">SC</option>
											<option <?php if($options['state'] === "SD") {echo $selected;} ?>value="SD">SD</option>
											<option <?php if($options['state'] === "TN") {echo $selected;} ?>value="TN">TN</option>
											<option <?php if($options['state'] === "TX") {echo $selected;} ?>value="TX">TX</option>
											<option <?php if($options['state'] === "UT") {echo $selected;} ?>value="UT">UT</option>
											<option <?php if($options['state'] === "VA") {echo $selected;} ?>value="VA">VA</option>
											<option <?php if($options['state'] === "VT") {echo $selected;} ?>value="VT">VT</option>
											<option <?php if($options['state'] === "WA") {echo $selected;} ?>value="WA">WA</option>
											<option <?php if($options['state'] === "WI") {echo $selected;} ?>value="WI">WI</option>
											<option <?php if($options['state'] === "WV") {echo $selected;} ?>value="WV">WV</option>
											<option <?php if($options['state'] == "WY") {echo $selected;} ?>value="WY">WY</option>
										</select>
									</td>
								</tr>
								<tr>
									<th scope="row"><label for="mycomp_menu_zip">Zip/Postal Code</label></th>
									<td><input class="regular-text" type="text" name="mycomp_menu_zip" value="<?php echo $options['zip']; ?>" id="mycomp_menu_zip" /></td>
								</tr>
							</table>
							<h4>Address Shortcodes</h4>
							<p>Complete the address fields above to show example outputs.</p>
							<table class="form-table">
								<tr>
									<td><p>Display 1 field per line: [company_address]</p></td>
									<td><?php 
										if(company_address()) {
											echo company_address();
										} else {
											echo '<span class="description">[Address fields above are empty]</span>';
										}
									 ?></td>
								</tr>
								<tr>
									<td><p>Display the whole address on 1 line: [company_address_oneline]</p></td>
									<td><?php 
										if(company_address_oneline()) {
											echo company_address_oneline();
										} else {
											echo '<span class="description">[Address fields above are empty]</span>';
										}
									 ?></td>
								</tr>
							</table>
						</div> <!-- /section -->
						<div class="submit-box">
							<input type="submit" value="<?php _e('Save All Changes') ?>" class="button-primary" id="submit" name="submit">
							<p class="submit"><input type="button" value="Reset values" onClick="this.form.reset()" /></p>
						</div> <!-- submit-box -->
				</div> <!-- /postbox -->
				<div class="postbox">
					<h3>Social Networking</h3>
					<div class="section">
					<p>Provide the <strong>complete URL</strong> to each social network in the boxes below, including http://www.somesite.com</p>
						<table class="form-table">
							<tr>
								<th scope="row"><label for="mycomp_menu_gplus">Google+ (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_gplus" value="<?php echo $options['gplus']; ?>" id="mycomp_menu_gplus" /><br /><span class="description">Use this shortcode <code>[company_gplus]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_facebook">Facebook (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_facebook" value="<?php echo $options['facebook']; ?>" id="mycomp_menu_facebook" /><br /><span class="description">Use this shortcode <code>[company_facebook]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_twitter">Twitter (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_twitter" value="<?php echo $options['twitter']; ?>" id="mycomp_menu_twitter" /><br /><span class="description">Use this shortcode <code>[company_twitter]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_linkedin">LinkedIn (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_linkedin" value="<?php echo $options['linkedin']; ?>" id="mycomp_menu_linkedin" /><br /><span class="description">Use this shortcode <code>[company_linkedin]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_skype">Skype (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_skype" value="<?php echo $options['skype']; ?>" id="mycomp_menu_skype" /><br /><span class="description">Use this shortcode <code>[company_skype]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_youtube">YouTube Channel (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_youtube" value="<?php echo $options['youtube']; ?>" id="mycomp_menu_youtube" /><br /><span class="description">Use this shortcode <code>[company_youtube]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_vimeo">Vimeo (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_vimeo" value="<?php echo $options['vimeo']; ?>" id="mycomp_menu_vimeo" /><br /><span class="description">Use this shortcode <code>[company_vimeo]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_rss">RSS Feed (URL)</label></th>
								<td><input class="regular-text" type="text" name="mycomp_menu_rss" value="<?php echo $options['rss']; ?>" id="mycomp_menu_rss" /><br /><span class="description">Use this shortcode <code>[company_rss]</code></td>
							</tr>
							<tr>
								<th scope="row"><label for="mycomp_menu_stumble">StumbleUpon (URL)</label></th>
								<td><input type="checkbox" name="mycomp_menu_stumble" id="mycomp_menu_stumble"<?php if($options['stumble']){echo ' checked="checked"';}  ?> /><br /><span class="description">Check here to let users add this site to Stumble.</span></td>
							</tr>
						</table>
						<h4>Show all social networks</h4>
							<p>Fill in URLs above to enable each social network. Change the icons using an image sprite on the Help/Settings page.</p>
							<table class="form-table">
								<tr>
									<td><p>Display available social media icons: [company_social]</p></td>
									<td><?php
										if(company_social()) {
											echo company_social('', '<li><span class="description">Available icons</span></li>');
										} else {
											echo '<span class="description">[Insert URLs above to show how icons will look on frontend]</span>';
										}
									?></td>
								</tr>
							</table>
					</div> <!-- /section -->
					<div class="submit-box">
						<input type="submit" value="<?php _e('Save All Changes') ?>" class="button-primary" id="submit" name="submit">
						<p class="submit"><input type="button" value="Reset values" onClick="this.form.reset()" /></p>
					</div> <!-- submit-box -->
				</div> <!-- /postbox -->
				<?php /*
				<div class="postbox">
					<h3>Google Map</h3>
					<p>Paste your iframe embed code here.</p>
					<div class="section">
						<table class="form-table">
							<tr>
								<th scope="row"><label for="mycomp_menu_gmapcode">Google maps embed code</label></th>
								<?php $gmapcode = $options['gmapcode']; ?>
								<?php echo $gmapcode; ?>
								<td><input class="regular-text" type="text" name="mycomp_menu_gmapcode" value="<?php if(isset($gmapcode)) {echo "Map set";} ?>" id="mycomp_menu_gmapcode" /></td>
							</tr>
						</table>
						<h4>Map preview</h4>
						<?php
							if($gmapcode === '') {
								echo "<p>Sorry. No map to display.</p>";
							} else {
								echo htmlentities($gmapcode);
							}
						?>
						<h4>Shortcode</h4>
						<p>Use the following shortcode on a post or page to display the entire address <input class="regular-text" type="text" value="[company_gmap]" /></p>
					</div> <!-- /section -->
					<div class="submit-box">
						<input type="submit" value="<?php _e('Save All Changes') ?>" class="button-primary" id="submit" name="submit">
						<p class="submit"><input type="button" value="Reset values" onClick="this.form.reset()" /></p>
					</div> <!-- submit-box -->		
				</div> <!-- /postbox -->
				*/ ?>
			</form>
		</div> <!-- /metabox-holder -->
	</div> <!-- postbox-container-->
	<div class="postbox-container mcm_box" style="width:25%;">
		<div class="metabox-holder">
			<div class="postbox">
				<h3>How to show this data</h3>
				<div class="section">
					<p>Display the values in these input boxes on your posts/pages by using the shortcode below each box.</p>
					<h4>What are shortcodes?</h4>
					<p>Shortcodes are just like placeholders. WordPress will recognize these shortcodes in your content and automatically replace it with the data in the that input box.</p>
					<h4>Benefit of shortcodes</h4>
					<p>Imagine you have your company's phone number on 207 blog articles on your website...then the phone number changes one day. It's a drastic example, but a very real reason why shortcodes are amazing. Make the change on this page one time and see it reflected everywhere.</p>
					<h4>Example shortcode usage</h4>
					<p>For instance, use [company_phone] and it will get replaced with the numbers you type into the Phone Number field.</p>
				</div> <!-- /section -->
			</div> <!-- /postbox -->
		</div> <!-- metabox-holder -->
	</div> <!-- postbox-container -->
</div> <!-- /wrap -->