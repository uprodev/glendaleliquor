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

$args = array(
    'post_id' => $product->get_id(),
    'status' => 'approve',
    'post_type' => 'product',
);

$comments = get_comments($args);

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
                <?php if(count($comments) > 0):?>
                    <li<?= !$short_description?' class="is-active"':'';?>><?= __('Reviews', 'glendaleliquor');?></li>
                <?php endif;?>
            </ul>

            <div class="tab-content">
                <?php if($description):?>
                    <div class="tab-item">
                        <?= $description;?>
                    </div>
                <?php endif;?>

                <?php if(count($comments) > 0):?>
                    <div class="tab-item">
                        <div class="slider-wrap">
                            <div class="swiper testimonials-slider ">
                                <div class="swiper-wrapper">
                                    <?php foreach ($comments as $comment):

                                    $rating = intval(get_comment_meta($comment->comment_ID, 'rating', true));
                                    $title = get_comment_meta($comment->comment_ID, 'title_comment', true);

                                    ?>
                                        <div class="swiper-slide">
                                        <h6><?= $title;?></h6>
                                        <p><?= esc_html($comment->comment_content);?></p>
                                        <div class="wrap">
                                            <div class="stars-wrap">
                                                <?php for( $i = 1; $i <= $rating; $i++ ):?>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php endfor;?>
                                                <?php for( $i = 1; $i <= (5 - $rating); $i++ ):?>
                                                    <i class="fa-light fa-star"></i>
                                                <?php endfor;?>
                                            </div>
                                            <div class="user">
                                                <div class="img">
<!--                                                    <img src="img/img-6-1.jpg" alt="">-->
                                                </div>
                                                <div class="text">
                                                    <p class="name"><?= esc_html($comment->comment_author);?></p>
                                                    <p><i class="fa-regular fa-circle-check"></i> verifed  purchase</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap-all">
                            <a href="#add-review" class="btn-default btn-medium fancybox"><span><?= __('Leave a review', 'glendaleliquor');?></span></a>
                        </div>
                    </div>
                <?php endif;?>

            </div>
        </div>
    </div>
</section>

<?php woocommerce_output_related_products();
