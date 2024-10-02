<?php

$id = get_the_ID();

if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>

<section class="title-item-2x">
    <div class="content-width">
        <div class="title">
            <h2>Why Choose Us</h2>
            <p>At Glendale Liquor, we pride ourselves on offering an extensive selection of spirits and wines. Whether you're looking for rare finds, local favorites, or international brands, we have something to suit <a href="#">every taste and occasion</a>.</p>
        </div>
        <div class="content">
            <div class="item">
                <figure>
                    <img src="img/img-5-1.jpg" alt="">
                </figure>
                <div class="text">
                    <h6>Quality Assurance</h6>
                    <p>We curate our inventory to meet high standards of quality. Our knowledgeable staff is passionate about helping you find the perfect drink for any occasion.</p>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="img/img-5-2.jpg" alt="">
                </figure>
                <div class="text">
                    <h6>Expert Advice</h6>
                    <p>Our experienced team offers personalized recommendations and expert advice to help you discover new favorites and make informed choices.</p>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="img/img-5-3.jpg" alt="">
                </figure>
                <div class="text">
                    <h6>Competitive Pricing</h6>
                    <p>We believe that great quality doesn't have to come with a high price tag. Our competitive pricing ensures that you get the best value for your money without compromising on quality.</p>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img src="img/img-5-4.jpg" alt="">
                </figure>
                <div class="text">
                    <h6>Exceptional Customer Service</h6>
                    <p>Customer satisfaction is our priority. Enjoy friendly, attentive service from the moment you walk through our doors. We're dedicated to making your shopping experience enjoyable and hassle-free.</p>
                </div>
            </div>
        </div>
        <div class="btn-wrap">
            <a href="#" class="btn-default btn-gold  btn-medium"><span>More about us</span></a>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <h2>Reviews</h2>
                <p>See what our customers are saying about us.</p>
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
            <a href="#add-review" class="btn-default btn-medium fancybox"><span>Leave a review</span></a>
        </div>
    </div>
</section>

<section class="item-3x">
    <div class="content-width">
        <div class="title">
            <h2>Drink Recipes</h2>
            <p>Explore our Drink Recipes section for delightful cocktail inspirations crafted to elevate your spirits experience.</p>
        </div>
        <div class="content">
            <div class="item">
                <div class="bg">
                    <img src="img/img-7-1.jpg" alt="">
                </div>
                <div class="wrap">
                    <h4>Sunset Breeze</h4>
                    <div class="hide">
                        <p>A refreshing mix of citrus vodka, pineapple juice, and a splash of grenadine</p>
                        <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>Read full recipe</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg">
                    <img src="img/img-7-2.jpg" alt="">
                </div>
                <div class="wrap">
                    <h4>Midnight Serenade</h4>
                    <div class="hide">
                        <p>A refreshing mix of citrus vodka, pineapple juice, and a splash of grenadine</p>
                        <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>Read full recipe</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="bg">
                    <img src="img/img-7-3.jpg" alt="">
                </div>
                <div class="wrap">
                    <h4>Tropical Twist</h4>
                    <div class="hide">
                        <p>A refreshing mix of citrus vodka, pineapple juice, and a splash of grenadine</p>
                        <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>Read full recipe</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-wrap">
            <a href="#" class="btn-default btn-medium btn-gold"><span>Show all</span></a>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="content-width">
        <div class="text">
            <h2>Find us</h2>
            <div class="item">
                <h6><i class="fa-light fa-clock"></i>Business Hours:</h6>
                <p>Monday - Thursday: 9:00 a.m. - 10:00 p.m.</p>
                <p>Friday - Saturday: 8:00 a.m. - 10:00 p.m.</p>
                <p>Sunday: 9:00 a.m. - 9:00 p.m.</p>
            </div>
            <div class="item">
                <h6><i class="fa-light fa-location-dot"></i>Location:</h6>
                <p>Glendale Liquor <br>
                    1311 E. Colorado St.<br>
                    Glendale, CA 91205
                </p>
            </div>
        </div>
        <div class="map-wrap">
            <div id="map"></div>
        </div>
    </div>
</section>
