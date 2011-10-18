<?php

/**
 * @title  Add button to WYSIWYG editor
 * @author Jason Michael Cross - www.jasonmichaelcross.com
 */

class mycomp_mce_buttons {
  
  function mycomp_mce_buttons(){
    if(is_admin()){
      if ( current_user_can('edit_posts') && current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
      {
        add_filter('tiny_mce_version', array(&$this, 'tiny_mce_version') );
        add_filter("mce_external_plugins", array(&$this, "mce_external_plugins"));
        add_filter('mce_buttons', array(&$this, 'mce_buttons'));
      }
    }
  }
  function mce_buttons($buttons) {
    array_push($buttons, "separator", "mcsPHONE", "mcsFAX", "mcsEMAIL", "mcsADDRESS" );
    return $buttons;
  }
  function mce_external_plugins($plugin_array) {
    $plugin_array['mycompset']  =  plugins_url('/my-company-menu/mycomp_button.js');
    return $plugin_array;
  }
  function tiny_mce_version($version) {
    return ++$version;
  }
}
add_action('init', 'mycomp_mce_buttons');
function mycomp_mce_buttons(){
  global $mycomp_mce_buttons;
  $mycomp_mce_buttons = new mycomp_mce_buttons();
}


?>