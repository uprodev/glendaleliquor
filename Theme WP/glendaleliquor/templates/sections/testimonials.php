<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$testimonials = get_sub_field('testimonials');
$button_text = get_sub_field('button_text');

?>

<section class="testimonials">
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
                <?php if($subtitle):?>
                    <p><?= $subtitle;?></p>
                <?php endif;?>
            </div>
            <?php if( $testimonials ): ?>
                <div class="nav-wrap">
                    <div class="testimonials-next btn"><i class="fa-regular fa-arrow-right"></i></div>
                    <div class="testimonials-prev btn"><i class="fa-regular fa-arrow-left"></i></div>
                </div>
            <?php endif;?>
        </div>
        <?php if( $testimonials ): ?>
            <div class="slider-wrap">
                <div class="swiper testimonials-slider ">
                    <div class="swiper-wrapper">
                        <?php foreach( $testimonials as $post):
                            setup_postdata($post);

                            get_template_part('parts/review');

                        endforeach; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="btn-wrap">
            <a href="#add-review" class="btn-default btn-medium fancybox"><span><?= $button_text;?></span></a>
        </div>
    </div>
</section>
