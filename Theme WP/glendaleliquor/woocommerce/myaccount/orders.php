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

        foreach ( $orders as $order ) {
            echo '<div class="order">';
            echo '<div class="order-row order-row-head">
                <div class="data data-1">
                    <h6>Order #'.$order->get_order_number().'</h6>
                </div>
                <div class="data data-2">
                    <p>Placed: '.wc_format_datetime( $order->get_date_created() ).'</p>
                    <a href="#" class="loc btn-default btn-small"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>
                </div>
            </div>';
            echo '<div class="order-row order-row-data">
                <div class="data data-1">
                    <figure>
                        <a href="#">
                            <img src="img/img-12.png" alt="">
                        </a>
                    </figure>
                </div>
                <div class="data data-2">
                    <div class="item item-1">
                        <h6><a href="#">365 Gevorkian <br>Strawberry Wine 750 ML</a></h6>
                        <p>'. __('Gift Wrapping', 'glendaleliquor').'</p>
                        <p><a href="#">'. __('Gift bag', 'glendaleliquor').'</a></p>
                    </div>
                    <div class="item item-2">
                        <p>'. __('Status', 'glendaleliquor').'</p>
                        <p class="color">'.wc_get_order_status_name( $order->get_status() ).'</p>
                    </div>
                    <div class="item item-3">
                        <h6>'. __('Delivery Expected by:', 'glendaleliquor').'</h6>
                        <h5>24 June 2024</h5>
                        <p>Penn Valley</p>
                        <p>California 95946, USA</p>
                    </div>
                </div>
            </div>';
            echo '</div>';
        }

    }
}

?>

<ul class="breadcrumb">
    <li><a href="#"><i class="fa-light fa-chevron-left"></i>Orders</a></li>
</ul>
<h2>Your Orders</h2>
<p>View and edit all your pending, delivered orders here.</p>

<?php

    display_orders( $processing_orders, 'In process' );

    display_orders( $completed_orders, 'Previous' );
?>







<div class="order">

    <div class="order-row order-row-data">
        <div class="data data-1">
            <figure>
                <a href="#">
                    <img src="img/img-12.png" alt="">
                </a>
            </figure>
        </div>
        <div class="data data-2">
            <div class="item item-1">
                <h6><a href="#">365 Gevorkian <br>Strawberry Wine 750 ML</a></h6>
                <p>Gift Wrapping</p>
                <p><a href="#">Gift bag</a></p>
            </div>
            <div class="item item-2">
                <p>Status</p>
                <p class="color">In - Transit</p>
            </div>
            <div class="item item-3">
                <h6>Delivery Expected by:</h6>
                <h5>24 June 2024</h5>
                <p>Penn Valley</p>
                <p>California 95946, USA</p>
            </div>
        </div>
    </div>
    <div class="order-row order-bottom-row-mob">
        <div class="data data-1">
            <p>Paid using card ending with 3790</p>
        </div>
        <div class="data data-2">
            <h6>Total: $53.99</h6>
        </div>
    </div>
    <div class="order-row order-bottom-row">
        <div class="data data-1">
            <a href="#"><i class="fa-light fa-circle-xmark"></i>Cancel order</a>
        </div>
        <div class="data data-2">
            <p>Paid using card ending with 3790</p>
            <h6>Total: <span>$15.00</span></h6>
            <a href="#" class="loc btn-default btn-small mob"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>
        </div>
    </div>
</div>

<h6>Previous</h6>
<div class="order order-complete">
    <div class="order-row order-row-head">
        <div class="data data-1">
            <h6>Order #026784</h6>
        </div>
        <div class="data data-2">
            <p>Placed: Thu. 29th May 2024</p>

        </div>
    </div>
    <div class="order-row order-row-data">
        <div class="data data-1">
            <figure>
                <a href="#">
                    <img src="img/img-13.png" alt="">
                </a>
            </figure>
        </div>
        <div class="data data-2">
            <div class="item item-1">
                <h6><a href="#">Hennessy VSOP Privilege Cognac 750 ML</a></h6>
                <p>Gift Wrapping</p>
                <p><a href="#">No Wrapping</a></p>
            </div>
            <div class="item item-2">
                <p>Status</p>
                <p class="color green">Delivered</p>
            </div>
            <div class="item item-3">
                <h6>Delivery Expected by:</h6>
                <h5>30 May 2024</h5>
                <p>Penn Valley</p>
                <p>California 95946, USA</p>
            </div>
        </div>
    </div>
    <div class="order-row order-bottom-row-mob">
        <div class="data data-1">
            <p>Paid using card ending with 3790</p>
        </div>
        <div class="data data-2">
            <h6>Total: $53.99</h6>
        </div>
    </div>
    <div class="order-row order-bottom-row">
        <div class="data data-1">
            <a href="#" class="btn-default btn-small btn-gold"><span><i class="fa-light fa-rotate"></i>Order again</span></a>
        </div>
        <div class="data data-2">
            <p>Paid using card ending with 3790</p>
            <h6>Total: <span>$53.99</span></h6>
        </div>
    </div>
</div>
