<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<section class="login">
    <div class="content-width">
        <div class="content">
            <div class="left">
                <h1><?= get_field('login_title', 'options')?get_field('login_title', 'options'):__( 'Login', 'woocommerce' );?></h1>
                <?= get_field('login_text', 'options')?'<p>' . get_field('login_text', 'options') . '</p>':'';?>
                <form class="woocommerce-form woocommerce-form-login login default-form" method="post">

                    <?php do_action( 'woocommerce_login_form_start' ); ?>

                    <div class="input-wrap input-wrap-full">
                        <label for="username"><?= __('Email address *', 'glendaleliquor');?></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" required aria-required="true" />
                    </div>
                    <div class="input-wrap input-wrap-full password-checkbox">
                        <label for="password"><?= __('Password *', 'glendaleliquor');?></label>
                        <input class="woocommerce-Input woocommerce-Input--text" type="password" name="password" id="password" autocomplete="current-password" required aria-required="true" />
                        <a href="#"><i class="fa-light fa-eye"></i></a>
                    </div>

                    <?php do_action( 'woocommerce_login_form' ); ?>

                    <div class="input-wrap-submit">
                        <button type="submit" class="btn-medium btn-default woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><span><?php esc_html_e( 'Login', 'woocommerce' ); ?></span></button>
                        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Forgot your password?', 'glendaleliquor' ); ?></a>
                    </div>

                    <?php do_action( 'woocommerce_login_form_end' ); ?>

                </form>
            </div>
            <div class="right right-create">
                <?php the_field('registration_text', 'options');?>
                <div class="btn-wrap">
                    <a href="#" class="btn-default btn-medium create-register"><span><?php esc_html_e( 'Create account', 'woocommerce' ); ?></span></a>
                </div>
            </div>
            <div class="right right-register">
                <h2><?= get_field('registration_title', 'options')?get_field('registration_title', 'options'):__( 'Register', 'woocommerce' );?></h2>

                <form method="post" class="default-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

                    <?php do_action( 'woocommerce_register_form_start' ); ?>

                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                        <div class="input-wrap input-wrap-full">
                            <label for="reg_username"><?php esc_html_e( 'Username *', 'woocommerce' ); ?>&nbsp;</label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" required aria-required="true" /><?php // @codingStandardsIgnoreLine ?>
                        </div>

                    <?php endif; ?>

                    <div class="input-wrap input-wrap-full">
                        <label for="reg_email"><?php esc_html_e( 'Email address *', 'woocommerce' ); ?></label>
                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" required aria-required="true" />
                    </div>

                    <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                        <div class="input-wrap input-wrap-full">
                            <label for="reg_password"><?php esc_html_e( 'Password *', 'woocommerce' ); ?></label>
                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" required aria-required="true" />
                        </div>

                    <?php else : ?>

                        <p><?php esc_html_e( 'A link to set a new password will be sent to your email address.', 'woocommerce' ); ?></p>

                    <?php endif; ?>

                    <?php do_action( 'woocommerce_register_form' ); ?>

                    <p class="woocommerce-form-row form-row">
                        <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                        <button type="submit" class="btn-medium btn-default woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><span><?php esc_html_e( 'Register', 'woocommerce' ); ?></span></button>
                    </p>

                    <?php do_action( 'woocommerce_register_form_end' ); ?>

                </form>
            </div>
        </div>
    </div>
</section>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
