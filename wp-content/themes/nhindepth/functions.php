<?php
/**
 * Constants
 */
// This site is an INN Member
if ( ! defined( 'INN_MEMBER' ) ) {
    define( 'INN_MEMBER', true );
}
// This site is hosted by INN
if ( ! defined( 'INN_HOSTED' ) ) {
    define( 'INN_HOSTED', true );
}
	
function nhindepth_enqueue_scripts() {
	wp_enqueue_script(
		'custom-script',
		get_stylesheet_directory_uri() . '/js/indepthnh.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'nhindepth_enqueue_scripts' );