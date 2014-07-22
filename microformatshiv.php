<?php
/*
Plugin Name: Microformat Shiv
Plugin URI: http://www.ramoonus.nl/wordpress/microformatshiv/
Description: Adds the Microformat Shiv API to your website.
Version: 1.0.1
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_microformatshiv() {
		wp_enqueue_script('microformats-shiv', plugins_url('/js/microformats-shiv.min.js', __FILE__), false, '1.0.1');
}
// load
add_action('wp_enqueue_scripts', 'rw_microformatshiv');
?>