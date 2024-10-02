<?php

$text = get_sub_field('text');
$items = get_sub_field('items');
$link = get_sub_field('link');

?>

<section class="title-item-2x">
    <div class="content-width">

        <?php if($text):?>
            <div class="title">
                <?= $text;?>
            </div>
        <?php endif;?>

        <?php if($items):?>
            <div class="content">
                <?php foreach($items as $item):
                    $img = $item['icon'];
                    $title = $item['title'];
                    $text = $item['text'];?>

                    <div class="item">
                        <?php if($img):?>
                            <figure>
                                <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                            </figure>
                        <?php endif;?>
                        <div class="text">
                            <?php if($title):?>
                                <h6><?= $title;?></h6>
                            <?php endif;?>
                            <?php if($text):?>
                                <p><?= $text;?></p>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>

        <?php if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="btn-wrap">
                <a class="btn-default btn-gold btn-medium" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
            </div>
        <?php endif; ?>

    </div>
</section>
