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

$customer_orders = wc_get_orders(
    array(
        'customer' => $user_id,
        'status' => array('wc-completed'),
        'limit' => -1
    )
);

$id = get_option('woocommerce_myaccount_page_id');

$title = get_field('favorites_title', $id);
$subtitle = get_field('favorites_subtitle', $id);
$title_prev = get_field('previous_purchases_title', $id);
$subtitle_prev = get_field('previous_purchases_subtitle', $id);

?>

        <ul class="breadcrumb">
            <li><a href="#"><i class="fa-light fa-chevron-left"></i><?= __('Dashboard', 'glendaleliquor');?></a></li>
        </ul>

        <?php if(!empty($favorites)):?>
            <section class="products">
                <div class="title-wrap">
                    <div class="title">

                        <h1><?= $title?$title:'Your favorites';?></h1>
                        <p><?= $subtitle?$subtitle:'You  have recently viewed these products';?></p>

                    </div>
                    <div class="nav-wrap">
                        <div class="product-next-1 btn"><i class="fa-regular fa-arrow-right"></i></div>
                        <div class="product-prev-1 btn"><i class="fa-regular fa-arrow-left"></i></div>
                    </div>
                </div>
                <div class="slider-wrap">
                    <div class="swiper product-slider product-slider-1">
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
            </section>
        <?php endif;?>

        <?php if(!empty($customer_orders)):?>
            <section class="products">
                <div class="title-wrap">
                    <div class="title">
                        <h3><?= $title_prev?$title_prev:'Your previous purchases';?></h3>
                        <p><?= $subtitle_prev?$subtitle_prev:'Nice choice! Would you like to enjoy these beverages again?';?></p>
                    </div>
                    <div class="nav-wrap">
                        <div class="product-next-2 btn"><i class="fa-regular fa-arrow-right"></i></div>
                        <div class="product-prev-2 btn"><i class="fa-regular fa-arrow-left"></i></div>
                    </div>
                </div>
                <div class="slider-wrap">
                    <div class="swiper product-slider product-slider-2">
                        <div class="swiper-wrapper">

                            <?php foreach ($customer_orders as $order) {
                                $items = $order->get_items();
                                $ids = $order->get_ID();
                                foreach ($items as $item) {
                                    $product = $item->get_product();

                                    if ($product) {
                                        $id = $product->get_ID();
                                        $sku = $product->get_sku();
                                        $price = $product->get_price_html();
                                        $rating_count = $product->get_rating_count();
                                        ?>
                                        <div class="swiper-slide">
                                            <figure>
                                                <a href="<?= get_permalink($id);?>">
                                                    <img src="<?= get_the_post_thumbnail_url($id);?>" alt="">
                                                </a>
                                            </figure>
                                            <div class="text">
                                                <p class="info">Sku: <?= $sku;?></p>
                                                <h6><a href="<?= get_permalink($id);?>"><?= $product->get_name();?></a></h6>
                                                <div class="stars-wrap">
                                                    <?php for( $i = 1; $i <= $rating_count; $i++ ):?>
                                                        <i class="fa-solid fa-star"></i>
                                                    <?php endfor;?>
                                                    <?php for( $i = 1; $i <= (5 - $rating_count); $i++ ):?>
                                                        <i class="fa-light fa-star"></i>
                                                    <?php endfor;?>
                                                </div>
                                                <p class="price"><?= $price;?></p>
                                                <div class="btn-wrap">
                                                    <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ) . '?order_id=' . $ids; ?>" class="btn-default btn-small"><span><?= __('Order again', 'glendaleliquor');?></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                }
                            }?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;