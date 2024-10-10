<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

    <section class="products">
        <div class="content-width">
            <div class="title-wrap">
                <div class="title">
                    <h2><?= __('Recommended', 'glendaleliquor');?></h2>
                </div>
                <div class="nav-wrap">
                    <div class="product-next-1 btn"><i class="fa-regular fa-arrow-right"></i></div>
                    <div class="product-prev-1 btn"><i class="fa-regular fa-arrow-left"></i></div>
                </div>
            </div>
            <div class="slider-wrap">
                <div class="swiper product-slider product-slider-1">
                    <div class="swiper-wrapper">

                        <?php foreach ( $related_products as $related_product ) : ?>

                            <?php
                            $post_object = get_post( $related_product->get_id() );

                            setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                            wc_get_template_part( 'content', 'product-slide' );
                            ?>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php
endif;

wp_reset_postdata();
