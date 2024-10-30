<?php

$title = get_sub_field('title');
$cats = get_sub_field('product_categories');

?>

<section class="shop">
    <div class="bg">
        <img src="<?= get_template_directory_uri();?>/img/after-1-1.png" alt="" class="img img-1">
        <img src="<?= get_template_directory_uri();?>/img/after-1-2.png" alt="" class="img img-2">
    </div>
    <div class="content-width">
        <?php if($title):?>
            <h2><?= $title;?></h2>
        <?php endif;?>
        <div class="search-wrap">
            <?= do_shortcode('[fibosearch]'); ?>
        </div>
        <?php if($cats):?>
            <div class="slider-wrap">
                <div class="swiper product-category-slider product-category-slider-1">
                    <div class="swiper-wrapper">
                        <?php foreach ($cats as $cat):
                        $term = get_term($cat);
                        $thumbnail_id = get_term_meta( $cat, 'thumbnail_id', true );
                        $image_url = wp_get_attachment_url( $thumbnail_id );
                        $hover = get_field('hover_image', 'product_cat_'.$cat);
                        ?>
                            <div class="swiper-slide">
                                <a href="<?= get_term_link($cat);?>">
                                    <figure>
                                        <?php if($image_url):?>
                                            <img src="<?= $image_url;?>" alt="<?= $term->name;?>" class="img-1">
                                        <?php endif;?>
                                        <?php if($hover):?>
                                            <img src="<?= $hover;?>" alt="<?= $term->name;?>" class="img-2">
                                        <?php endif;?>
                                    </figure>
                                    <p><?= $term->name;?></p>
                                </a>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="swiper-pagination product-category-pagination-1"></div>
                </div>
                <div class="swiper product-category-slider product-category-slider-2">
                    <div class="swiper-wrapper">
                        <?php
                        $chunk_size = 4;
                        $count = 0;
                        $total_items = count($cats);

                        foreach ($cats as $cat):
                            $term = get_term($cat);
                            $thumbnail_id = get_term_meta( $cat, 'thumbnail_id', true );
                            $image_url = wp_get_attachment_url( $thumbnail_id );
                            $hover = get_field('hover_image', 'product_cat_'.$cat);

                            if ($count % $chunk_size === 0) {
                                echo '<div class="swiper-slide">';
                            }
                            ?>

                                <a href="<?= get_term_link($cat);?>">
                                    <figure>
                                        <?php if($image_url):?>
                                            <img src="<?= $image_url;?>" alt="<?= $term->name;?>" class="img-1">
                                        <?php endif;?>
                                        <?php if($hover):?>
                                            <img src="<?= $hover;?>" alt="<?= $term->name;?>" class="img-2">
                                        <?php endif;?>
                                    </figure>
                                    <p><?= $term->name;?></p>
                                </a>
                            <?php $count++;
                            if ($count % $chunk_size === 0 || $count === $total_items) {
                                echo '</div>';
                            }?>
                        <?php endforeach;?>
                    </div>
                    <div class="swiper-pagination product-category-pagination-2"></div>
                </div>
            </div>
        <?php endif;?>
    </div>
</section>
