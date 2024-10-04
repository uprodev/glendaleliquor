<?php

$heading = get_sub_field('heading');
$images = get_sub_field('images');

?>

<section class="about">
    <div class="content-width">
        <?php if($heading):?>
            <div class="content">
                <?= $heading;?>
            </div>
        <?php endif;?>
        <?php if($images):?>
            <div class="slider-wrap">
                <div class="swiper img-slider">
                    <div class="swiper-wrapper">

                        <?php foreach( $images as $im ): ?>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?= $im['url'];?>" alt="<?= $im['alt'];?>">
                                </figure>
                            </div>
                        <?php endforeach;?>

                    </div>
                    <div class="swiper-pagination img-pagination"></div>
                </div>
            </div>
        <?php endif;?>
    </div>
</section>
