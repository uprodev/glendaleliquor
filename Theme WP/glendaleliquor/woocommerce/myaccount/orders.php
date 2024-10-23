<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.2.0
 */

defined( 'ABSPATH' ) || exit;

$current_user_id = get_current_user_id();

$id = get_option('woocommerce_myaccount_page_id');

$title = get_field('orders_title', $id);
$subtitle = get_field('orders_subtitle', $id);

$customer_orders = wc_get_orders( array(
    'customer_id' => $current_user_id,
    'limit' => -1,
) );

$processing_orders = array();
$completed_orders = array();


foreach ( $customer_orders as $order ) {

    $order_status = $order->get_status();

    if ( in_array( $order_status, array( 'pending', 'processing', 'on-hold' ) ) ) {
        $processing_orders[] = $order;
    }

    elseif ( in_array( $order_status, array( 'completed', 'cancelled', 'refunded', 'failed' ) ) ) {
        $completed_orders[] = $order;
    }
}


function display_orders( $orders, $status_label ) {
    if ( ! empty( $orders ) ) {
        echo '<h6>' . esc_html( $status_label ) . '</h6>';

        foreach ( $orders as $order_item ) {
            $st = '';
            if($status_label === 'Previous'){
                $st = ' order-complete';
            }else{
                $st = '';
            }
            $order_id = $order_item->get_id();
            $order = wc_get_order( $order_id );
            $order_total = $order_item->get_total();
            $order_date = $order_item->get_date_created();
            $formatted_date = $order_date->date_i18n( 'D. jS F Y' );
            $tracking_number = get_post_meta( $order_id, 'tracking_number', true );
            $meta_data = $order_item->get_meta_data();

            if ( function_exists( 'ast_get_tracking_items' ) ) {

                $tracking_items = ast_get_tracking_items($order_id);
                $first_tracking = $tracking_items[0];
                $tracking_url = isset( $first_tracking['formatted_tracking_link'] ) ? esc_url( $first_tracking['formatted_tracking_link'] ) : '';

            }
            echo '<div class="order' . $st . '">';
            echo '<div class="order-row order-row-head">
                <div class="data data-1">
                    <h6>Order #'.$order_item->get_order_number().'</h6>
                </div>
                <div class="data data-2">
                    <p>Placed: ' . esc_html( $formatted_date ) . '</p>';
                    echo '<p class="color">' . wc_get_order_status_name($order_item->get_status()) . '</p>';
                    if($status_label !== 'Previous' && $tracking_url){
                        echo '<a href="'. $tracking_url.'" target="_blank" class="loc btn-default btn-small"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>';
                    }
            echo '</div>
            </div>
            <div class="wrap-order">';
            $items = $order->get_items();
            foreach ( $items as $item_id => $item ) {
                $product_name = $item->get_name();
                $quantity = $item->get_quantity();
                $total = $item->get_total();
                $product = $item->get_product();
                $link = get_permalink( $product->get_id() );
                $image_url = wp_get_attachment_image_url( $product->get_image_id(), 'thumbnail' );


                echo '<div class="order-row order-row-data">
                    <div class="data data-1">
                        <figure>
                            <a href="'. $link .'">
                                <img src="' . esc_url( $image_url ) . '" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="data data-2">
                        <div class="item item-1">
                            <h6><a href="'. $link .'">' . $product_name . '</a></h6>
                            <p>' . __('Gift Wrapping', 'glendaleliquor') . '</p>
                            <p><a href="#">' . __('Gift bag', 'glendaleliquor') . '</a></p>
                        </div>
                        <div class="item item-3">
                            <h6>' . __('Price', 'glendaleliquor') . '</h6>
                            <p>' . wc_price($total) . '</p>
                            <h6>' . __('Quantity', 'glendaleliquor') . '</h6>
                            <p>' . $quantity . '</p>
                        </div>
                    </div>
                </div>';
            }
            echo '<div class="order-row order-bottom-row-mob">
                <div class="data data-1"></div>
                <div class="data data-2">
                    <h6>Total: $' . $order_total . '</h6>
                </div>
            </div>
            <div class="order-row order-bottom-row">
                <div class="data data-1">';
                    if($status_label === 'Previous'){
                        echo woocommerce_order_again_button( $order );
                    }else{
                        echo '<a href="' . esc_url( wp_nonce_url( add_query_arg( 'cancel_order', $order_id ), 'woocommerce_cancel_order' ) ) . '"><i class="fa-light fa-circle-xmark"></i>Cancel order</a>';
                    }

                echo '</div>
                <div class="data data-2">
                    <p></p>
                    <h6>Total: <span>$' . $order_total . '</span></h6>';
                    if($status_label !== 'Previous') {
                        echo '<a href="#" class="loc btn-default btn-small mob"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>';
                    }
                echo '</div>
                </div>
                </div>';
            echo '</div>';
        }

    }
}

?>

<ul class="breadcrumb">
    <li><a href="#"><i class="fa-light fa-chevron-left"></i><?= __('Orders', 'glendaleliquor');?></a></li>
</ul>

<h2><?= $title?$title:'Your Orders';?></h2>
<p><?= $subtitle?$subtitle:'View and edit all your pending, delivered orders here.';?></p>


<?php

    display_orders( $processing_orders, 'In process' );

    display_orders( $completed_orders, 'Previous' );
?>

