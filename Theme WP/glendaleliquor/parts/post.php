<div class="item">
    <?php if(has_post_thumbnail()):?>
        <figure>
            <a href="<?php the_permalink();?>">
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
            </a>
        </figure>
    <?php endif;?>

    <div class="text">
        <h6><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
        <?php the_excerpt();?>
        <div class="link-wrap">
            <a href="<?php the_permalink();?>" class="link"><i class="fa-light fa-location-arrow-up"></i><?= __('Read full recipe', 'glendaleliquor');?></a>
        </div>
    </div>
</div>
