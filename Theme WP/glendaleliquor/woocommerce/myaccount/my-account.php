<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="cabinet">
    <div class="content-width">
        <div class="content tabs-cabinet">
            <div class="cabinet-menu-wrap">
                <h4>Hi <?= $current_user->display_name;?></h4>
                <?php  do_action( 'woocommerce_account_navigation' ); ?>
            </div>

            <div class="cabinet-content">
                <div class="cabinet-item cabinet-item-1">
                    <?php do_action( 'woocommerce_account_content' );?>
                </div>
                <div class="cabinet-item cabinet-item-2">
                    <?php wc_get_template( 'myaccount/orders.php' ); ?>
                </div>
                <div class="cabinet-item cabinet-item-3">
                    <?php wc_get_template( 'myaccount/my-address.php' ); ?>
                </div>
                <div class="cabinet-item cabinet-item-4">
                    <?php wc_get_template( 'myaccount/form-edit-account.php' ); ?>
                </div>

            </div>
        </div>
    </div>
</section>