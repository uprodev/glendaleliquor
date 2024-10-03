<?php 

get_header(); 

if(is_cart() || is_checkout() || is_woocommerce() || is_account_page()):
    the_content();
else:?>

    <section class="default-text pp-text">
        <div class="content-width">
            <h1><?php the_title();?></h1>
            <div class="content">

                <?php the_content();?>

            </div>

        </div>
    </section>

<?php endif;

get_footer();
