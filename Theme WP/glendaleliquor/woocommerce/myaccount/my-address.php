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
endif;
