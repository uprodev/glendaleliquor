<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);


    $user_id = get_current_user_id();
    $favorites = get_field('fav', 'user_'.$user_id);
    $favorites = $favorites ? $favorites : array();

if (!is_array($favorites)) {
    $favorites = $favorites ? explode(',', $favorites) : array();
}

?>
    <div class="cabinet-item cabinet-item-1">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa-light fa-chevron-left"></i>Dashboard</a></li>
        </ul>

        <section class="products">
            <div class="title-wrap">
                <div class="title">
                    <h1>Your favorites</h1>
                    <p>You  have recently viewed these products</p>
                </div>
                <div class="nav-wrap">
                    <div class="product-next-1 btn"><i class="fa-regular fa-arrow-right"></i></div>
                    <div class="product-prev-1 btn"><i class="fa-regular fa-arrow-left"></i></div>
                </div>
            </div>
            <div class="slider-wrap">
                <div class="swiper product-slider product-slider-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-wrapper">
                            <?php $new = new WP_Query([
                                'post_type' => 'product',
                                'posts_per_page' => -1,
                                'post__in' => $favorites,
                            ]);

                            while ($new->have_posts()):$new->the_post();

                                wc_get_template_part( 'content', 'product-slide' );

                            endwhile; wp_reset_postdata();?>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="title-wrap">
                <div class="title">
                    <h3>Your previous purchases</h3>
                    <p>Nice choice! Would you like to enjoy these beverages again?</p>
                </div>
                <div class="nav-wrap">
                    <div class="product-next-2 btn"><i class="fa-regular fa-arrow-right"></i></div>
                    <div class="product-prev-2 btn"><i class="fa-regular fa-arrow-left"></i></div>
                </div>
            </div>
            <div class="slider-wrap">
                <div class="swiper product-slider product-slider-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                <a href="#">
                                    <img src="img/img-2-1.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <p class="info">Sku: 080432400630</p>
                                <h6><a href="#">The Glenlivet 12 Years Old </a></h6>
                                <div class="stars-wrap">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                                <p class="price">$38.99</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default btn-small"><span>Order again</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#">
                                    <img src="img/img-2-2.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <p class="info">SKU: 088110151058</p>
                                <h6><a href="#">Hennessy VSOP Privilege Cognac 750 ML</a></h6>
                                <div class="stars-wrap">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                                <p class="price">$53.99</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default btn-small"><span>Order again</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#">
                                    <img src="img/img-2-3.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <p class="info">SKU: 674545000322</p>
                                <h6><a href="#">Don Julio 1942 Tequila 750 ML</a></h6>
                                <div class="stars-wrap">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                                <p class="price">$159.99</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default btn-small"><span>Order again</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#">
                                    <img src="img/img-2-4.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <p class="info">Sku: 080432100783</p>
                                <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                                <div class="stars-wrap">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                                <p class="price">$74.99</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default btn-small"><span>Order again</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#">
                                    <img src="img/img-2-4.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <p class="info">Sku: 080432100783</p>
                                <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                                <div class="stars-wrap">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                                <p class="price">$74.99</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default btn-small"><span>Order again</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#">
                                    <img src="img/img-2-4.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <p class="info">Sku: 080432100783</p>
                                <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                                <div class="stars-wrap">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                                <p class="price">$74.99</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default btn-small"><span>Order again</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <a href="#">
                                    <img src="img/img-2-4.png" alt="">
                                </a>
                            </figure>
                            <div class="text">
                                <p class="info">Sku: 080432100783</p>
                                <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                                <div class="stars-wrap">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                                <p class="price">$74.99</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-default btn-small"><span>Order again</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
<p>
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		wp_kses( __( 'Hello %1$s (not %1$s? <a href="%2$s">Log out</a>)', 'woocommerce' ), $allowed_html ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
	?>
</p>

<p>
	<?php
	/* translators: 1: Orders URL 2: Address URL 3: Account URL. */
	$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">billing address</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
	if ( wc_shipping_enabled() ) {
		/* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
		$dashboard_desc = __( 'From your account dashboard you can view your <a href="%1$s">recent orders</a>, manage your <a href="%2$s">shipping and billing addresses</a>, and <a href="%3$s">edit your password and account details</a>.', 'woocommerce' );
	}
	printf(
		wp_kses( $dashboard_desc, $allowed_html ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
	?>
</p>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
