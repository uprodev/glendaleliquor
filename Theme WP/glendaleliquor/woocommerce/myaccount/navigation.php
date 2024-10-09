<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

    <ul class="cabinet-menu">
        <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
            <li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
                <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>" <?php echo wc_is_current_account_menu_item( $endpoint ) ? 'aria-current="page"' : ''; ?>>
                    <?php echo esc_html( $label ); ?>
                </a>
            </li>
        <?php endforeach; ?>
        <li class="is-active"><a href="#"><img src="img/icon-10-1.svg" alt="">Dashboard</a></li>
        <li><a href="#"><img src="img/icon-10-2.svg" alt="">Orders (<span>1</span>)</a></li>
        <li><a href="#"><img src="img/icon-10-3.svg" alt="">Addresses</a></li>
        <li><a href="#"><img src="img/icon-10-4.svg" alt="">Account details</a></li>
        <li class="logout"><a href="#"><img src="img/icon-10-5.svg" alt="">Log out</a></li>
    </ul>


<?php do_action( 'woocommerce_after_account_navigation' ); ?>
