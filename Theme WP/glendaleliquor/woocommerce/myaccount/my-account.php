<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="cabinet">
    <div class="content-width">
        <div class="content tabs-cabinet">
            <div class="cabinet-menu-wrap">
                <h4>Hi <?= $current_user->display_name;?></h4>
                <?php  do_action( 'woocommerce_account_navigation' ); ?>
            </div>

            <div class="cabinet-content">
                <div class="cabinet-item cabinet-item-1">
                    <?php
                    /**
                     * My Account content.
                     *
                     * @since 2.6.0
                     */
                    do_action( 'woocommerce_account_content' );
                    ?>
                </div>
                <div class="cabinet-item cabinet-item-2">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa-light fa-chevron-left"></i>Orders</a></li>
                    </ul>
                    <h2>Your Orders</h2>
                    <p>View and edit all your pending, delivered orders here.</p>
                    <h6>In process</h6>
                    <div class="order">
                        <div class="order-row order-row-head">
                            <div class="data data-1">
                                <h6>Order #030405</h6>
                            </div>
                            <div class="data data-2">
                                <p>Placed: Thu. 17th June 2024</p>
                                <a href="#" class="loc btn-default btn-small"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>
                            </div>
                        </div>
                        <div class="order-row order-row-data">
                            <div class="data data-1">
                                <figure>
                                    <a href="#">
                                        <img src="img/img-12.png" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="data data-2">
                                <div class="item item-1">
                                    <h6><a href="#">365 Gevorkian <br>Strawberry Wine 750 ML</a></h6>
                                    <p>Gift Wrapping</p>
                                    <p><a href="#">Gift bag</a></p>
                                </div>
                                <div class="item item-2">
                                    <p>Status</p>
                                    <p class="color">In - Transit</p>
                                </div>
                                <div class="item item-3">
                                    <h6>Delivery Expected by:</h6>
                                    <h5>24 June 2024</h5>
                                    <p>Penn Valley</p>
                                    <p>California 95946, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="order-row order-bottom-row-mob">
                            <div class="data data-1">
                                <p>Paid using card ending with 3790</p>
                            </div>
                            <div class="data data-2">
                                <h6>Total: $53.99</h6>
                            </div>
                        </div>
                        <div class="order-row order-bottom-row">
                            <div class="data data-1">
                                <a href="#"><i class="fa-light fa-circle-xmark"></i>Cancel order</a>
                            </div>
                            <div class="data data-2">
                                <p>Paid using card ending with 3790</p>
                                <h6>Total: <span>$15.00</span></h6>
                                <a href="#" class="loc btn-default btn-small mob"><span><i class="fa-regular fa-location-crosshairs"></i>Track order</span></a>
                            </div>
                        </div>
                    </div>

                    <h6>Previous</h6>
                    <div class="order order-complete">
                        <div class="order-row order-row-head">
                            <div class="data data-1">
                                <h6>Order #026784</h6>
                            </div>
                            <div class="data data-2">
                                <p>Placed: Thu. 29th May 2024</p>

                            </div>
                        </div>
                        <div class="order-row order-row-data">
                            <div class="data data-1">
                                <figure>
                                    <a href="#">
                                        <img src="img/img-13.png" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="data data-2">
                                <div class="item item-1">
                                    <h6><a href="#">Hennessy VSOP Privilege Cognac 750 ML</a></h6>
                                    <p>Gift Wrapping</p>
                                    <p><a href="#">No Wrapping</a></p>
                                </div>
                                <div class="item item-2">
                                    <p>Status</p>
                                    <p class="color green">Delivered</p>
                                </div>
                                <div class="item item-3">
                                    <h6>Delivery Expected by:</h6>
                                    <h5>30 May 2024</h5>
                                    <p>Penn Valley</p>
                                    <p>California 95946, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="order-row order-bottom-row-mob">
                            <div class="data data-1">
                                <p>Paid using card ending with 3790</p>
                            </div>
                            <div class="data data-2">
                                <h6>Total: $53.99</h6>
                            </div>
                        </div>
                        <div class="order-row order-bottom-row">
                            <div class="data data-1">
                                <a href="#" class="btn-default btn-small btn-gold"><span><i class="fa-light fa-rotate"></i>Order again</span></a>
                            </div>
                            <div class="data data-2">
                                <p>Paid using card ending with 3790</p>
                                <h6>Total: <span>$53.99</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cabinet-item cabinet-item-3">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa-light fa-chevron-left"></i>Addresses</a></li>
                    </ul>
                    <h2>Addresses</h2>
                    <p>You  have added your addresses</p>
                    <div class="btn-add-wrap">
                        <a href="#add" class="fancybox"><img src="img/icon-11.svg" alt=""></a>
                    </div>
                    <div class="address-wrap">
                        <div class="address-item">
                            <div class="wrap">
                                <p>example@gmail.com</p>
                                <p class="label-p">Address</p>
                                <p>dfsdfsf</p>
                                <p class="label-p">Apartment number</p>
                                <p>45</p>
                                <p class="label-p">City</p>
                                <p>dfsdfsf</p>
                                <p class="label-p">Post code</p>
                                <p>dfsdfsf</p>
                                <p class="label-p">Phone</p>
                                <p>dfsdfsf</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="#address" class="edit fancybox"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                                <a href="#" class="del "><i class="fa-light fa-trash"></i>Delete</a>
                            </div>
                        </div>
                        <div class="address-item">
                            <div class="wrap">
                                <p>example@gmail.com</p>
                                <p class="label-p">Address</p>
                                <p>dfsdfsf</p>
                                <p class="label-p">Apartment number</p>
                                <p>45</p>
                                <p class="label-p">City</p>
                                <p>dfsdfsf</p>
                                <p class="label-p">Post code</p>
                                <p>dfsdfsf</p>
                                <p class="label-p">Phone</p>
                                <p>dfsdfsf</p>
                            </div>
                            <div class="btn-wrap">
                                <a href="#address" class="edit fancybox"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
                                <a href="#" class="del"><i class="fa-light fa-trash"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cabinet-item cabinet-item-4">
                    <div class="account-setting-wrap">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fa-light fa-chevron-left"></i>Account Settings</a></li>
                        </ul>
                        <h2>Account Settings</h2>
                        <p>Manage your account settings</p>
                        <form action="#" class="default-form ">
                            <div class="input-wrap">
                                <label for="name">First name *</label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="input-wrap">
                                <label for="last-name">Last name *</label>
                                <input type="text" name="last-name" id="last-name" required>
                            </div>
                            <div class="input-wrap input-wrap-full">
                                <label for="company">Company name (optional)</label>
                                <input type="text" name="company" id="company">
                            </div>
                            <div class="input-wrap input-wrap-full">
                                <label for="tel">Phone *</label>
                                <input type="text" name="tel" id="tel" required class="tel">
                            </div>
                            <div class="input-wrap input-wrap-full">
                                <label for="email">Email address *</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="input-wrap input-wrap-full password-checkbox">
                                <label for="password">Password *</label>
                                <input type="password" name="password" id="password" required>
                                <a href="#"><i class="fa-light fa-eye"></i></a>
                            </div>
                            <div class="input-wrap-submit">
                                <button type="submit" class="btn-default btn-small btn-gold"><span>Update details</span></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>