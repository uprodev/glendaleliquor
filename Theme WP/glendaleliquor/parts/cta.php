<?php

$item_1 = get_field('item_1', 'options');
$item_2 = get_field('item_2', 'options');

$bg = $item_1['background'];
$subtitle = $item_1['subtitle'];
$title = $item_1['title'];
$link = $item_1['link'];
$price = $item_1['price'];

$bg2 = $item_2['background'];
$subtitle2 = $item_2['subtitle'];
$title2 = $item_2['title'];
$link2 = $item_2['link'];
$price2 = $item_2['price'];

?>

<section class="item-2x">
    <div class="content-width">
        <div class="item item-1">
            <?php if($bg):?>
                <div class="bg">
                    <img src="<?= $bg;?>" alt="">
                </div>
            <?php endif;?>
            <div class="wrap">
                <div class="text">
                    <?php if($title):?>
                        <h3><?= $title;?></h3>
                    <?php endif;?>
                    <?php if($subtitle):?>
                        <p><?= $subtitle;?></p>
                    <?php endif;?>
                    <?php if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="link-wrap">
                            <a class="link" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><i class="fa-light fa-location-arrow-up"></i><?= esc_html($link_title); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if($price):?>
                    <div class="label">
                        <p><?= $price;?></p>
                    </div>
                <?php endif;?>
            </div>
        </div>
        <div class="item item-2">
            <?php if($bg2):?>
                <div class="bg">
                    <img src="<?= $bg2['url'];?>" alt="<?= $bg2['alt'];?>">
                </div>
            <?php endif;?>
            <div class="wrap">
                <div class="text">
                    <?php if($title2):?>
                        <h3><?= $title2;?></h3>
                    <?php endif;?>
                    <?php if($subtitle2):?>
                        <p><?= $subtitle2;?></p>
                    <?php endif;?>
                    <?php if( $link2 ):
                        $link2_url = $link2['url'];
                        $link2_title = $link2['title'];
                        $link2_target = $link2['target'] ? $link2['target'] : '_self';
                        ?>
                        <div class="link-wrap">
                            <a class="link" href="<?= esc_url($link2_url); ?>" target="<?= esc_attr($link2_target); ?>"><i class="fa-light fa-location-arrow-up"></i><?= esc_html($link2_title); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if($price2):?>
                        <div class="label">
                            <p><?= $price2;?></p>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
