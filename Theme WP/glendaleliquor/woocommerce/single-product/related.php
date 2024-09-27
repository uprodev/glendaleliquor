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
                        <?php woocommerce_product_loop_start(); ?>

                        <?php foreach ( $related_products as $related_product ) : ?>

                            <?php
                            $post_object = get_post( $related_product->get_id() );

                            setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                            wc_get_template_part( 'content', 'product' );
                            ?>

                        <?php endforeach; ?>

                        <?php woocommerce_product_loop_end(); ?>

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
                                    <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
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
                                    <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
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
                                    <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
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
                                    <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
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
                                    <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
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
                                    <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
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
                                    <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

	<?php
endif;

wp_reset_postdata();
