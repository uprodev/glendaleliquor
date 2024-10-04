<?php

include 'inc/enqueue.php';     // add styles and scripts
include 'inc/acf.php';         // custom acf functions
include 'inc/extras.php';      // custom functions
include 'classes/walker.php';  // walker nav menu
include 'inc/register.php';    // custom ajax register and auth
include 'inc/ajax-actions.php';// ajax actions
include 'inc/woo.php';         // woocommerce actions


add_theme_support( 'woocommerce');


add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu(){
	register_nav_menus( array(
        'main-menu' => 'header',
        'footer-menu1'  => 'footer1',
        'footer-menu2'  => 'footer2',
        'footer-menu3'  => 'footer3',
       )
    );
	add_theme_support( 'post-thumbnails'); 
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();

	acf_add_options_sub_page('Theme Settings');
}

function my_acf_init() {
    $api = get_field('google_map_api_key', 'options');

	acf_update_setting('google_api_key', $api);
}

add_action('acf/init', 'my_acf_init');


/* allow svg */

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}