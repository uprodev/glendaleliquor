<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.7.0
 */

defined( 'ABSPATH' ) || exit;

$id = get_option('woocommerce_myaccount_page_id');

$title = get_field('settings_title', $id);
$subtitle = get_field('settings_subtitle', $id);

do_action( 'woocommerce_before_edit_account_form' );

?>

<div class="account-setting-wrap">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa-light fa-chevron-left"></i><?= __('Account Settings', 'glendaleliquor');?></a></li>
    </ul>
    <h2><?= $title?$title:'Account Settings';?></h2>
    <p><?= $subtitle?$subtitle:'Manage your account settings';?></p>

    <form class="woocommerce-EditAccountForm edit-account default-form" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

        <?php do_action( 'woocommerce_edit_account_form_start' ); ?>

        <div class="input-wrap">
            <label for="account_first_name"><?php esc_html_e( 'First name *', 'woocommerce' ); ?></label>
            <input type="text" name="account_first_name" id="account_first_name" autocomplete="given-name"
                   value="<?php echo esc_attr( get_user_meta( get_current_user_id(), 'billing_first_name', true ) );
            ?>" />
        </div>
        <div class="input-wrap">
            <label for="account_last_name"><?php esc_html_e( 'Last name *', 'woocommerce' ); ?></label>
            <input type="text" name="account_last_name" id="account_last_name" autocomplete="family-name"
                   value="<?php echo esc_attr( get_user_meta( get_current_user_id(), 'billing_last_name', true ) );
                   ?>" />
        </div>

        <div class="input-wrap input-wrap-full">
            <label for="account_company"><?= __('Company name (optional)', 'glendaleliquor');?></label>
            <input type="text" name="account_company" id="account_company" value="<?php echo esc_attr( get_user_meta( get_current_user_id(), 'billing_company', true ) ); ?>" />
        </div>
        <div class="input-wrap input-wrap-full">
            <label for="account_phone"><?= __('Phone *', 'glendaleliquor');?></label>
            <input type="tel" class="tel-account" name="account_phone" id="account_phone" value="<?php echo esc_attr( get_user_meta( get_current_user_id(), 'billing_phone', true ) ); ?>">
        </div>
        <div class="input-wrap input-wrap-full">
            <label for="account_email"><?php esc_html_e( 'Email *', 'woocommerce' ); ?></label>
            <input type="email" name="account_email" id="account_email" autocomplete="email" value="<?php echo
            esc_attr( get_user_meta( get_current_user_id(), 'billing_email', true ) ); ?>" />
        </div>
        <div class="input-wrap input-wrap-full password-checkbox">
            <label for="password_current"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
            <input type="password" name="password_current" id="password_current" autocomplete="off" />
            <a href="#"><i class="fa-light fa-eye"></i></a>
        </div>
        <div class="input-wrap input-wrap-full password-checkbox">
            <label for="password_1"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
            <input type="password" name="password_1" id="password_1" autocomplete="off" />
            <a href="#"><i class="fa-light fa-eye"></i></a>
        </div>
        <div class="input-wrap input-wrap-full password-checkbox">
            <label for="password_2"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label>
            <input type="password" name="password_2" id="password_2" autocomplete="off" />
            <a href="#"><i class="fa-light fa-eye"></i></a>
        </div>

        <?php
        /**
         * My Account edit account form.
         *
         * @since 2.6.0
         */
        do_action( 'woocommerce_edit_account_form' );
        ?>

        <div class="input-wrap-submit">
            <?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
            <button type="submit" class="woocommerce-Button btn-default btn-small btn-gold" name="save_account_details" value="<?php esc_attr_e( 'Update details', 'woocommerce' ); ?>"><span><?php esc_html_e( 'Update details', 'woocommerce' ); ?></span></button>
            <input type="hidden" name="action" value="save_account_details" />
        </div>

        <?php do_action( 'woocommerce_edit_account_form_end' ); ?>


        <?php
            /**
             * Hook where additional fields should be rendered.
             *
             * @since 8.7.0
             */
            do_action( 'woocommerce_edit_account_form_fields' );
        ?>

    </form>
</div>
<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
