<?php

$types = get_the_terms(get_the_ID(), 'category');

$type = strtolower($types[0]->name);

?>

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
            <a href="<?php the_permalink();?>" class="link"><i class="fa-light fa-location-arrow-up"></i><?= __('Read full', 'glendaleliquor') . ' ' . $type;?></a>
        </div>
    </div>
</div>
