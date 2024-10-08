<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="total-row">
    <p><?= __('Subtotal:', 'glendaleliquor');?></p>
    <p><?php wc_cart_totals_subtotal_html(); ?></p>
</div>
<div class="total-row">
    <p><?= __('Shipping:', 'glendaleliquor');?></p>
    <?php woocommerce_shipping_calculator();?>
</div>
<div class="total-row">
    <p><?= __('Coupon Code:', 'glendaleliquor');?></p>
    <p><a href="#"><?= __('Add coupon', 'glendaleliquor');?></a></p>
    <?php if ( wc_coupons_enabled() ) { ?>
        <div class="coupon">
            <label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
            <?php do_action( 'woocommerce_cart_coupon' ); ?>
        </div>
    <?php } ?>
</div>
<div class="total-row total-row-b">
    <p><?= __('Grand total:', 'glendaleliquor');?></p>
    <p><?php wc_cart_totals_order_total_html(); ?></p>
</div>
<div class="total-row">
    <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
    <?php do_action( 'woocommerce_after_cart_totals' ); ?>
</div>
