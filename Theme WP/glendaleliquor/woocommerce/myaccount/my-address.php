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

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Billing address', 'woocommerce' ),
			'shipping' => __( 'Shipping address', 'woocommerce' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Billing address', 'woocommerce' ),
		),
		$customer_id
	);
}

$oldcol = 1;
$col    = 1;
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
                <p>example@gmail.com</p>
                <p class="label-p"><?= __('Address', 'glendaleliquor');?></p>
                <p>dfsdfsf</p>
                <p class="label-p"><?= __('Apartment number', 'glendaleliquor');?></p>
                <p>45</p>
                <p class="label-p"><?= __('City', 'glendaleliquor');?></p>
                <p>dfsdfsf</p>
                <p class="label-p"><?= __('Post code', 'glendaleliquor');?></p>
                <p>dfsdfsf</p>
                <p class="label-p"><?= __('Phone', 'glendaleliquor');?></p>
                <p>dfsdfsf</p>
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
<p>
	<?php echo apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'woocommerce' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	<div class="u-columns woocommerce-Addresses col2-set addresses">
<?php endif; ?>

<?php foreach ( $get_addresses as $name => $address_title ) : ?>
	<?php
		$address = wc_get_account_formatted_address( $name );
		$col     = $col * -1;
		$oldcol  = $oldcol * -1;
	?>

	<div class="u-column<?php echo $col < 0 ? 1 : 2; ?> col-<?php echo $oldcol < 0 ? 1 : 2; ?> woocommerce-Address">
		<header class="woocommerce-Address-title title">
			<h2><?php echo esc_html( $address_title ); ?></h2>
			<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit">
				<?php
					printf(
						/* translators: %s: Address title */
						$address ? esc_html__( 'Edit %s', 'woocommerce' ) : esc_html__( 'Add %s', 'woocommerce' ),
						esc_html( $address_title )
					);
				?>
			</a>
		</header>
		<address>
			<?php
				echo $address ? wp_kses_post( $address ) : esc_html_e( 'You have not set up this type of address yet.', 'woocommerce' );

				/**
				 * Used to output content after core address fields.
				 *
				 * @param string $name Address type.
				 * @since 8.7.0
				 */
				do_action( 'woocommerce_my_account_after_my_address', $name );
			?>
		</address>
	</div>

<?php endforeach; ?>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	</div>
	<?php
endif;?>

<div class="popup-form popup-default" id="address" style="display: none;">
    <div class="main">
        <h3>Edit address</h3>
        <form action="#" class="default-form ">
            <div class="input-wrap input-wrap-full">
                <label for="email-popup-1">Email address *</label>
                <input type="email" name="email-popup-1" id="email-popup-1" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="address-popup-1">Address</label>
                <input type="text" name="address-popup-1" id="address-popup-1" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="number-popup-1">Apartment number</label>
                <input type="text" name="number-popup-1" id="number-popup-1" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="city-popup-1">City</label>
                <input type="text" name="city-popup-1" id="city-popup-1" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="code-popup-1">Post code</label>
                <input type="text" name="code-popup-1" id="code-popup-1" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="tel-1">Phone *</label>
                <input type="text" name="tel-1" id="tel-1" required class="tel-1">
            </div>
            <div class="input-wrap-submit">
                <button type="submit" class="btn-default btn-small btn-gold"><span>Save</span></button>
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
