<?php

get_header();

$idb = get_option('page_for_posts', true);
$idt = get_queried_object_id();

if(is_home()){
    $title = get_the_title($idb);
    $excp = get_field('description', $idb);
}else{
    $title = get_queried_object()->name;
    $excp = get_queried_object()->description;
}

$cats = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => false,
    'exclude' => 1,
]);

?>

    <section class="blog">
        <div class="content-width">
            <div class="title">
                <h1><?= $title;?></h1>
                <?php if($excp):?>
                    <p><?= $excp;?></p>
                <?php endif;?>
                <?php if($cats):?>
                    <form action="#" class="form-blog">
                        <div class="wrap">
                            <?php foreach($cats as $cat):?>
                                <div class="input-wrap">
                                    <input type="checkbox" name="select" id="select-<?= $cat->term_id;?>" <?= $cat->term_id==$idt?'checked':'';?>>
                                    <label for="select-<?= $cat->term_id;?>"><?= $cat->name;?></label>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </form>
                <?php endif;?>
            </div>
            <div class="content">

                <?php if(have_posts()):

                    while(have_posts()): the_post();

                        get_template_part('parts/post');

                    endwhile;

                endif;?>

            </div>
                <?php $args = array(
                    'type'         => 'list',
                    'show_all'     => false,
                    'end_size'     => 1,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => '<i class="fa-regular fa-chevron-left"></i>Back',
                    'next_text'    => 'Next<i class="fa-regular fa-chevron-right"></i>',
                    'add_args'     => false,
                    'screen_reader_text' => '',
                    'class'        => 'pagination',
                );

                the_posts_pagination( $args );

                ?>
        </div>
    </section>

<?php get_footer();
