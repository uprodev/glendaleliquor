<?php

include 'inc/enqueue.php';     // add styles and scripts
include 'inc/acf.php';         // custom acf functions
include 'inc/extras.php';      // custom functions
include 'classes/walker.php';  // walker nav menu
include 'inc/register.php';    // custom ajax register and auth
include 'inc/ajax-actions.php';// ajax actions


add_action('after_setup_theme', 'theme_register_nav_menu');


function theme_register_nav_menu(){
	register_nav_menus( array(
        'main-menu' => 'header',
        'mob-menu'  => 'mobile',
       )
    );
	add_theme_support( 'post-thumbnails'); 
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();

	acf_add_options_sub_page('Theme Settings');
}

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyAh1NE8kfXzx31UyPrwTCqwJdETUseulmI');
}

add_action('acf/init', 'my_acf_init');


/* allow svg */

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}