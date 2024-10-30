<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300;400;500;600;700&family=Manrope:wght@200..800&display=swap" rel="stylesheet">
		<?php wp_head();?>
</head>

<body <?php body_class() ?>>

<?php

$idb = get_option('page_for_posts', true);

?>

<header>
    <div class="top-line">
        <div class="content-width">
            <div class="logo-wrap">
                <a href="<?= get_home_url();?>">
                    <?php $logo = get_field('logo', 'options');
                    if($logo):?>
                        <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                    <?php endif;?>
                </a>
            </div>
            <nav class="top-nav">
                <ul>
                    <li>
                        <a href="<?= get_permalink(get_option( 'woocommerce_myaccount_page_id' ));?>"><i class="fa-regular fa-arrow-right-to-arc"></i>
                            <?php if(is_user_logged_in()):?>
                                <?= __('My Account', 'glendaleliquor');?>
                            <?php else:?>
                                <?= __('LogIn', 'glendaleliquor');?>
                            <?php endif;?>
                        </a>
                    </li>
                    <li><a href="<?= get_permalink($idb);?>"><i class="fa-light fa-file-lines"></i><?= get_the_title($idb);?></a></li>
                    <li><a href="<?= get_permalink(get_option( 'woocommerce_myaccount_page_id' ));?>"><i
                                    class="fa-light fa-heart"></i><?= __('Favorites', 'glenadaleliquor');?></a></li>
                    <li><a href="<?= wc_get_cart_url();?>"><i class="fa-light fa-basket-shopping"></i><?= __('Order',
                                'glandeliquor');?> <span class="count-product 1"><?= WC()
                                    ->cart->get_cart_contents_count();?>ва</span></a></li>
                </ul>
                <div class="open-menu">
                    <a href="#">
                        <img src="<?= get_template_directory_uri();?>/img/menu.svg" alt="">
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <nav class="top-menu-wrap">
        <div class="content-width">
            <div class="search-wrap-mob">
                <?= do_shortcode('[fibosearch]'); ?>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'top-menu',
                'walker'  => new Header_Nav_Menu(),
            ]);?>
        </div>
    </nav>
</header>

<div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="top">
        <div class="close-menu">
            <a href="#"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <div class="wrap">
        <div class="logo-wrap">
            <a href="<?= get_home_url();?>">
                <?php $logo = get_field('logo', 'options');
                if($logo):?>
                    <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                <?php endif;?>
            </a>
        </div>
        <nav class="mob-menu-wrap">
            <ul class="mob-nav">
                <li>
                    <a href="<?= get_permalink(get_option( 'woocommerce_myaccount_page_id' ));?>"><i class="fa-regular fa-arrow-right-to-arc"></i>
                        <?php if(is_user_logged_in()):?>
                            <?= __('My Account', 'glendaleliquor');?>
                        <?php else:?>
                            <?= __('LogIn', 'glendaleliquor');?>
                        <?php endif;?>
                    </a>
                </li>
                <li><a href="<?= get_permalink($idb);?>"><i class="fa-light fa-file-lines"></i><?= get_the_title($idb);?></a></li>
                <li><a href="<?= get_permalink(get_option( 'woocommerce_myaccount_page_id' ));?>"><i
                                class="fa-light fa-heart"></i><?= __('Favorites', 'glenadaleliquor');?></a></li>
                <li><a href="<?= wc_get_cart_url();?>"><i class="fa-light fa-basket-shopping"></i><?= __('Order', 'glandeiquor');?> <span class="count-product"><?= WC()->cart->get_cart_contents_count();?></span></a></li>
            </ul>
            <?php wp_nav_menu([
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'mob-menu',
                'walker'  => new Mob_Nav_Menu(),
            ]);?>
        </nav>

    </div>
</div>

<main>