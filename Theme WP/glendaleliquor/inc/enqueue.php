<?php

add_action( 'wp_enqueue_scripts', 'add_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );

function add_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('fancybox', get_template_directory_uri().'/css/jquery.fancybox.min.css');
    wp_enqueue_style('fonts', get_template_directory_uri().'/fonts/FA5PRO-master/css/all.css');
    wp_enqueue_style('nice-select', get_template_directory_uri().'/css/nice-select.css');
    wp_enqueue_style('swiper', get_template_directory_uri().'/css/swiper.min.css');
    wp_enqueue_style('ion', get_template_directory_uri().'/css/ion.rangeSlider.min.css');
    wp_enqueue_style('intlTelInput', get_template_directory_uri().'/css/intlTelInput.min.css');
    wp_enqueue_style('air-datepicker', get_template_directory_uri().'/css/air-datepicker.css');
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', array(), rand(1111, 9999));
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), rand(1111, 9999));
    wp_enqueue_style( 'theme', get_stylesheet_uri(), array(), rand(1111, 9999) );

}


function add_scripts() {

    wp_enqueue_script( 'wc-cart-fragments' );

    wp_enqueue_script( 'cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), rand(1111, 9999), false);
    wp_enqueue_script( 'fancyboxjs', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/js/swiper.js', array('jquery'), false, true);
    wp_enqueue_script( 'select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array('jquery'), rand(1111, 9999), true);
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), rand(1111, 9999), true);
    wp_enqueue_script( 'ion', get_template_directory_uri() . '/js/ion.rangeSlider.min.js', array('jquery'), rand(1111, 9999), true);
    wp_enqueue_script( 'intlTelInput', get_template_directory_uri() . '/js/intlTelInput.min.js', array('jquery'), rand(1111, 9999), true);
    wp_enqueue_script( 'air-datepicker', get_template_directory_uri() . '/js/air-datepicker.js', array('jquery'), rand(1111, 9999), true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), rand(1111, 9999), true);
    wp_enqueue_script( 'action', get_template_directory_uri() . '/js/action.js', array('jquery'), rand(1111, 9999), true);


    wp_localize_script('action', 'globals',
        array(
            'url' => admin_url('admin-ajax.php'),
            'template' => get_template_directory_uri(),
        )
    );


}