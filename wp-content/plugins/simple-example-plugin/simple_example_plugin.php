<?php
/*
 * Plugin Name: Simple Example Plugin
 * Description: Welcome to WordPress plugin development
 * Plugin URI: https://steampoweredmedia.com
 * Author: Greg Turner
 * Version: 1.0
 * License: GPLv2 or later
 * License URI: https://blah.blah
 */

// do stuff on activation
function myplugin_on_activation() {
  if (! current_user_can('activate_plugins')) return;
  add_option('myplugin_posts_per_page', 10);
  add_option('myplugin_show_welcome_page', true);
}
register_activation_hook(__FILE__,'myplugin_on_activation');

// do stuff on deactivation
function myplugin_on_deactivation() {
 // wp_die('YOU DESTROYED EVERYTHING');
  if (! current_user_can('activate_plugins')) return;
  flush_rewrite_rules();
}
register_deactivation_hook(__FILE__,'myplugin_on_deactivation');

/*
function myplugn_action_hook_example() {
  wp_mail( 'steampoweredmedia@gmail.com', 'Hey Greg', 'You doing ok?');
}
add_action('init','myplugn_action_hook_example');


function myplugin_filter_hook_example($content) {
  $content = $content . '<p>OMG GET OUT</p>';
  return $content;
}
add_filter('the_content', "myplugin_filter_hook_example");
*/
