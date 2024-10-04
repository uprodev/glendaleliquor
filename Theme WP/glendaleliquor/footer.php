</main>

<?php if(is_product() || is_shop() || is_product_category()):?>
    <div class="scroll-up">
        <a href="#"><i class="fa-light fa-chevron-up"></i></a>
    </div>
<?php endif;?>

<?php get_template_part('modals');?>

<footer>
    <div class="join">
        <div class="content-width">
            <div class="title">
                <?php if(get_field('title_join_form', 'options')):?>
                    <h4><?php the_field('title_join_form', 'options');?></h4>
                <?php endif;?>
            </div>
            <div class="form-wrap">
                <?php if(get_field('join_form', 'options')):?>
                    <div class="form-join">
                        <?= do_shortcode('[contact-form-7 id="'.get_field('join_form', 'options').'"]');?>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="content-width">
        <div class="content">
            <div class="item item-1">
                <?php if(get_field('title_footer_contacts', 'options')):?>
                    <h6><?php the_field('title_footer_contacts', 'options');?></h6>
                <?php endif;?>
                <?php if(get_field('contact_footer_items', 'options')):?>
                    <ul class="menu">
                        <?php foreach(get_field('contact_footer_items', 'options') as $item):?>
                            <li><?= $item['item'];?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>

            <div class="item item-2">
                <?php if(get_field('title_footer_menu_1', 'options')):?>
                    <h6><?php the_field('title_footer_menu_1', 'options');?></h6>
                <?php endif;?>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu1',
                    'container' => false,
                    'menu_class' => 'menu',
                ]);?>
            </div>
            <div class="item item-3">
                <?php if(get_field('title_footer_menu_2', 'options')):?>
                    <h6><?php the_field('title_footer_menu_2', 'options');?></h6>
                <?php endif;?>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu2',
                    'container' => false,
                    'menu_class' => 'menu',
                ]);?>
            </div>
            <div class="item item-4">
                <?php if(get_field('title_footer_menu_3', 'options')):?>
                    <h6><?php the_field('title_footer_menu_3', 'options');?></h6>
                <?php endif;?>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu3',
                    'container' => false,
                    'menu_class' => 'menu',
                ]);?>
            </div>
            <div class="item item-5">
                <?php if(get_field('soc_network_title', 'options')):?>
                    <h6><?php the_field('soc_network_title', 'options');?></h6>
                <?php endif;?>
                <?php if(get_field('soc_network', 'options')):?>
                    <ul class="soc">
                        <?php foreach (get_field('soc_network', 'options') as $soc):?>
                            <li>
                                <a href="<?= $soc['url'];?>" target="_blank">
                                    <img src="<?= $soc['icon']['url'];?>" alt="<?= $soc['icon']['alt'];?>">
                                </a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>
            <div class="item item-6">
                <?php if(get_field('payment_methods_title', 'options')):?>
                    <h6><?php the_field('payment_methods_title', 'options');?></h6>
                <?php endif;?>
                <?php if(get_field('payment_methods', 'options')):?>
                    <ul class="pay">
                        <?php foreach( get_field('payment_methods', 'options') as $im ): ?>
                            <li><img src="<?= $im['url'];?>" alt="<?= $im['alt'];?>"></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </div>
        </div>

        <?php if(get_field('copyright', 'options')):?>
            <div class="bottom">
                <p>© <?= get_the_date('Y') . ' ' . get_field('copyright', 'options');?></p>
            </div>
        <?php endif;?>
    </div>
</footer>

  <?php wp_footer(); ?>
	</body>
</html>
