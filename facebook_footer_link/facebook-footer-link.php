<?php
/**
 * Plugin Name: Facebook Footer Link
 * Description: Adds a Facebook profile to link to the end of posts
 * Version: 1.0
 * Author: James McKee
 * 
 */

 // Exit if Accessed Directly

 if(!defined('ABSPATH')){
     exit;
 }

 // Global Options Variable
 $ffl_options = get_option('ffl_settings');

 // Load Scripts
 require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php'); // Directs process into root folder of plugin, concatenated with scripts file
 
 // Load Content
 require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php'); 

if(is_admin()){
    // Load Settings
    require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-settings.php');  
}
