<?php
/*
* Plugin Name: WP Game Launcher
* Description: Adds Game Builds as a Post Type, and a REST endpoint to access all avaliable builds
* Version: 1.0
* Author: Nabil Sekirime
* Author URI: https://soulcadeinteractive.com
*/

//Includes all PHP Files in &PluginDirector% /includes/php
  foreach( glob(dirname(__FILE__) . '/includes/*.php') as $class_path )
  		{
  			require_once( $class_path );
  		}

//Include all relevent CSS for the plugin

function enqueue_load_fa()
    {
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    }
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa');

//Add .zip file support
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    // add your extension to the mimes array as below
    $existing_mimes['zip'] = 'application/zip';
    $existing_mimes['gz'] = 'application/x-gzip';
    return $existing_mimes;
}
