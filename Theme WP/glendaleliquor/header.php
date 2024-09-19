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

<header>
    <div class="top-line">
        <div class="content-width">
            <div class="logo-wrap">
                <a href="index.html">
                    <img src="img/logo.svg" alt="">
                </a>
            </div>
            <nav class="top-nav">
                <ul>
                    <li><a href="#"><i class="fa-regular fa-arrow-right-to-arc"></i>LogIn</a></li>
                    <li><a href="#"><i class="fa-light fa-file-lines"></i>Blog</a></li>
                    <li><a href="#"><i class="fa-light fa-heart"></i>Favorites</a></li>
                    <li><a href="#"><i class="fa-light fa-basket-shopping"></i>Order <span>10</span></a></li>
                </ul>
                <div class="open-menu">
                    <a href="#">
                        <img src="img/menu.svg" alt="">
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <nav class="top-menu-wrap">
        <div class="content-width">
            <div class="search-wrap-mob">
                <form action="#" class="form-search">
                    <label for="search-mob"></label>
                    <input type="search" name="search" id="search-mob" placeholder="Search">
                    <button class="btn" type="submit"><img src="img/find.svg" alt=""></button>
                </form>
            </div>
            <ul class="top-menu">
                <li>
                    <a href="#"><img src="img/icon-1-1.svg" alt=""><span>Spirits <span>Spirits</span></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Whiskey</a></li>
                        <li><a href="#">Vodka</a></li>
                        <li><a href="#">Rum</a></li>
                        <li><a href="#">Gin</a></li>
                        <li><a href="#">Tequila</a></li>
                        <li><a href="#">Brandy</a></li>
                        <li><a href="#"><b>See all</b></a></li>
                    </ul>
                </li>
                <li><a href="#"><img src="img/icon-1-2.svg" alt=""><span>Wine <span>Wine</span></span></a></li>
                <li><a href="#"><img src="img/icon-1-3.svg" alt=""><span>New arrivals<span>New arrivals</span></span></a></li>
                <li><a href="#"><img src="img/icon-1-4.svg" alt=""><span>Specials <span>Specials</span></span></a></li>
                <li><a href="#"><img src="img/icon-1-5.svg" alt=""><span>Gift sets <span>Gift sets</span></span></a></li>
                <li><a href="#"><img src="img/icon-1-6.svg" alt=""><span>Cocktail ingredients<span>Cocktail ingredients</span></span></a></li>
                <li><a href="#"><img src="img/icon-1-7.svg" alt=""><span>Ready to drink<span>Ready to drink</span></span></a></li>
                <li><a href="#"><img src="img/icon-1-8.svg" alt=""><span>Weddings & events<span>Weddings & events</span></span></a></li>
            </ul>


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
            <a href="index.html">
                <img src="img/logo.svg" alt="">
            </a>
        </div>
        <nav class="mob-menu-wrap">
            <ul class="mob-nav">
                <li><a href="#"><i class="fa-regular fa-arrow-right-to-arc"></i>LogIn</a></li>
                <li><a href="#"><i class="fa-light fa-file-lines"></i>Blog</a></li>
                <li><a href="#"><i class="fa-light fa-heart"></i>Favorites</a></li>
                <li><a href="#"><i class="fa-light fa-basket-shopping"></i>Order <span>10</span></a></li>
            </ul>
            <ul class="mob-menu">
                <li>
                    <a href="#"><img src="img/icon-1-1.svg" alt="">Spirits</a>
                    <ul class="sub-menu">
                        <li><a href="#">Whiskey</a></li>
                        <li><a href="#">Vodka</a></li>
                        <li><a href="#">Rum</a></li>
                        <li><a href="#">Gin</a></li>
                        <li><a href="#">Tequila</a></li>
                        <li><a href="#">Brandy</a></li>
                        <li><a href="#"><b>See all</b></a></li>
                    </ul>
                </li>
                <li><a href="#"><img src="img/icon-1-2.svg" alt="">Wine</a></li>
                <li><a href="#"><img src="img/icon-1-3.svg" alt="">New arrivals</a></li>
                <li><a href="#"><img src="img/icon-1-4.svg" alt="">Specials</a></li>
                <li><a href="#"><img src="img/icon-1-5.svg" alt="">Gift sets</a></li>
                <li><a href="#"><img src="img/icon-1-6.svg" alt="">Cocktail ingredients</a></li>
                <li><a href="#"><img src="img/icon-1-7.svg" alt="">Ready to drink</a></li>
                <li><a href="#"><img src="img/icon-1-8.svg" alt="">Weddings & events</a></li>
            </ul>
        </nav>

    </div>
</div>

<main>