<?php

$steps = get_field('steps');
$bg = get_sub_field('background');


?>

<section class="item-3x-bg">
    <?php if($bg):?>
        <div class="bg">
            <img src="<?= $bg['url'];?>" alt="<?= $bg['alt'];?>">
        </div>
    <?php endif;?>
    <?php if($steps):?>
        <div class="content-width">
            <div class="content">
                <?php foreach($steps as $step):
                    $img = $step['icon'];
                    $title = $step['title'];
                    $subtitle = $step['subtitle'];
                    $link = $step['link'];
                ?>
                    <div class="item">
                        <?php if($img):?>
                            <figure>
                                <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                            </figure>
                        <?php endif;?>
                        <?php if($title):?>
                            <h5><?= $title;?></h5>
                        <?php endif;?>
                        <?php if($subtitle):?>
                            <p><?= $subtitle;?></p>
                        <?php endif;?>
                        <?php if( $link ):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="link" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><i class="fa-light fa-location-arrow-up"></i><?= esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    <?php endif;?>
</section>
