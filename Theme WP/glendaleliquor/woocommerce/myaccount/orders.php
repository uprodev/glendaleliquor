<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.2.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>
<ul class="breadcrumb">
    <li><a href="#"><i class="fa-light fa-chevron-left"></i>Orders</a></li>
</ul>
<h2>Your Orders</h2>
<p>View and edit all your pending, delivered orders here.</p>
<h6>In process</h6>
<div class="order">
    <div class="order-row order-row-head">
        <div class="data data-1">
            <h6>Order #030405</h6>
        </div>
        <div class="data data-2">
            <p>Placed: Thu. 17th June 2024</p>
            <a href="#" class="loc btn-default btn-small"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>
        </div>
    </div>
    <div class="order-row order-row-data">
        <div class="data data-1">
            <figure>
                <a href="#">
                    <img src="img/img-12.png" alt="">
                </a>
            </figure>
        </div>
        <div class="data data-2">
            <div class="item item-1">
                <h6><a href="#">365 Gevorkian <br>Strawberry Wine 750 ML</a></h6>
                <p>Gift Wrapping</p>
                <p><a href="#">Gift bag</a></p>
            </div>
            <div class="item item-2">
                <p>Status</p>
                <p class="color">In - Transit</p>
            </div>
            <div class="item item-3">
                <h6>Delivery Expected by:</h6>
                <h5>24 June 2024</h5>
                <p>Penn Valley</p>
                <p>California 95946, USA</p>
            </div>
        </div>
    </div>
    <div class="order-row order-bottom-row-mob">
        <div class="data data-1">
            <p>Paid using card ending with 3790</p>
        </div>
        <div class="data data-2">
            <h6>Total: $53.99</h6>
        </div>
    </div>
    <div class="order-row order-bottom-row">
        <div class="data data-1">
            <a href="#"><i class="fa-light fa-circle-xmark"></i>Cancel order</a>
        </div>
        <div class="data data-2">
            <p>Paid using card ending with 3790</p>
            <h6>Total: <span>$15.00</span></h6>
            <a href="#" class="loc btn-default btn-small mob"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>
        </div>
    </div>
</div>

<h6>Previous</h6>
<div class="order order-complete">
    <div class="order-row order-row-head">
        <div class="data data-1">
            <h6>Order #026784</h6>
        </div>
        <div class="data data-2">
            <p>Placed: Thu. 29th May 2024</p>

        </div>
    </div>
    <div class="order-row order-row-data">
        <div class="data data-1">
            <figure>
                <a href="#">
                    <img src="img/img-13.png" alt="">
                </a>
            </figure>
        </div>
        <div class="data data-2">
            <div class="item item-1">
                <h6><a href="#">Hennessy VSOP Privilege Cognac 750 ML</a></h6>
                <p>Gift Wrapping</p>
                <p><a href="#">No Wrapping</a></p>
            </div>
            <div class="item item-2">
                <p>Status</p>
                <p class="color green">Delivered</p>
            </div>
            <div class="item item-3">
                <h6>Delivery Expected by:</h6>
                <h5>30 May 2024</h5>
                <p>Penn Valley</p>
                <p>California 95946, USA</p>
            </div>
        </div>
    </div>
    <div class="order-row order-bottom-row-mob">
        <div class="data data-1">
            <p>Paid using card ending with 3790</p>
        </div>
        <div class="data data-2">
            <h6>Total: $53.99</h6>
        </div>
    </div>
    <div class="order-row order-bottom-row">
        <div class="data data-1">
            <a href="#" class="btn-default btn-small btn-gold"><span><i class="fa-light fa-rotate"></i>Order again</span></a>
        </div>
        <div class="data data-2">
            <p>Paid using card ending with 3790</p>
            <h6>Total: <span>$53.99</span></h6>
        </div>
    </div>
</div>
<?php if ( $has_orders ) : ?>

	<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
		<thead>
			<tr>
				<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
					<th scope="col" class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ( $customer_orders->orders as $customer_order ) {
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				$item_count = $order->get_item_count() - $order->get_item_count_refunded();
				?>
				<tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
					<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) :
						$is_order_number = 'order-number' === $column_id;
					?>
						<?php if ( $is_order_number ) : ?>
							<th class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>" scope="row">
						<?php else : ?>
							<td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
						<?php endif; ?>

							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( $is_order_number ) : ?>
								<?php /* translators: %s: the order number, usually accompanied by a leading # */ ?>
								<a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'View order number %s', 'woocommerce' ), $order->get_order_number() ) ); ?>">
									<?php echo esc_html( _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number() ); ?>
								</a>

							<?php elseif ( 'order-date' === $column_id ) : ?>
								<time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>

							<?php elseif ( 'order-status' === $column_id ) : ?>
								<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>

							<?php elseif ( 'order-total' === $column_id ) : ?>
								<?php
								/* translators: 1: formatted order total 2: total order items */
								echo wp_kses_post( sprintf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) );
								?>

							<?php elseif ( 'order-actions' === $column_id ) : ?>
								<?php
								$actions = wc_get_account_orders_actions( $order );

								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
										/* translators: %s: order number */
										echo '<a href="' . esc_url( $action['url'] ) . '" class="woocommerce-button' . esc_attr( $wp_button_class ) . ' button ' . sanitize_html_class( $key ) . '" aria-label="' . esc_attr( sprintf( __( 'View order number %s', 'woocommerce' ), $order->get_order_number() ) ) . '">' . esc_html( $action['name'] ) . '</a>';
									}
								}
								?>
							<?php endif; ?>

						<?php if ( $is_order_number ) : ?>
							</th>
						<?php else : ?>
							</td>
						<?php endif; ?>
					<?php endforeach; ?>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>
		<div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
			<?php if ( 1 !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button<?php echo esc_attr( $wp_button_class ); ?>" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"><?php esc_html_e( 'Previous', 'woocommerce' ); ?></a>
			<?php endif; ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>
				<a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button<?php echo esc_attr( $wp_button_class ); ?>" href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"><?php esc_html_e( 'Next', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>

<?php else : ?>

	<?php wc_print_notice( esc_html__( 'No order has been made yet.', 'woocommerce' ) . ' <a class="woocommerce-Button wc-forward button' . esc_attr( $wp_button_class ) . '" href="' . esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ) . '">' . esc_html__( 'Browse products', 'woocommerce' ) . '</a>', 'notice' ); // phpcs:ignore WooCommerce.Commenting.CommentHooks.MissingHookComment ?>

<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
