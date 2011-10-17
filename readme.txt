=== My Company Menu ===
Contributors:  jcross
Donate link: http://www.immense.net/
Tags: company admin menu, contact information
Requires at least: 2.5
Tested up to: 3.2.1
Stable tag: 1.0

Give your clients a company-specific admin menu to manage contact information and any custom plugins/PODS/etc developed for that client.

== Description ==

This plugin was developedto give my clients a nice interface for managing their contact information (phone number, address, social media links, etc.). It provides simple shortcodes and php functions to be included in posts/pages and template files to show that information.

My Company Menu

Developers can easily edit the plugin to custom-tailor it for your client.
	- Add sub-pages under the company's menu by editing [mycomp_settings_admin_menus.php]
	- Add your own unique shortcodes/functions by editing [mycomp_settings_shortcodes.php]
	- Add additional buttons to the TinyMCE WYSIWYG editor by editing [mycomp_settings_mce.php]

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