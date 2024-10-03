<?php

function add_points_widget_to_fragment( $fragments ) {

    $fragments['.count-product'] =  '<span class="count-product">'.  WC()->cart->get_cart_contents_count() . '</span>';



    ob_start();
    woocommerce_mini_cart();
    $fragments['.side-basket__container'] = ob_get_clean();

    return $fragments;
}
add_filter('add_to_cart_fragments', 'add_points_widget_to_fragment');

add_filter('paginate_links_output', 'custom_paginate_links_class');
function custom_paginate_links_class($output) {
    // Меняем класс ul.page-numbers на ваш собственный
    $output = str_replace('<ul class="page-numbers">', '<ul class="pagination">', $output);
    return $output;
}
