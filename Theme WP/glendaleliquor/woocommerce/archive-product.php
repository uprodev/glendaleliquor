<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

$ids = get_queried_object_id();

if(is_shop()){
    $title = get_the_title(get_option( 'woocommerce_shop_page_id' ));
    $content = '';
}else{
    $title = get_queried_object()->name;
    $content = get_queried_object()->description;
}

?>

    <section class="category">
        <div class="content-width">
            <div class="mob-cart">
                <a href="#">
                    <img src="<?= get_template_directory_uri();?>/img/icon-8.svg" alt="">
                    <span>10</span>
                </a>
            </div>
            <div class="title">
                <h1><?= $title;?></h1>
                <?php if($content) {
                    echo $content;
                }?>
            </div>

            <?php if(is_product_category()):
                $child = get_terms([
                    'taxonomy' => 'product_cat',
                    'hide_empty' => false,
                    'parent' => $ids,
                ]);

                if($child):?>

                    <div class="form-wrap">
                        <div class="wrap">
                            <form action="#" class="form-select">
                                <?php foreach ($child as $item):?>
                                    <div class="input-wrap">
                                        <input type="checkbox" name="select" id="select-1" checked>
                                        <label for="select-1"><?= $item->name;?></label>
                                    </div>
                                <?php endforeach;?>
                            </form>
                        </div>
                    </div>

                <?php endif;?>
            <?php endif;?>

            <div class="select-line">

                <?php woocommerce_catalog_ordering();?>
                <div class="item item-2">
                    <label for="range-slider"><img src="<?= get_template_directory_uri();?>/img/icon-7.svg" alt=""><?= __('Price', 'glendaleliquor');?></label>
<!--                    <input type="text" class="range-slider" id="range-slider"  value="" />-->
                    <?= do_shortcode('[br_filter_single filter_id=187]');?>

                </div>
                <div class="item item-3 select-block">
                    <label class="form-label" for="filter-2"></label>
                    <select id="filter-2">
                        <option value="0" disabled selected>Sort by brand</option>
                        <option value="1">Featured items</option>
                        <option value="2">Best selling</option>
                        <option value="3">A to Z</option>
                        <option value="4">Z to A</option>
                        <option value="5">By review</option>
                        <option value="6">Price: Ascending</option>
                        <option value="7">Price: Descending</option>
                    </select>
                </div>
            </div>
            <?php if ( woocommerce_product_loop() ) {?>
                <div class="products-content">
                    <?php if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );
                        }
                    }?>
                </div>
                <?php do_action( 'woocommerce_after_shop_loop' );?>
            <?php }else{?>
                <div class="products-content">
                    <?php do_action( 'woocommerce_no_products_found' );?>
                </div>
            <?php }?>
        </div>
    </section>

    <section class="item-2x">
        <div class="content-width">
            <div class="item item-1">
                <div class="bg">
                    <img src="img/img-3-1.jpg" alt="">
                </div>
                <div class="wrap">
                    <div class="text">
                        <h3>New collection</h3>
                        <p>Check it out! Our new summer collection for 2024 is already in stock.</p>
                        <div class="link-wrap">
                            <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View all</a>
                        </div>
                    </div>
                    <div class="label">
                        <p>from $19.99</p>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="bg">
                    <img src="img/img-3-2.jpg" alt="">
                </div>
                <div class="wrap">
                    <div class="text">
                        <h3>try it out!</h3>
                        <p>Your Destination for Quality Spirits and Fine Wines</p>
                        <div class="link-wrap">
                            <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();