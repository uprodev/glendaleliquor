<?php

$title = get_sub_field('title');
$hours_title = get_sub_field('hours_title');
$hours = get_sub_field('hours');
$location_title = get_sub_field('location_title');
$location = get_sub_field('location');

?>

<section class="map-section">
    <div class="content-width">
        <div class="text">
            <?php if($title):?>
                <h2><?= $title;?></h2>
            <?php endif;?>
            <?php if($hours):?>
                <div class="item">
                    <?php if($hours_title):?>
                        <h6><i class="fa-light fa-clock"></i><?= $hours_title;?></h6>
                    <?php endif;?>
                    <?= $hours;?>
                </div>
            <?php endif;?>
            <?php if($location):?>
                <div class="item">
                    <?php if($location_title):?>
                        <h6><i class="fa-light fa-location-dot"></i><?= $location_title;?></h6>
                    <?php endif;?>
                    <p><?= $location;?></p>
                </div>
            <?php endif;?>
        </div>
        <div class="map-wrap">
            <div id="map"></div>
        </div>
    </div>
</section>