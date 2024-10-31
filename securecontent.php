<?php

/**
 * Plugin Name: Secure Content
 * Plugin URI: http://orangentechnologies.com
 * Description: A plug-in to secure your website content and images from copying. This plugin will disable right click on images and source code area. It will also disable copying selected content with mouse for copying. 
 * Version: 1.0.1
 * Author: Ajanth R
 * Author URI: http://orangentechnologies.com
 */


function aj_add_jquery() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'aj_add_jquery');

function aj_secure_content() {
	wp_enqueue_script(
		'ajsecurescript',
		plugins_url( '/js/ajsecurescript.js' , __FILE__ ),
		array( 'scriptaculous' )
	);
}

add_action( 'wp_enqueue_scripts', 'aj_secure_content' );
?>