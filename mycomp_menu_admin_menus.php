<?php

/**
* @plugin My Company Menu Plugin
* @title  Create admin menus
* @author Jason Michael Cross - www.jasonmichaelcross.com
* @author Immense Networks - www.immense.net
*/

/* ACTIONS */
add_action('admin_menu','pods_ui_mycomp_menu');

/* ADMIN MENUS */
//Company menu
function pods_ui_mycomp_menu()
{
  $hoptions = get_mycomp_menu_help();
  if($hoptions['icon']) {
    $icon = $hoptions['icon'];
  } else {
    $icon = WP_CONTENT_URL.'/plugins/my-company-menu/images/mycomp_icon.png';
  }
  //Company name field
  if($hoptions['compname']) {
    $cName = $hoptions['compname'];
  } else {
    $cName = 'Company';
  }

  add_object_page('My Company Menu', $cName, 'manage_options', 'mycomp_adminmenu', 'mycomp_menu_page', $icon, '');
}

/* Markup for main Company Options page */
function mycomp_menu_page() {
    if($_REQUEST['submit']) {
        update_mycomp_menu();
    }
    load_mycomp_menu();
}

/*
////
//// Deprecated in version 1.1.0
////
Look for custom submenu functions in user's custom mcm_menu
*/
add_action('admin_menu', 'mycomp_show_demo_page');

function mycomp_show_demo_page() {
  $hoptions = get_mycomp_menu_help();
  $mcm_menu_custom = WP_CONTENT_URL.'/uploads/mcm_menu.php';
  $mcm_menu_default = MYCOMP_MENU_URL.'mcm_menu.php';
  
  if(file_exists('../wp-content/uploads/mcm_menu.php')) {
    load_mcm_menu_custom();
  } elseif(!$hoptions['showdemo']) {
      //load_mcm_menu_default();
  }
}

/* Show Help/Settings subpage */
add_action('admin_menu','pods_ui_mycomp_helpsub');

function pods_ui_mycomp_helpsub()
{
  add_submenu_page('mycomp_adminmenu', 'My Company Menu Help', 'Help/Settings', 'manage_options', 'manage_help', 'mycomp_help_page'); 
}
/* Markup for Help page */
function mycomp_help_page() {  
    if($_REQUEST['submit']) {
        update_mycomp_menu_help();
    }
      load_mycomp_menu_help();
}

?>