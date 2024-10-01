<?php

$id = get_the_ID();

if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>

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

<section class="products">
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <h2>What's new</h2>
                <p>The best selection of whisky, vodka and liqueur <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View all</a></p>
            </div>
            <div class="nav-wrap">
                <div class="product-next-2 btn"><i class="fa-regular fa-arrow-right"></i></div>
                <div class="product-prev-2 btn"><i class="fa-regular fa-arrow-left"></i></div>
            </div>
        </div>
        <div class="slider-wrap">
            <div class="swiper product-slider product-slider-2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-2-1.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 080432400630</p>
                            <h6><a href="#">The Glenlivet 12 Years Old </a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$38.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-2-2.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">SKU: 088110151058</p>
                            <h6><a href="#">Hennessy VSOP Privilege Cognac 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$53.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-2-3.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">SKU: 674545000322</p>
                            <h6><a href="#">Don Julio 1942 Tequila 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$159.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-2-4.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 080432100783</p>
                            <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$74.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-2-4.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 080432100783</p>
                            <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$74.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-2-4.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 080432100783</p>
                            <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$74.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-2-4.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 080432100783</p>
                            <h6><a href="#">The Glenlivet 15 Year Old French Oak Reserve 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$74.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="link-wrap">
            <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View all</a>
        </div>
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

<section class="products">
    <div class="content-width">
        <div class="title-wrap">
            <div class="title">
                <h2>Top Deals</h2>
                <p>The best selection of whisky, vodka and liqueur <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View all</a></p>
            </div>
            <div class="nav-wrap">
                <div class="product-next-3 btn"><i class="fa-regular fa-arrow-right"></i></div>
                <div class="product-prev-3 btn"><i class="fa-regular fa-arrow-left"></i></div>
            </div>
        </div>
        <div class="slider-wrap">
            <div class="swiper product-slider product-slider-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-4-1.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 096749004744</p>
                            <h6><a href="#">Parker's Heritage Cask Strength 10 Year Old</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$599.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-4-2.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 088004031527</p>
                            <h6><a href="#">Kentucky Straight Bourbon Whiskey</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$2999.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-4-3.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 039383002288</p>
                            <h6><a href="#">Michter'S 10 Years Old Kentucky Straight</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$339.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-4-4.png" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 080432400630</p>
                            <h6><a href="#">Komos XO Tequila Extra Anejo 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$1699.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-4-5.jpeg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <p class="info">Sku: 080432100783</p>
                            <h6><a href="#">Hennessy XO Cognac NBA Limited Edition 750 ML</a></h6>
                            <div class="stars-wrap">
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                                <i class="fa-light fa-star"></i>
                            </div>
                            <p class="price">$229.99</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn-default btn-small"><span>Add to cart</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="link-wrap">
            <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View all</a>
        </div>
    </div>
</section>

<section class="item-3x-bg">
    <div class="bg">
        <img src="img/bg-2.jpg" alt="">
    </div>
    <div class="content-width">
        <div class="content">
            <div class="item">
                <figure>
                    <img src="img/icon-2-1.svg" alt="">
                </figure>
                <h5>Sign Up & Save</h5>
                <p>Register to save and see your orders and receive personalized offers.</p>
                <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>Register</a>
            </div>
            <div class="item">
                <figure>
                    <img src="img/icon-2-2.svg" alt="">
                </figure>
                <h5>Event/Bulk Orders</h5>
                <p>For people who need to place big orders for catering events</p>
                <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View details</a>
            </div>
            <div class="item">
                <figure>
                    <img src="img/icon-2-3.svg" alt="">
                </figure>
                <h5>Click & Collect</h5>
                <p>Ready to pick up from Your chosen store in 30 minutes.</p>
                <a href="#" class="link"><i class="fa-light fa-location-arrow-up"></i>View details</a>
            </div>
        </div>
    </div>
</section>

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
