<?php

$text = get_sub_field('text');
$recipes = get_sub_field('recipes');
$link = get_sub_field('link');

?>

<section class="item-3x">
    <div class="content-width">
        <?php if($text):?>
            <div class="title">
                <?= $text;?>
            </div>
        <?php endif;?>
        <?php if($recipes):?>
            <div class="content">
                <?php foreach( $recipes as $post):
                    setup_postdata($post);

                    get_template_part('parts/recipe');

                endforeach; wp_reset_postdata(); ?>
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
