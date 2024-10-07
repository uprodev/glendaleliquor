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

            </div>
            <div class="aside">
                <div class="title">
                    <h6>Order summary</h6>
                </div>
                <div class="item-wrap">
                    <p class="name">1 item</p>
                    <div class="item">
                        <figure>
                            <a href="#">
                                <img src="img/img-11.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h6><a href="#">1 x 365 Gevorkian Strawberry Wine 750 ML</a></h6>
                            <p class="mob">1 item</p>
                        </div>
                        <div class="price">
                            <div class="col">
                                <p class="mob">Total (USD)</p>
                                <p>$15.99</p>
                            </div>
                            <p class="mob"><a href="#">Edit</a></p>
                        </div>
                    </div>
                </div>

                <div class="total-wrap">
                    <div class="total-item">
                        <p>Subtotal:</p>
                        <p>$15.99</p>
                    </div>
                    <div class="total-item">
                        <p>Shipping:</p>
                        <p>Free</p>
                    </div>
                    <div class="total-item">
                        <p>Default Tax Class</p>
                        <p>$0.00</p>
                    </div>
                    <div class="total-item">
                        <p>Promo/Gift Certificate</p>
                        <p></p>
                    </div>
                </div>

                <div class="total-line">
                    <p>Total (USD)</p>
                    <p>$15.99</p>
                </div>

                <div class="payment-wrap">
                    <p>Payment</p>
                    <div class="input-wrap input-wrap-radio">
                        <div class="wrap-radio">
                            <input type="radio" name="radio" id="radio-1" checked>
                            <label for="radio-1">Credit card
                                <img src="img/icon-9-1.svg" alt="">
                                <img src="img/icon-9-2.svg" alt="">
                                <img src="img/icon-9-3.svg" alt="">
                            </label>
                        </div>
                        <div class="wrap-active">
                            <div class="input-wrap">
                                <label for="card-1">Credit Card Number</label>
                                <input type="text" name="card-1" id="card-1" placeholder="">
                            </div>
                            <div class="input-wrap input-wrap-2">
                                <label for="card-2">Expiration</label>
                                <input type="text" name="card-2" id="card-2" placeholder="MM/YY">
                            </div>
                            <div class="input-wrap">
                                <label for="card-3">Name on Card</label>
                                <input type="text" name="card-3" id="card-3" placeholder="">
                            </div>
                            <div class="input-wrap input-wrap-2">
                                <label for="card-4">CVV</label>
                                <input type="text" name="card-4" id="card-4" placeholder="MM/YY">
                            </div>

                        </div>
                    </div>

                    <div class="input-wrap input-wrap-radio wrap-radio">
                        <input type="radio" name="radio" id="radio-2">
                        <label for="radio-2">Amazon Pay
                            <img src="img/icon-9-4.svg" alt="">
                        </label>
                    </div>
                </div>
                <div class="input-wrap-submit">
                    <button type="submit" class="btn-default btn-medium"><span>Place order</span></button>
                </div>
            </div>
            <?php if ( $checkout->get_checkout_fields() ) : ?>

                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                <div class="col2-set" id="customer_details">
                    <div class="col-1">
                        <?php do_action( 'woocommerce_checkout_billing' ); ?>
                    </div>

                    <div class="col-2">
                        <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                    </div>
                </div>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

            <?php endif; ?>

            <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

            <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>

            <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

            <div id="order_review" class="woocommerce-checkout-review-order">
                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
            </div>

            <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

        </form>
    </div>
</section>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
