<?php

$actions = [
    'add_to_cart',
    'remove_from_cart',
    'qty_cart',
    'add_to_fav',
];

foreach($actions as $action){
    add_action('wp_ajax_'.$action, $action);
    add_action('wp_ajax_nopriv_'.$action, $action);
}

/**
 * add_to_cart
 */

function add_to_cart() {

    $product_id = (int)$_GET['product_id'];

    $added = WC()->cart->add_to_cart($product_id, 1);

    wp_die();

}



/**
 * remove_from_cart
 */

function remove_from_cart() {

    WC()->cart->remove_cart_item( $_GET['key'] );
    wp_send_json([
        'count' => WC()->cart->get_cart_contents_count()
    ]);

    die();
}


/**
 * change qty
 */

function qty_cart(){

    $cart_item_key = $_GET['hash'];
    $product_values = WC()->cart->get_cart_item($cart_item_key);
    $product_quantity = apply_filters('woocommerce_stock_amount_cart_item', apply_filters('woocommerce_stock_amount', preg_replace("/[^0-9\.]/", '', filter_var($_GET['quantity'], FILTER_SANITIZE_NUMBER_INT))), $cart_item_key);
    $passed_validation  = apply_filters('woocommerce_update_cart_validation', true, $cart_item_key, $product_values, $product_quantity);


    if ($passed_validation) {
        WC()->cart->set_quantity($cart_item_key, $product_quantity, true);
    }

    die();
}


/* add to fav*/

function add_to_fav() {

    $product_id = intval($_POST['product_id']);

    if (is_user_logged_in()) {

        $user_id = get_current_user_id();
        $favorites = get_field('fav', 'user_' . $user_id);
        if (!is_array($favorites)) {
            $favorites = $favorites ? explode(',', $favorites) : array();
        }

        if (in_array($product_id, $favorites)) {
            $favorites = array_diff($favorites, array($product_id));
            $is_favorite = false;
        } else {
            $favorites[] = $product_id;
            $is_favorite = true;
        }


        $favorites_str = implode(',', $favorites);

        update_field('fav', $favorites_str, 'user_' . $user_id);

    } else {
        $favorites = isset($_COOKIE['woocommerce_favorites']) ? json_decode(stripslashes($_COOKIE['woocommerce_favorites']), true) : array();

        if (in_array($product_id, $favorites)) {
            $favorites = array_diff($favorites, array($product_id));
            $is_favorite = false;
        } else {
            $favorites[] = $product_id;
            $is_favorite = true;
        }
    }


    setcookie('woocommerce_favorites', json_encode($favorites), time() + (86400 * 30), '/');

    wp_send_json_success(array(
        'is_favorite' => $is_favorite
    ));
}


