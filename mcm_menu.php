<?php 
/* Load for admins only */
if(current_user_can('manage_options')) {
  pods_ui_mycomp_submenu(); 
}

/* Add submenu pages */
function pods_ui_mycomp_submenu()
{
  add_submenu_page('mycomp_adminmenu', 'Demo Page Title', 'Demo Page Link', 'manage_options', 'demo_page', 'mcm_your_function'); 

    /************************/
    // Add submenu pages here
    /************************/

    /**** Move this file to your Uploads directory before customizing. Otherwise, your changes will be overwritten when you update this plugin. ****/

    // 1. Uncomment the add_submenu_page function below and replace arguments to customize. Keep this function inside the pods_ui_mycomp_submenu() function that this text is currently in.
    // 2. The last option calls another function to build a page, which you must write on this page. Use the mcm_your_function below as a template for creating basic markup on a new page using default WordPress classes. Use the PODS function at the bottom of this page as a template for adding PODS as submenu items.
    // 3. For more information, check the WP codex for this: http://codex.wordpress.org/Function_Reference/add_submenu_page
    
  /**********************/
  // add_submenu_page('mycomp_adminmenu', 'Page Title', 'Submenu Link', 'manage_options', 'page_url', 'function_name');
  /**********************/

        // mycomp_adminmenu - Keep this. This tells WP to add your subpage under the Company Menu
        // Page Title - Use for <title>Page Title</title> tag for this page
        // Submenu Link - Text shown in the admin's sidebar, which links to your new page
        // manage_options - User role required to view this page. Check the codex for available options.
        // page_url - Can be whatever you want. No spaces or weird characters.
        // function_name - Refers to the function that will load the page's content. Write that function below on this page.
}

/* Put your custom functions for menu pages below. Use unique function names so they won't clash with others. */

// Start copy here -------------------------
function mcm_your_function() { ?>
  <div class="wrap">
    <div class="icon32" id="icon-options-general"><br /></div>
    <h2>Here's a demo page</h2>
    <p>You can put whatever you like on your new page. Or remove this page by checking the remove box on the Help/Settings page.</p>
    <div class="postbox-container" style="width:70%;">
         <div class="metabox-holder">
              <div class="postbox">
                   <h3>Customize this page and add your own custom pages</h3>
                   <div class="section">
                        <ol>
                          <li>Go into <strong>/wp-content/plugins/my-company-menu</strong> and copy the file mcm_menu.php</li>
                          <li>Paste mcm_menu.php into your <strong>/wp-content/uploads</strong> directory</li>
                          <li>Make all your custom changes to the file in the uploads directory so nothing gets overwritten during a plugin update.</li>
                        </ol>
                        <p>Note, this demo page will automatically disappear if the plugin finds <strong>mcm_menu.php</strong> in your Uploads folder.</p>
                   </div> <!-- /section -->
              </div> <!-- /postbox -->
         </div> <!-- /metabox-holder -->
    </div> <!-- /postbox-container -->

      <div class="postbox-container" style="width:20%;">
    <div class="metabox-holder">
      <div class="postbox">
        <h3>Make sidebar areas</h3>
        <div class="section">
        <p>Groovy sidebar area.</p>
        </div> <!-- /section -->
      </div> <!-- /postbox -->
    </div> <!-- metabox-holder -->
  </div> <!-- postbox-container -->

  </div> <!-- /wrap -->
<?php
}
// End copy here -------------------------

/*
// POD NAME
function bulletins_manager_page()
{
  $object = new Pod('pod_name');
  $add_fields = $edit_fields = array(
        'name', 'displayorder');
  $object->ui = array(
        'title'   => 'Bulletins',
        'reorder' => 'displayorder',
        'reorder_columns' => array(
             'name'      => 'Name'),
        'columns' => array(
             'name'      => 'Name',
             'created'   => 'Date Created',
             'modified'  => 'Last Modified',
             ),
        'add_fields'  => $add_fields,
        'edit_fields' => $edit_fields
    );
  pods_ui_manage($object);
}
*/

?>