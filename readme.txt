=== My Company Menu ===
Contributors:  jcross
Donate link: http://www.immense.net/
Tags: company admin menu, contact information
Requires at least: 2.5
Tested up to: 3.2.1
Stable tag: 1.0.1

Give your clients a company-specific admin menu to manage contact information and any custom plugins/PODS/etc developed for that client.

== Description ==

Give your clients a Company Menu to manage contact information and custom subpages (like PODS managers).

This plugin is intended for theme developers who build WordPress websites for other businesses. For starters, MCM adds a new tab in the Admin’s Sidebar, which links to a page to manage standard business contact information and social networking links.

I also use this new menu to organize PODS, like a Work Portfolio or Team Member Manager. This lets me create custom managers for my client and consolidate them under one menu, keeping the sidebar simple and clean.

I include a Demo Page (mcm_menu.php located in the plugin directory). If you have no need for additional subpages, just check the Hide Demo Page box on the Help/Settings page to remove it. Otherwise, move mcm_menu.php from Plugins to your Uploads directory to customize it as needed (this will ensure your tweaks remain after an update). The file mcm_menu.php has ample template functions and recommendations for creating your own custom pages.


Change the menu title and icon to match your client's branding.

Each field has a shortcode beneath it that can be used on posts and pages to show the contents of the related input box. Theme developers can use the same shortcode as PHP functions in templates to display the data.

Complete breakdown of features can be found here: http://www.immense.net/company-menu-plugin-wordpress/

== Installation ==

1. Upload the `mycomp-menu` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Select 'Company' from the admin sidebar and fill in necessary fields.
4. Use shortcodes on pages and functions in template files to display information.

== Changelog ==

= 1.0 =
* Initial release.

== Frequently Asked Questions ==

= How do I customize the menu title and icon? =

Edit these fields from the Help/Settings page.

== Screenshots ==

1. MCM adds a new tab in the Admin’s Sidebar. You can create your own subpages in mcm_menu.php in the Plugin directory.
2. Change the menu’s title and icon to match your client’s branding on the Help/Settings Page.
3. Manage typical contact information like phone, fax, email, address...
4. Manage social networking URLs.
5. Convenient buttons added to TinyMCE WYSIWYG.

== Upgrade Notice ==

= 1.0 =
Initial release.

== Upcoming Features ==

1. Custom, update-proof social media images
2. Automate adding PODS as subpages (currently a manual process in mcm_menu.php)