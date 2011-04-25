<?php
/*
Plugin Name: Microformat Shiv
Plugin URI: http://www.ramoonus.nl
Description: Adds the Microformat Shiv API to your website.
Version: 1.0.0
Author: Ramoonus
Author URI: http://www.ramoonus.nl/wordpress/microformatshiv/
*/
?>
<?php 
/*
Microformat Shiv is broken into a number of components so that you only need to load the elements required.

1
microformats-shiv.min.js
The main microformats parser - is always required

2
microformats-coredefinition.min.js
Containing the definition for parsing hCard, hCalendar, XFN, adr, geo and tag microformats.

3
microformats-hresumedefinition.min.js
Containing the definition for parsing the hResume microformat.

4
microformats-hreviewdefinition.min.js
Containing the definition for parsing the hReview microformat.

5
microformats-hatomdefinition.min.js
Containing the definition for parsing the hAtom microformat.

6
microformats-isodate.min.js
Used to convert the ISO date format used in microformats into a native JavaScript date.microformats-vcard.min.jsUsed to convert a microformat shiv hCard JSON object into a vcard text string.

7
microformats-ical.min.js
Used to convert a microformat shiv hCalender JSON object into an ical text string.
*/
?>
<?php
// Update jQuery
function rw_microformatshiv() {
	if (!is_admin()) { // when not in admin screen
		// wp_register_script( $handle, $src, $deps, $ver, $in_footer );
		wp_register_script('microformats-shiv', plugins_url('/js/microformats-shiv.min.js', __FILE__), false, '0.2'); //register
		 wp_enqueue_script('microformats-shiv'); // load
		
		// coredef
		wp_register_script('microformats-coredefinition', plugins_url('/js/microformats-coredefinition.min.js', __FILE__), false, '0.2'); //register
		 wp_enqueue_script('microformats-coredefinition'); // load
		
		// hResume
		wp_register_script('microformats-hresumedefinition', plugins_url('/js/microformats-hresumedefinition.min.js', __FILE__), false, '0.2'); //register
		 wp_enqueue_script('microformats-hresumedefinition'); // load
		
		// hReview
		wp_register_script('microformats-hreviewdefinition', plugins_url('/js/microformats-hreviewdefinition.min.js', __FILE__), false, '0.2'); //register
		 wp_enqueue_script('microformats-hreviewdefinition'); // load
		 
		 // hAtom
		wp_register_script('microformats-hatomdefinition', plugins_url('/js/microformats-hatomdefinition.min.js', __FILE__), false, '0.2'); //register
		 wp_enqueue_script('microformats-hatomdefinition'); // load
		 
		// ISO Date
		wp_register_script('microformats-isodate', plugins_url('/js/microformats-isodate.min.js', __FILE__), false, '0.2'); //register
		 wp_enqueue_script('microformats-isodate'); // load
		 
		// iCal
		wp_register_script('microformats-ical', plugins_url('/js/microformats-ical.min.js', __FILE__), false, '0.2'); //register
		 wp_enqueue_script('microformats-ical'); // load
		
		// POCO def
		// vCard
	}
}
// load
add_action('init', 'rw_microformatshiv');
?>