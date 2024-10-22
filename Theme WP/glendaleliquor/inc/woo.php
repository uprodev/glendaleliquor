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


/* Accounts */

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

/* Reviews */

add_filter('comment_form_defaults', 'custom_comment_form_class');
function custom_comment_form_class($args) {

    $args['class_form'] = 'default-form';

    return $args;
}

add_filter('comment_form_submit_button', 'custom_review_submit_button');
function custom_review_submit_button($button) {
    $button = '<div class="input-wrap-submit">
        <button type="submit" class="btn-default btn-medium" id="submit-review" name="submit"><span>Send</span></button>
            </div>';
    return $button;
}

add_action('comment_form_logged_in_after', 'custom_review_fields');
add_action('comment_form_after_fields', 'custom_review_fields');

function custom_review_fields() {
    if (!is_user_logged_in()) {
        echo '<div class="input-wrap">
            <label for="last_name_comment">Last name *</label>
            <input type="text" name="last_name_comment" id="last_name_comment" required>
        </div>';
    }
    echo '<div class="input-wrap input-wrap-full">
        <label for="title">Title</label>
        <input type="text" name="title_comment" id="title_comment">
    </div>';
    echo '<div class="input-wrap input-wrap-full select-block">
        <label class="form-label" for="sex_comment">Sex</label>
        <select id="sex_comment" name="sex_comment">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
    </div>';
}

add_action('comment_post', 'save_custom_review_fields');
function save_custom_review_fields($comment_id) {
    if (isset($_POST['sex_comment']) && $_POST['sex_comment'] !== '') {
        add_comment_meta($comment_id, 'sex_comment', sanitize_text_field($_POST['sex_comment']), true);
    }
    if (isset($_POST['last_name_comment']) && $_POST['last_name_comment'] !== '') {
        add_comment_meta($comment_id, 'last_name_comment', sanitize_text_field($_POST['last_name_comment']), true);
    }
    if (isset($_POST['title_comment']) && $_POST['title_comment'] !== '') {
        add_comment_meta($comment_id, 'title_comment', sanitize_text_field($_POST['title_comment']), true);
    }
}

add_action('add_meta_boxes_comment', 'add_custom_review_fields_meta_box');
function add_custom_review_fields_meta_box() {
    add_meta_box(
        'title_custom_review_fields',
        'Additional Info',
        'display_custom_review_fields_meta_box',
        'comment',
        'normal',
        'high'
    );
}

function display_custom_review_fields_meta_box($comment) {
    $title = get_comment_meta($comment->comment_ID, 'title_comment', true);
    $sex = get_comment_meta($comment->comment_ID, 'sex_comment', true);
    $last_name = get_comment_meta($comment->comment_ID, 'last_name_comment', true);

    echo '<p><strong>Title Comment:</strong> ' . esc_html($title) . '</p>';
    echo '<p><strong>Sex:</strong> ' . esc_html($sex) . '</p>';
    echo '<p><strong>Last Name:</strong> ' . esc_html($last_name) . '</p>';
}

add_action('edit_comment', 'update_custom_review_fields');
function update_custom_review_fields($comment_id) {

    if (isset($_POST['title_comment']) && $_POST['title_comment'] !== '') {
        update_comment_meta($comment_id, 'title_comment', sanitize_text_field($_POST['title_comment']));
    } else {
        delete_comment_meta($comment_id, 'title_comment');
    }

    if (isset($_POST['sex_comment']) && $_POST['sex_comment'] !== '') {
        update_comment_meta($comment_id, 'sex_comment', sanitize_text_field($_POST['sex_comment']));
    } else {
        delete_comment_meta($comment_id, 'sex_comment');
    }

    if (isset($_POST['last_name_comment']) && $_POST['last_name_comment'] !== '') {
        update_comment_meta($comment_id, 'last_name_comment', sanitize_text_field($_POST['last_name_comment']));
    } else {
        delete_comment_meta($comment_id, 'last_name_comment');
    }
}

/* Order Fields */

add_filter('comment_form_fields', 'custom_woocommerce_review_fields_order');

function custom_woocommerce_review_fields_order($fields) {

    $new_order = array();

    $new_order['author'] = $fields['author'];
    $new_order['last_name_comment'] = $fields['last_name_comment'];
    $new_order['title_comment'] = $fields['title_comment'];
    $new_order['sex_comment'] = $fields['sex_comment'];
    $new_order['comment'] = $fields['comment'];
    $new_order['rating'] = $fields['rating'];

    return $new_order;
}


/* Rigestered and Login */

add_action( 'woocommerce_created_customer', 'auto_login_after_registration' );

function auto_login_after_registration( $customer_id ) {

    $user = get_user_by( 'ID', $customer_id );
    $user_email = $user->user_email;
    $user_password = $_POST['password'];

    wp_clear_auth_cookie();
    wp_set_current_user( $customer_id );
    wp_set_auth_cookie( $customer_id );

    wp_safe_redirect( wc_get_account_endpoint_url( 'dashboard' ) );
    exit;
}


add_filter( 'woocommerce_login_redirect', 'custom_login_redirect', 10, 2 );

function custom_login_redirect( $redirect, $user ) {

    return wc_get_account_endpoint_url( 'dashboard' );
}


add_action( 'init', 'save_custom_address_fields' );

function save_custom_address_fields() {
    if ( isset( $_POST['save_custom_address'] ) ) {

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'woocommerce-edit_address' ) ) {
            return;
        }

        $current_user = wp_get_current_user();


        if ( isset( $_POST['billing_email'] ) ) {
            update_user_meta( $current_user->ID, 'billing_email', sanitize_email( $_POST['billing_email'] ) );
        }

        if ( isset( $_POST['billing_phone'] ) ) {
            update_user_meta( $current_user->ID, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
        }

        if ( isset( $_POST['billing_address_1'] ) ) {
            update_user_meta( $current_user->ID, 'billing_address_1', sanitize_text_field( $_POST['billing_address_1'] ) );
        }

        if ( isset( $_POST['billing_address_2'] ) ) {
            update_user_meta( $current_user->ID, 'billing_address_2', sanitize_text_field( $_POST['billing_address_2'] ) );
        }

        if ( isset( $_POST['billing_city'] ) ) {
            update_user_meta( $current_user->ID, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );
        }

        if ( isset( $_POST['billing_postcode'] ) ) {
            update_user_meta( $current_user->ID, 'billing_postcode', sanitize_text_field( $_POST['billing_postcode'] ) );
        }

        exit;
    }
}

/*  Order Canceled */

add_action( 'init', 'handle_order_cancel' );
function handle_order_cancel() {
    if ( isset( $_GET['cancel_order'] ) && isset( $_GET['_wpnonce'] ) && wp_verify_nonce( $_GET['_wpnonce'], 'woocommerce_cancel_order' ) ) {
        $order_id = intval( $_GET['cancel_order'] );
        $order = wc_get_order( $order_id );

        if ( $order && $order->has_status( array( 'processing', 'on-hold' ) ) ) {
            // Cancel the order
            $order->update_status( 'cancelled', 'Order was cancelled by the customer.' );
            wc_add_notice( 'Your order has been successfully cancelled.', 'success' );
        } else {
            wc_add_notice( 'Unable to cancel the order.', 'error' );
        }

        exit;
    }
}

/* Order repeat */

add_filter( 'woocommerce_valid_order_statuses_for_order_again', 'custom_valid_statuses_for_order_again' );

function custom_valid_statuses_for_order_again( $statuses ) {

    $statuses[] = 'cancelled';
    $statuses[] = 'refunded';
    $statuses[] = 'failed';

    return $statuses;
}
