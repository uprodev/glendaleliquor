<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}

$sku = $product->get_sku();

?>
<div class="swiper-slide">
    <figure>
        <a href="<?php the_permalink();?>">
            <img src="<?php the_post_thumbnail_url();?>" alt="">
        </a>
    </figure>
    <div class="text">
        <?= $sku?'<p class="info">'.__('Sku:', 'glendaleliquor').' '.$sku.'</p>':'';?>

        <h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>

        <?php do_action( 'woocommerce_after_shop_loop_item_title' );?>

        <div class="btn-wrap">
            <?php if ($product->is_in_stock()): ?>
                <a href="#" class="btn-default btn-small add-cart" data-product_id="<?= get_the_ID();?>">
                    <span data-txt="<?= __('Added to cart', 'glendaleliquor');?>">
                        <?php if( in_array( get_the_ID(), array_column( WC()->cart->get_cart(), 'product_id' ) ) ) {
                            echo __('Added to cart', 'glendaleliquor');
                        }else{
                            echo __('Add to cart', 'glendaleliquor');
                        }?>
                    </span>
                </a>
            <?php endif;?>
        </div>
    </div>
</div>

