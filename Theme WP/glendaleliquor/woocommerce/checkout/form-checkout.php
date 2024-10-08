<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<section class="checkout-block">
    <div class="content-width">
        <form name="checkout" method="post" class="checkout woocommerce-checkout default-form" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
            <div class="content">
                <ul class="breadcrumb">
                    <li><a href="<?= wc_get_cart_url();?>"><i class="fa-light fa-chevron-left"></i><?= get_the_title(get_option( 'woocommerce_cart_page_id' ));?></a></li>
                </ul>
                <h1><?php the_title();?></h1>

                <?php do_action( 'woocommerce_checkout_billing' ); ?>

                <?php do_action( 'woocommerce_checkout_shipping' ); ?>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

            </div>

            <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>


            <div id="order_review" class="aside woocommerce-checkout-review-order">

                <?php do_action( 'woocommerce_checkout_order_review' ); ?>

            </div>

            <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>


        </form>
    </div>
</section>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
