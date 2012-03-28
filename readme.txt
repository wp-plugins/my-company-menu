=== My Company Menu ===
Contributors:  jcross
Donate link: http://www.immense.net/company-menu-plugin-wordpress/
Tags: company admin menu, business, contact information, business, social media
Requires at least: 2.5
Tested up to: 3.3
Stable tag: 1.0.9

Give your clients a Company Menu to manage contact information and custom subpages (like Pods managers).

== Description ==

This plugin is intended for theme developers who build WordPress websites for other businesses. Give your clients a Company Menu to manage contact information and custom subpages (like Pods managers).

1. Adds a new tab in the Admin’s Sidebar
2. Main page in this new tab used to manage standard business contact information and social networking links.
3. Add custom subpages under this tab
4. Change the menu title and icon to match your client's branding.

I mostly use this new menu to organize Pods, like a Work Portfolio or Team Member Manager. This lets me create custom managers for my client and consolidate them under one menu, keeping the sidebar simple and clean.

I include a Demo Page (mcm_menu.php located in the plugin directory). If you have no need for additional subpages, just check the Hide Demo Page box on the Help/Settings page to remove it. Otherwise, move mcm_menu.php from Plugins to your Uploads directory to customize it as needed (this will ensure your tweaks remain after an update). The file mcm_menu.php has ample template functions and recommendations for creating your own custom pages.

Each field has a shortcode beneath it that can be used on posts and pages to show the contents of the related input box. Theme developers can use the same shortcode as PHP functions in templates to display the data.

New in 1.0.6, now you can customize the output of company_social() function with arguments.

Complete breakdown of features can be found here: http://www.immense.net/company-menu-plugin-wordpress/

== Installation ==

1. Upload the `my-company-menu` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Select 'Company' from the admin sidebar and fill in necessary fields
4. Use shortcodes on pages and functions in template files to display information
5. Edit menu settings and social media icons on Help/Settings page
6. For custom subpages, move mcm_menu.php from Plugins to Uploads directory

== Changelog ==

= 1.0.9 =
* Fixed bug causing company_social icons to ignore user-defined sprite background positions

= 1.0.8 =
* Fixed bug that caused markup validation issues

= 1.0.7 =
* Cleaned up functions and other code
* Added submit current page to StumbleUpon option in social media section
* Added random version number to sprite image to ensure end-user isn't caching outdated image
* Known issue: company_social shortcode on post/page removes container element

= 1.0.6 =
* Added Skype
* Now you can customize the output of company_social() function
* Bug fix: Upload image dialogues placing path in wrong input box
* Bug fix: Issue with company_address shortcode

= 1.0.5 =
* Bug fix: RSS feed coordinates not updating

= 1.0.4 =
* Customize social media icons with your own image sprite

= 1.0.3 =
* Company phone function returns value instead of echo

= 1.0.2 =
* Fixed filepath issue for customizable mcm_menu.php file

= 1.0.1 =
* Updated readme.txt, better explaining the plugin.

= 1.0.0 =
* Initial release.

== Frequently Asked Questions ==

= How do I customize the menu title and icon? =

Edit these fields from the Help/Settings page.

= How do I setup and use image sprites? =

Learn about using <a href="http://www.w3schools.com/css/css_image_sprites.asp" title="Learn about using image sprites">image sprites</a> at W3.

== Screenshots ==

1. MCM adds a new tab in the Admin’s Sidebar. You can create your own subpages in mcm_menu.php in the Plugin directory.
2. Change the menu’s title and icon to match your client’s branding on the Help/Settings Page.
3. Manage typical contact information like phone, fax, email, address, etc.
4. Manage social networking URLs.
5. Now you can customize the upstate and hover state of your social media icons by using an image sprite.
6. Convenient buttons added to TinyMCE WYSIWYG.

== Upgrade Notice ==

= 1.0.0 =
Initial release

= 1.0.2 =
Fixed filepath issue for customizable mcm_menu.php file

= 1.0.3 =
Company phone function now returns boolean value instead of echo

= 1.0.4 =
Customize social media icons with your own image sprite, including separate upstate and hover states

= 1.0.5 =
Bug fix: RSS feed coordinates not updating

= 1.0.6 =
Added Skype
Now you can customize the output of company_social() function
Bug fix: Upload image dialogues placing path in wrong input box
Bug fix: Issue with company_address shortcode

= 1.0.7 =
Cleaned up functions and other code. Added submit current page to StumbleUpon option in social media section. Added random version number to sprite image to ensure end-user isn't caching outdated image. Known issue: company_social shortcode on post/page removes container element

= 1.0.8 =
Update to fix markup validation issues

= 1.0.9 =
Fixed bug causing company_social icons to ignore user-defined sprite background positions