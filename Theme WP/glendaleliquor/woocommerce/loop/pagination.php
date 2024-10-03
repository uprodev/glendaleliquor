<?php
/**
 * Pagination - Show numbered pagination for catalog pages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/pagination.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$total   = isset( $total ) ? $total : wc_get_loop_prop( 'total_pages' );
$current = isset( $current ) ? $current : wc_get_loop_prop( 'current_page' );
$base    = isset( $base ) ? $base : esc_url_raw( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) );
$format  = isset( $format ) ? $format : '';

if ( $total <= 1 ) {
	return;
}

    $pagination_args = apply_filters('woocommerce_pagination_args', array(
        'base'      => $base,
        'format'    => $format,
        'add_args'  => false,
        'current'   => max( 1, $current ),
        'total'     => $total,
        'prev_text' => '<i class="fa-regular fa-chevron-left"></i>Back</a>',
        'next_text' => 'Next<i class="fa-regular fa-chevron-right"></i>',
        'type'      => 'array',
        'end_size'  => 3,
        'mid_size'  => 3,
    ));

    $pages = paginate_links($pagination_args);

    if ($pages) {
        echo '<div class="pagination-wrap"><ul class="pagination">';

        foreach ($pages as $page) {
            // Проверяем, является ли эта страница текущей
            if (strpos($page, 'current') !== false) {
                // Извлекаем просто номер страницы из тега
                preg_match('/>([0-9]+)<\/span>/', $page, $matches);
                if (isset($matches[1])) {
                    echo '<li class="is-active">' . $matches[1] . '</li>'; // Выводим просто цифру без обертки
                }
            } else {
                echo '<li>' . $page . '</li>';
            }
        }
        echo '</ul></div>';
    }
