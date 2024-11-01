<?php
/*
Plugin Name: Unwrap Images
Description: Removes the paragraph tags Wordpress places around images.
Version: 1.0
Author: Brian Gonzalez
Author URI: gnzlz.com
License: GPL2
*/

function load_script() {
   // register your script location, dependencies and version
   wp_register_script('unwrap_script',
       plugins_url('/script.js', __FILE__),
       array('jquery'),
       '1.0' );
   // enqueue the script
   wp_enqueue_script('unwrap_script');
}
add_action('wp_enqueue_scripts', 'load_script');
?>