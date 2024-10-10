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

        <ul class="breadcrumb">
            <li><a href="#"><i class="fa-light fa-chevron-left"></i>Dashboard</a></li>
        </ul>

        <?php if(!empty($favorites)):?>
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
