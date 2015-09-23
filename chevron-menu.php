<?php
/* 
Plugin Name: Chevron Menu
Description: Adds a chevron pattern around the main menu items (for Genesis and perhaps other themes)
Author: 10x Web Solutions
Author URI: http://10x.agency
*/

add_action( 'wp_enqueue_scripts', 'chevron_menu_enqueues' );
function chevron_menu_enqueues() {
	wp_enqueue_style( 
		'chevron-menu', 
		plugin_dir_url(__FILE__).'css/chevron-menu.css', 
		array()
	);
}