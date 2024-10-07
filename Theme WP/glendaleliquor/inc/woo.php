<?php

/* Fragments */

function add_points_widget_to_fragment( $fragments ) {

    $fragments['.count-product'] =  '<span class="count-product">'.  WC()->cart->get_cart_contents_count() . '</span>';



    ob_start();
    woocommerce_mini_cart();
    $fragments['.side-basket__container'] = ob_get_clean();

    return $fragments;
}
add_filter('add_to_cart_fragments', 'add_points_widget_to_fragment');


/* Sale percent */

function get_discount_percentage( $product ) {

    $regular_price = $product->get_regular_price();

    $sale_price = $product->get_sale_price();


    if ( $sale_price && $regular_price > $sale_price ) {
        $discount_percentage = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
        return $discount_percentage . '% ' . __("sale", "glendaleliquor");
    }

    return '';
}


//add_filter( 'woocommerce_form_field', 'custom_woocommerce_form_field', 10, 4 );
function custom_woocommerce_form_field( $field, $key, $args, $value ) {

    if ( strpos( $field, 'form-row' ) !== false ) {

        $field = str_replace( '<p class="form-row', '<div class="input-wrap', $field );

        $field = str_replace( '</p>', '</div>', $field );
    }

    return $field;
}