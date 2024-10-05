<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<section class="cart-block">
    <div class="content-width">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa-light fa-chevron-left"></i><?= __('Back', 'glendaleliquor');?></a></li>
        </ul>

        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
            <?php do_action( 'woocommerce_before_cart_table' ); ?>

            <h1><?php the_title();?> (<?= WC()->cart->get_cart_contents_count();?> <?= __('Items', 'glendaleliquor');?>)</h1>
            <div class="content">
                <div class="top-row">
                    <div class="data data-1"><?= __('Item', 'glendaleliquor');?></div>
                    <div class="data data-2"><?= __('Price', 'glendaleliquor');?></div>
                    <div class="data data-3"><?= __('Quantity', 'glendaleliquor');?></div>
                    <div class="data data-4"><?= __('Total', 'glendaleliquor');?></div>
                    <div class="data data-5"></div>
                </div>
                <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    /**
                     * Filter the product name.
                     *
                     * @since 2.1.0
                     * @param string $product_name Name of the product in the cart.
                     * @param array $cart_item The product in the cart.
                     * @param string $cart_item_key Key for the product in the cart.
                     */
                    $product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>

                        <div class="item-row">
                            <div class="data data-1">
                                <?php $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                if ( ! $product_permalink ) {
                                    echo $thumbnail; // PHPCS: XSS ok.
                                } else {
                                    printf( '<figure><a href="%s">%s</a></figure>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                }
                                ?>

                                <div class="text">
                                    <?php
                                if ( ! $product_permalink ) {
                                    echo wp_kses_post( $product_name . '&nbsp;' );
                                } else {
                                    /**
                                     * This filter is documented above.
                                     *
                                     * @since 2.1.0
                                     */
                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<h6><a href="%s">%s</a></h6>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                }

                                do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                // Meta data.
                                echo wc_get_formatted_cart_item_data( $cart_item );?>
                                    <p><?= __('Gift Wrapping', 'glendaleliquor');?></p>
                                    <p><a href="#"><u><?= __('Add', 'glendaleliquor');?></u></a></p>
                                </div>
                            </div>
                            <div class="data data-2">
                                <p class="mob"><?= __('Gift Wrapping', 'glendaleliquor');?></p>
                                <p class="mob"><a href="#"><u><?= __('Add', 'glendaleliquor');?></u></a></p>
                                <p class="price">
                                    <?= apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );?>
                                </p>
                            </div>
                            <div class="data data-3">
                                <div class="input-number" data-key="<?= $cart_item_key;?>">
                                    <div class="btn-count btn-count-minus"><i class="fa fa-minus"></i></div>
                                    <?php
                                    if ( $_product->is_sold_individually() ) {
                                        $min_quantity = 1;
                                        $max_quantity = 1;
                                    } else {
                                        $min_quantity = 0;
                                        $max_quantity = $_product->get_max_purchase_quantity();
                                    }

                                    $product_quantity = woocommerce_quantity_input(
                                        array(
                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                            'input_value'  => $cart_item['quantity'],
                                            'max_value'    => $max_quantity,
                                            'min_value'    => $min_quantity,
                                            'product_name' => $product_name,
                                        ),
                                        $_product,
                                        false
                                    );

                                    echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                    ?>
                                    <div class="btn-count btn-count-plus"><i class="fa fa-plus"></i></div>
                                </div>
                            </div>
                            <div class="data data-4">
                                <p><?php
                                    echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                    ?></p>
                            </div>
                            <div class="data data-5">
                                <?= apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                    'woocommerce_cart_item_remove_link',
                                    sprintf(
                                        '<a href="%s" class="del" data-product_id="%s" data-product_sku="%s" data-cart_item_key="%s"><i class="fa-solid fa-xmark"></i></a>',
                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                        esc_attr( $product_id ),
                                        esc_attr( $_product->get_sku() ),
                                        esc_attr( $cart_item_key )
                                    ),
                                    $cart_item_key
                                );
                                ?>
                            </div>
                        </div>

                        <?php
                    }
                }


                do_action( 'woocommerce_before_cart_collaterals' ); ?>

                <div class="cart-collaterals total-row-wrap">
                    <?php
                    /**
                     * Cart collaterals hook.
                     *
                     * @hooked woocommerce_cross_sell_display
                     * @hooked woocommerce_cart_totals - 10
                     */
                    do_action( 'woocommerce_cart_collaterals' );
                    ?>
                </div>

            </div>

            <?php do_action( 'woocommerce_before_cart_contents' ); ?>

            <?php do_action( 'woocommerce_cart_contents' ); ?>

            <?php if ( !wc_coupons_enabled() ) { ?>
                                <div class="coupon">
                                    <label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
                                    <?php do_action( 'woocommerce_cart_coupon' ); ?>
                                </div>
                            <?php } ?>

            <?php do_action( 'woocommerce_cart_actions' ); ?>

            <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>

            <?php do_action( 'woocommerce_after_cart_contents' ); ?>

        </form>

    </div>
</section>

<?php do_action( 'woocommerce_after_cart' ); ?>
