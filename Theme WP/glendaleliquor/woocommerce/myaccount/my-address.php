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

?>
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa-light fa-chevron-left"></i><?= __('Addresses', 'glendaleliquor');?></a></li>
    </ul>
    <h2><?= $title?$title:'Addresses';?></h2>
    <p><?= $subtitle?$subtitle:'You  have added your addresses';?></p>

    <div class="btn-add-wrap">
        <a href="#add" class="fancybox"><img src="<?= get_template_directory_uri();?>/img/icon-11.svg" alt=""></a>
    </div>
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
                <a href="#" class="del "><i class="fa-light fa-trash"></i><?= __('Delete', 'glendaleliquor');?></a>
            </div>
        </div>
        <div class="address-item">
            <div class="wrap">
                <p>example@gmail.com</p>
                <p class="label-p">Address</p>
                <p>dfsdfsf</p>
                <p class="label-p">Apartment number</p>
                <p>45</p>
                <p class="label-p">City</p>
                <p>dfsdfsf</p>
                <p class="label-p">Post code</p>
                <p>dfsdfsf</p>
                <p class="label-p">Phone</p>
                <p>dfsdfsf</p>
            </div>
            <div class="btn-wrap">
                <a href="#address" class="edit fancybox"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                <a href="#" class="del"><i class="fa-light fa-trash"></i>Delete</a>
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

<div class="popup-form popup-default" id="add" style="display: none;">
    <div class="main">
        <h3>Add address</h3>
        <form action="#" class="default-form ">
            <div class="input-wrap input-wrap-full">
                <label for="email-popup-2">Email address *</label>
                <input type="email" name="email-popup-2" id="email-popup-2" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="address-popup-2">Address</label>
                <input type="text" name="address-popup-2" id="address-popup-2" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="number-popup-2">Apartment number</label>
                <input type="text" name="number-popup-2" id="number-popup-2" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="city-popup-2">City</label>
                <input type="text" name="city-popup-2" id="city-popup-2" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="code-popup-2">Post code</label>
                <input type="text" name="code-popup-2" id="code-popup-2" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="tel-2">Phone *</label>
                <input type="text" name="tel-2" id="tel-2" required class="tel-2">
            </div>
            <div class="input-wrap-submit">
                <button type="submit" class="btn-default btn-small btn-gold"><span>Update details</span></button>
            </div>
        </form>
    </div>
</div>
