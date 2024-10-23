<?php
/**
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
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

defined( 'ABSPATH' ) || exit;


$id = get_option('woocommerce_myaccount_page_id');

$title = get_field('addresses_title', $id);
$subtitle = get_field('addresses_subtitle', $id);

$customer_id = get_current_user_id();


$billing_email = get_user_meta( $customer_id, 'billing_email', true );
$billing_address_1 = get_user_meta( $customer_id, 'billing_address_1', true );
$billing_address_2 = get_user_meta( $customer_id, 'billing_address_2', true );
$billing_city = get_user_meta( $customer_id, 'billing_city', true );
$billing_postcode = get_user_meta( $customer_id, 'billing_postcode', true );
$billing_phone = get_user_meta( $customer_id, 'billing_phone', true );

$shipping_email = get_user_meta( $customer_id, 'shipping_email', true );
$shipping_address_1 = get_user_meta( $customer_id, 'shipping_address_1', true );
$shipping_address_2 = get_user_meta( $customer_id, 'shipping_address_2', true );
$shipping_city = get_user_meta( $customer_id, 'shipping_city', true );
$shipping_postcode = get_user_meta( $customer_id, 'shipping_postcode', true );
$shipping_phone = get_user_meta( $customer_id, 'shipping_phone', true );

?>
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa-light fa-chevron-left"></i><?= __('Addresses', 'glendaleliquor');?></a></li>
    </ul>
    <h2><?= $title?$title:'Addresses';?></h2>
    <p><?= $subtitle?$subtitle:'You  have edited your addresses';?></p>

<!--    <div class="btn-add-wrap">-->
<!--        <a href="#add" class="fancybox"><img src="--><?php //= get_template_directory_uri();?><!--/img/icon-11.svg" alt=""></a>-->
<!--    </div>-->
    <div class="address-wrap">
        <div class="address-item">
            <div class="wrap">
                <p><?= $billing_email;?></p>
                <p class="label-p"><?= __('Address', 'glendaleliquor');?></p>
                <p><?= $billing_address_1;?></p>
                <p class="label-p"><?= __('Apartment number', 'glendaleliquor');?></p>
                <p><?= $billing_address_2;?></p>
                <p class="label-p"><?= __('City', 'glendaleliquor');?></p>
                <p><?= $billing_city;?></p>
                <p class="label-p"><?= __('Post code', 'glendaleliquor');?></p>
                <p><?= $billing_postcode;?></p>
                <p class="label-p"><?= __('Phone', 'glendaleliquor');?></p>
                <p><?= $billing_phone;?></p>
            </div>
            <div class="btn-wrap">
                <a href="#address" class="edit fancybox"><i class="fa-regular fa-pen-to-square"></i><?= __('Edit', 'glendaleliquor');?></a>
<!--                <a href="#" class="del "><i class="fa-light fa-trash"></i>--><?php //= __('Delete', 'glendaleliquor');?><!--</a>-->
            </div>
        </div>
        <div class="address-item">
            <div class="wrap">
                <p><?= $shipping_email;?></p>
                <p class="label-p"><?= __('Address', 'glendaleliquor');?></p>
                <p><?= $shipping_address_1;?></p>
                <p class="label-p"><?= __('Apartment number', 'glendaleliquor');?></p>
                <p><?= $shipping_address_2;?></p>
                <p class="label-p"><?= __('City', 'glendaleliquor');?></p>
                <p><?= $shipping_city;?></p>
                <p class="label-p"><?= __('Post code', 'glendaleliquor');?></p>
                <p><?= $shipping_postcode;?></p>
                <p class="label-p"><?= __('Phone', 'glendaleliquor');?></p>
                <p><?= $shipping_phone;?></p>
            </div>
            <div class="btn-wrap">
                <a href="#address-shipp" class="edit fancybox"><i class="fa-regular fa-pen-to-square"></i><?= __('Edit',
                        'glendaleliquor');?></a>
                <!--                <a href="#" class="del "><i class="fa-light fa-trash"></i>--><?php //= __('Delete', 'glendaleliquor');?><!--</a>-->
            </div>
        </div>
    </div>

<div class="popup-form popup-default" id="address" style="display: none;">
    <div class="main">
        <h3>Edit address</h3>
        <form method="post" class="default-form ">
            <?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
            <div class="input-wrap input-wrap-full">
                <label for="billing_email">Email address *</label>
                <input type="email" name="billing_email" id="billing_email" value="<?= $billing_email;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="billing_address_1">Address</label>
                <input type="text" name="billing_address_1" id="billing_address_1" value="<?= $billing_address_1;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="billing_address_2">Apartment number</label>
                <input type="text" name="billing_address_2" id="billing_address_2" value="<?= $billing_address_2;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="billing_city">City</label>
                <input type="text" name="billing_city" id="billing_city" value="<?= $billing_city;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="billing_postcode">Post code</label>
                <input type="text" name="billing_postcode" id="billing_postcode" value="<?= $billing_postcode;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="billing_phone">Phone *</label>
                <input type="text" name="billing_phone" id="billing_phone" value="<?= $billing_phone;?>" required class="tel-1 tel">
            </div>
            <div class="input-wrap-submit">
                <button type="submit" class="btn-default btn-small btn-gold"  name="save_custom_address" value="<?php esc_attr_e( 'Save', 'woocommerce' ); ?>"><span><?php esc_html_e( 'Save', 'woocommerce' ); ?></span></button>
                <?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>
                <input type="hidden" name="action" value="save_custom_address" />
            </div>
        </form>
    </div>
</div>

<div class="popup-form popup-default" id="address-shipp" style="display: none;">
    <div class="main">
        <h3>Edit address</h3>
        <form method="post" class="default-form ">
            <?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
            <div class="input-wrap input-wrap-full">
                <label for="billing_email">Email address *</label>
                <input type="email" name="shipping_email" id="shipping_email" value="<?= $shipping_email;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="billing_address_1">Address</label>
                <input type="text" name="shipping_address_1" id="shipping_address_1" value="<?= $shipping_address_1;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="shipping_address_2">Apartment number</label>
                <input type="text" name="shipping_address_2" id="shipping_address_2" value="<?= $shipping_address_2;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="shipping_city">City</label>
                <input type="text" name="shipping_city" id="shipping_city" value="<?= $shipping_city;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="shipping_postcode">Post code</label>
                <input type="text" name="shipping_postcode" id="shipping_postcode" value="<?= $shipping_postcode;?>" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="shipping_phone">Phone *</label>
                <input type="text" name="shipping_phone" id="shipping_phone" value="<?= $shipping_phone;?>" required class="tel-1 tel">
            </div>
            <div class="input-wrap-submit">
                <button type="submit" class="btn-default btn-small btn-gold" name="save_shipping_address" value="<?php esc_attr_e( 'Save', 'woocommerce' ); ?>"><span><?php esc_html_e( 'Save', 'woocommerce' ); ?></span></button>
                <?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>
                <input type="hidden" name="action" value="save_shipping_address" />
            </div>
        </form>
    </div>
</div>
