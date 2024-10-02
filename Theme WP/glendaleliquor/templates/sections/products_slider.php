<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$link = get_sub_field('link');
$product_category = get_sub_field('product_category');

?>

<section class="products">
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
                <?php if($subtitle || $link):?>
                    <p>
                        <?= $subtitle;?>
                        <?php if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="link" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><i class="fa-light fa-location-arrow-up"></i><?= esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </p>
                <?php endif;?>
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
                        'posts_per_page' => 7,
                        'tax_query' => [
                            [
                                'taxonomy' => 'product_cat',
                                'field' => 'id',
                                'terms' => $product_category,
                            ]
                        ],
                    ]);

                    while ($new->have_posts()):$new->the_post();

                        wc_get_template_part( 'content', 'product-slide' );

                    endwhile; wp_reset_postdata();?>

                </div>
            </div>
        </div>
        <?php if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="link-wrap">
                <a class="link" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                    <i class="fa-light fa-location-arrow-up"></i><?= esc_html($link_title); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
