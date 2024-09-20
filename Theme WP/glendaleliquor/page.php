<?php 

get_header(); 

if(is_cart() || is_checkout() || is_woocommerce() || is_account_page()):
    the_content();
else:
    get_template_part('templates/flexible');
endif;

get_footer();
