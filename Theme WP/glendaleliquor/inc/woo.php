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


/* Checkout Fields */

add_filter( 'woocommerce_form_field', 'custom_add_classes_to_form_rows', 10, 4 );
function custom_add_classes_to_form_rows( $field, $key, $args, $value ) {

    $specific_fields = array('billing_first_name', 'billing_last_name');
    $select_fields = array('billing_country');

    if ( strpos( $field, 'form-row' ) !== false ) {
        if ( in_array( $key, $specific_fields ) ) {
            $field = str_replace( 'form-row', 'input-wrap', $field );
        } elseif ( in_array( $key, $select_fields ) ) {
            $field = str_replace( 'form-row', 'input-wrap input-wrap-full select-block', $field );
        }
        else {
            $field = str_replace( 'form-row', 'input-wrap input-wrap-full', $field );
        }
    }

    return $field;
}

add_filter( 'woocommerce_checkout_fields', 'custom_rearrange_checkout_fields' );
function custom_rearrange_checkout_fields( $fields ) {

    $new_order = array(
        'billing_first_name',
        'billing_last_name',
        'billing_company',
        'billing_country',
        'billing_postcode',
        'billing_address_1',
        'billing_address_2',
        'billing_city',
        'billing_phone',
        'billing_email',
    );

    $reordered_fields = array();
    foreach ( $new_order as $field_key ) {
        if ( isset( $fields['billing'][ $field_key ] ) ) {
            $reordered_fields[ $field_key ] = $fields['billing'][ $field_key ];
        }
    }

    $fields['billing'] = $reordered_fields;

    return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'custom_remove_checkout_fields' );
function custom_remove_checkout_fields( $fields ) {

    unset( $fields['billing']['billing_state'] );

    return $fields;
}

add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );


/* Account Menu*/

add_filter( 'woocommerce_account_menu_items', 'add_order_count_to_my_account_menu' );

function add_order_count_to_my_account_menu( $items ) {

    $statuses = array('wc-pending', 'wc-on-hold', 'wc-failed');
    $args = array(
        'status' => $statuses,
        'return' => 'ids',
    );

    $orders = wc_get_orders( $args );
    $count = count( $orders );


    if ( isset( $items['orders'] ) && $count > 0 ) {
        $items['orders'] = 'Orders(' . $count . ')';
    }

    return $items;
}


add_action( 'woocommerce_save_account_details', 'save_custom_fields_in_account' );

function save_custom_fields_in_account( $user_id ) {
    if ( isset( $_POST['account_phone'] ) ) {
        update_user_meta( $user_id, 'billing_phone', sanitize_text_field( $_POST['account_phone'] ) );
    }

    if ( isset( $_POST['account_company'] ) ) {
        update_user_meta( $user_id, 'billing_company', sanitize_text_field( $_POST['account_company'] ) );
    }
}