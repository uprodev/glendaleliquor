<?php

$id = get_the_ID();

if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>

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
