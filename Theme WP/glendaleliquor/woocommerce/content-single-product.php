<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$sku = $product->get_sku();
$short_description = wpautop($product->get_short_description());
$description = wpautop($product->get_description());

?>
<section class="product-detail">
    <div class="content-width">

        <?php woocommerce_breadcrumb();?>

        <div class="content">
            <div class="img-wrap">
                <div class="swiper slider-img slider-img-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <?php woocommerce_show_product_sale_flash();?>

                            <a href="<?php the_post_thumbnail_url();?>" data-fancybox="img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text">

                <?php woocommerce_template_single_title();?>

                <div class="swiper slider-img slider-img-2 img-mob">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php woocommerce_show_product_sale_flash();?>
                            <a href="<?php the_post_thumbnail_url();?>" data-fancybox="img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <?= $short_description;?>

                <div class="info-block">

                    <?= $sku?'<p>'.__('Sku:', 'glendaleliquor').' '.$sku.'</p>':'';?>

                    <?php woocommerce_template_single_rating();?>

                    <?php woocommerce_template_single_price();?>

                </div>

                <div class="btn-wrap">
                    <?php if ($product->is_in_stock()): ?>
                        <a href="#" class="btn-default btn-medium add-cart" data-product_id="<?= get_the_ID();?>">
                            <span data-txt="<?= __('Added to cart', 'glendaleliquor');?>">
                                <?php if( in_array( get_the_ID(), array_column( WC()->cart->get_cart(), 'product_id' ) ) ) {
                                    echo __('Added to cart', 'glendaleliquor');
                                }else{
                                    echo __('Add to cart', 'glendaleliquor');
                                }?>
                            </span>
                        </a>
                    <?php endif;?>
                    <a href="#" class="like">
                        <i class="fa-light fa-heart"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="tabs tabs-css">
            <ul class="tabs-menu">
                <?php if($short_description):?>
                    <li class="is-active"><?= __('Overview', 'glendaleliquor');?></li>
                <?php endif;?>
                <?php if($short_description):?>
                    <li<?= !$short_description?' class="is-active"':'';?>><?= __('Reviews', 'glendaleliquor');?></li>
                <?php endif;?>
            </ul>

            <div class="tab-content">
                <?php if($description):?>
                    <div class="tab-item">
                        <?= $description;?>
                    </div>
                <?php endif;?>
                <div class="tab-item">
                    <div class="slider-wrap">
                        <div class="swiper testimonials-slider ">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h6>Outstanding Selection and Service</h6>
                                    <p>Glendale Liquor has an amazing selection of wines and spirits. The knowledgeable staff helped me find the perfect bottle. The store is well-organized and easy to navigate. I’ll definitely be back!</p>
                                    <div class="wrap">
                                        <div class="stars-wrap">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="user">
                                            <div class="img">
                                                <img src="img/img-6-1.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="name">Olivia Harper </p>
                                                <p><i class="fa-regular fa-circle-check"></i> verifed  purchase</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <h6>Best Liquor Store in Town</h6>
                                    <p>My go-to spot for all beverage needs. Fantastic variety at great prices. The customer service is excellent, and the staff always provides great recommendations. Highly recommend!</p>
                                    <div class="wrap">
                                        <div class="stars-wrap">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="user">
                                            <div class="img">
                                                <img src="img/img-6-2.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="name">Liam Mitchell</p>
                                                <p><i class="fa-regular fa-circle-check"></i> verifed  purchase</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <h6>Excellent Customer Experience</h6>
                                    <p>Every visit is a pleasure. Friendly team, expert advice, and a welcoming atmosphere. Convenient location and great selection. Five stars!</p>
                                    <div class="wrap">
                                        <div class="stars-wrap">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="user">
                                            <div class="img">
                                                <img src="img/img-6-3.jpg" alt="">
                                            </div>
                                            <div class="text">
                                                <p class="name">Sophia Bennett</p>
                                                <p><i class="fa-regular fa-circle-check"></i> verifed  purchase</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap-all">
                        <a href="#add-review" class="btn-default btn-medium fancybox"><span>Leave a review</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php woocommerce_output_related_products();
