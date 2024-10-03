<?php 

get_header(); 

?>

	<section class="default-text">
		<div class="content-width">
			<ul class="breadcrumb">
				<li><a href="<?= get_home_url();?>>"><?= __('Home', 'glendaleliquor');?></a> <span>/</span></li>
				<li><a href="<?= get_permalink( get_option('page_for_posts', true) ) ?>"><?= get_the_title( get_option('page_for_posts', true) ) ?></a> <span>/</span></li>
				<li><?php the_title();?></li>
			</ul>
			<div class="title">
				<h1><?php the_title();?></h1>
                <?php the_excerpt();?>
				<figure>
                    <?php if(has_post_thumbnail()):?>
					    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    <?php endif;?>
					<figcaption><?= __('Published:', 'glendaleliquor');?> <?php the_time('j F Y'); ?></figcaption>
				</figure>
			</div>
			<div class="content">
				<?php the_content();?>
			</div>

		</div>
	</section>

<?php get_footer();