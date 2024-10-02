<?php

$rating = get_field('rating');
$name = get_field('name');
$verifed_purchase = get_field('verifed_purchase');

?>

<div class="swiper-slide">
    <h6><?php the_title();?></h6>
    <?php the_content();?>
    <div class="wrap">
        <div class="stars-wrap">
            <?php for( $i = 1; $i <= $rating; $i++ ):?>
                <i class="fa-solid fa-star"></i>
            <?php endfor;?>
            <?php for( $i = 1; $i <= (5 - $rating); $i++ ):?>
                <i class="fa-light fa-star"></i>
            <?php endfor;?>
        </div>
        <div class="user">
            <div class="img">
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                <?php else:?>
                    <img src="<?= get_template_directory_uri();?>/img/img-6-1.jpg" alt="<?php the_title();?>">
                <?php endif;?>
            </div>
            <div class="text">
                <?php if($name):?>
                    <p class="name"><?= $name;?> </p>
                <?php endif;?>
                <?php if($verifed_purchase):?>
                    <p><i class="fa-regular fa-circle-check"></i> <?= __('verifed  purchase', 'glendaleliquor');?></p>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>