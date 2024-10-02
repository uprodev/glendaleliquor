<div class="item">

    <?php if(has_post_thumbnail()):?>
        <div class="bg">
            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
        </div>
    <?php endif;?>

    <div class="wrap">
        <h4><?php the_title();?></h4>
        <div class="hide">
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="link"><i class="fa-light fa-location-arrow-up"></i><?= __('Read full recipe', 'glendaleliquor');?></a>
        </div>
    </div>
</div>
