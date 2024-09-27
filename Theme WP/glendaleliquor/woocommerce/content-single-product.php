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
                <p>Indulge in the delightful taste of 365 Strawberry Semi-Sweet Wine, a perfect blend of natural strawberry flavors crafted into an exquisite semi-sweet wine. This wine is not only a treat for the palate but also a feast for the eyes, with its beautifully designed, strawberry-shaped bottle that makes it a standout addition to any collection or a unique gift.</p>
                <div class="info-block">
                    <p>Sku: 4850006410091</p>
                    <div class="stars-wrap">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-light fa-star"></i>
                    </div>
                    <div class="price">
                        <p>$15.99</p>
                    </div>
                </div>

                <div class="btn-wrap">
                    <a href="#" class="btn-default btn-medium"><span>Add to cart</span></a>
                    <a href="#" class="like">
                        <i class="fa-light fa-heart"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="tabs tabs-css">
            <ul class="tabs-menu">
                <li class="is-active">Overview</li>
                <li>Reviews</li>
            </ul>

            <div class="tab-content">
                <div class="tab-item">
                    <h6>Key Features:</h6>
                    <ul>
                        <li>Flavor Profile: A luscious semi-sweet taste with the vibrant, juicy essence of fresh strawberries.</li>
                        <li>Packaging: Comes in an eye-catching strawberry-shaped bottle, enclosed in a stylish box, making it ideal for gifting or as a memorable keepsake.</li>
                        <li>Natural Ingredients: Made from 100% natural fruit wine, ensuring a pure and authentic strawberry experience.</li>
                    </ul>
                    <p>Perfect for celebrating special moments or simply enjoying a refreshing drink, 365 Strawberry Semi-Sweet Wine is sure to delight wine enthusiasts and casual drinkers alike.</p>
                </div>
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
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>


	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
