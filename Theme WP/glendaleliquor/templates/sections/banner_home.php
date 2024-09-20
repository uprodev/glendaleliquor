<?php

$slider = get_sub_field('slider');

if($slider): ?>

    <section class="home-banner">
        <div class="slider-wrap">
            <div class="swiper home-banner-slider">
                <div class="swiper-wrapper">

                    <?php foreach ($slider as $sli):
                        $bg = $sli['background'];
                        $img = $sli['image'];
                        $title = $sli['title'];
                        $subtitle = $sli['subtitle'];
                        $link = $sli['link'];
                        $note = $sli['note'];?>

                        <div class="swiper-slide">
                            <?php if($bg){ ?>
                                <div class="bg">
                                    <img src="<?= $bg['url'];?>" alt="<?= $bg['alt'];?>">
                                </div>
                            <?php }?>

                            <div class="content-width">
                                <div class="content">
                                    <?php if($img){ ?>
                                        <figure>
                                            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>">
                                        </figure>
                                    <?php }?>
                                    <div class="text">
                                        <h2 class="wrap">
                                            <?php if($title){ ?>
                                                <h2><?= $title;?></h2>
                                            <?php }

                                            if($subtitle){ ?>
                                                <h6><?= $subtitle;?></h6>
                                            <?php }

                                            if( $link ):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <div class="btn-wrap">
                                                    <a class="btn-default" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"><span><?= esc_html($link_title); ?></span></a>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($note){ ?>
                                                <p><?= $note;?></p>
                                            <?php }?>

                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach;?>
                </div>
                <div class="swiper-pagination home-pagination"></div>
            </div>
        </div>
    </section>

<?php endif;