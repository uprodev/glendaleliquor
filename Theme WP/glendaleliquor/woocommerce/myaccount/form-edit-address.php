<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.3.0
 */

defined( 'ABSPATH' ) || exit;

$page_title = ( 'billing' === $load_address ) ? esc_html__( 'Billing address', 'woocommerce' ) : esc_html__( 'Shipping address', 'woocommerce' );

do_action( 'woocommerce_before_edit_account_address_form' ); ?>

<?php if ( ! $load_address ) : ?>
	<?php wc_get_template( 'myaccount/my-address.php' ); ?>
<?php else : ?>
    <div class="account-setting-wrap">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa-light fa-chevron-left"></i>Account Settings</a></li>
        </ul>
        <h2>Account Settings</h2>
        <p>Manage your account settings</p>
        <form action="#" class="default-form ">
            <div class="input-wrap">
                <label for="name">First name *</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="input-wrap">
                <label for="last-name">Last name *</label>
                <input type="text" name="last-name" id="last-name" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="company">Company name (optional)</label>
                <input type="text" name="company" id="company">
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="tel">Phone *</label>
                <input type="text" name="tel" id="tel" required class="tel">
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="email">Email address *</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-wrap input-wrap-full password-checkbox">
                <label for="password">Password *</label>
                <input type="password" name="password" id="password" required>
                <a href="#"><i class="fa-light fa-eye"></i></a>
            </div>
            <div class="input-wrap-submit">
                <button type="submit" class="btn-default btn-small btn-gold"><span>Update details</span></button>
            </div>
        </form>
    </div>
	<form method="post">

		<h2><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title, $load_address ); ?></h2><?php // @codingStandardsIgnoreLine ?>

		<div class="woocommerce-address-fields">
			<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

			<div class="woocommerce-address-fields__field-wrapper">
				<?php
				foreach ( $address as $key => $field ) {
					woocommerce_form_field( $key, $field, wc_get_post_data_by_key( $key, $field['value'] ) );
				}
				?>
			</div>

			<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

			<p>
				<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="save_address" value="<?php esc_attr_e( 'Save address', 'woocommerce' ); ?>"><?php esc_html_e( 'Save address', 'woocommerce' ); ?></button>
				<?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>
				<input type="hidden" name="action" value="edit_address" />
			</p>
		</div>

	</form>

<?php endif; ?>

<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>
