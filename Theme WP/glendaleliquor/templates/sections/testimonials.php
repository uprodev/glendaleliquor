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
            <div class="nav-wrap">
                <div class="testimonials-next btn"><i class="fa-regular fa-arrow-right"></i></div>
                <div class="testimonials-prev btn"><i class="fa-regular fa-arrow-left"></i></div>
            </div>
        </div>
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
        <div class="btn-wrap">
            <a href="#add-review" class="btn-default btn-medium fancybox"><span><?= $button_text;?></span></a>
        </div>
    </div>
</section>
