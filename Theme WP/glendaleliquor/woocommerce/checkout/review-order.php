<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="title">
    <h6>Order summary</h6>
</div>

<div class="item-wrap">
    <p class="name">
        <?php $cart_count = WC()->cart->get_cart_contents_count();

        if ($cart_count == 1) {
            echo $cart_count . __(' item', 'glendaleliquor');
        } else {
            echo $cart_count . __(' items', 'glendaleliquor');
        }?>
    </p>

    <?php
    do_action( 'woocommerce_review_order_before_cart_contents' );

    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
        $_id = $_product->get_ID();

        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
            ?>
            <div class="item">
                <figure>
                    <a href="<?= get_permalink($_id);?>">
                        <img src="<?= get_the_post_thumbnail_url($_id);?>" alt="">
                    </a>
                </figure>
                <div class="text">
                    <h6><a href="<?= get_permalink($_id);?>"><?= apply_filters( 'woocommerce_checkout_cart_item_quantity', sprintf( '%s&nbsp;x&nbsp;', $cart_item['quantity'] ), $cart_item, $cart_item_key ) . wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ); ?></a></h6>
                    <p class="mob"><?= $cart_item['quantity'];?> item</p>
                </div>
                <div class="price">
                    <div class="col">
                        <p class="mob">Total (USD)</p>
                        <p><?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                    </div>
                    <p class="mob"><a href="#">Edit</a></p>
                </div>
            </div>
            <?php
        }
    }

    do_action( 'woocommerce_review_order_after_cart_contents' );
    ?>

</div>

<div class="total-wrap">
    <div class="total-item">
        <p><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?>:</p>
        <p><?php wc_cart_totals_subtotal_html(); ?></p>
    </div>
    <div class="total-item">
        <p>Shipping:</p>
        <p>Free</p>
    </div>
    <?php  if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
        <?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
            <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited ?>
                <div class="total-item">
                    <p>Default Tax Class</p>
                    <p><?php echo wp_kses_post( $tax->formatted_amount ); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="total-item">
                <p><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></p>
                <p><?php wc_cart_totals_taxes_total_html(); ?></p>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
        <div class="total-item">
            <p>Promo/Gift Certificate</p>
            <p><?php wc_cart_totals_coupon_html( $coupon ); ?></p>
        </div>
    <?php endforeach; ?>

</div>

<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

<div class="total-line">
    <p><?php esc_html_e( 'Total (USD)', 'woocommerce' ); ?></p>
    <p><?php wc_cart_totals_order_total_html(); ?></p>
</div>

<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

