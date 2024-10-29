<?php

/* clear phone number */

function phone_clear($phone_num){
    $phone_num = preg_replace("![^0-9]+!",'',$phone_num);
    return($phone_num);
}

/* pagination markup */

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

    return '
        <div class="pagination-wrap">
            <div class="%1$s">
                %3$s
            </div>
	    </div>
	';
}

/* excerpt */

add_filter( 'excerpt_length', function(){
    return 20;
} );

add_filter( 'excerpt_more', function( $more ) {
    return '...';
} );

add_filter('wpcf7_autop_or_not', '__return_false');

/*  Custom Pagination */

function custom_paged(){

    global $wp_query;
    $pgd = get_query_var('paged');

    if($pgd==0){
        $current_page = $pgd+1;
    }else{
        $current_page = $pgd;
    }
    $pgs = $wp_query->max_num_pages;

    if($pgs>1) {
        echo '<nav class="navigation " role="navigation">
            <div class="nav-links">
                <a class="prev page-numbers" href="' . get_previous_posts_page_link() . '" alt=""><img src="' . get_template_directory_uri() . '/img/chev_p.svg" alt=""></a>
                <span aria-current="page" class="page-numbers current"> ' . $current_page . '</span>
                <span class="pg-sep"> / ' . $pgs . '</span>
                <a class="next page-numbers" href="' . get_next_posts_page_link() . '"><img src="' . get_template_directory_uri() . '/img/chev_p.svg" alt=""></a>
            </div>
        </nav>';
    }
}


add_filter( 'wpcf7_posted_data', 'save_posted_data' );

function save_posted_data( $posted_data ) {
    $form_id = $_POST['_wpcf7'];
    $submission = WPCF7_Submission::get_instance();
    if ($form_id == 376){

        if (get_page_by_title($posted_data['title-review'], OBJECT, 'client')){

            $ids = get_page_by_title($posted_data['title-review'], OBJECT, 'client');

            $my_post = [
                'ID' => $ids->ID,
                'post_content' => $posted_data['textarea-815'],
            ];

            wp_update_post( wp_slash( $my_post ) );

            $name = $posted_data['first-name'] . ' ' . $posted_data['last-name'];

            update_field('name', $name, $ids->ID);
            update_field('sex', $posted_data['sex'], $ids->ID);
            update_field('rating', $posted_data['rating'], $ids->ID);

        }else{

            $args = array(
                'post_type' => 'testimonials',
                'post_status' => 'draft',
                'post_title'=> $posted_data['title-review'] ,
                'post_content'=> $posted_data['textarea-815'] ,
            );

            $post_id = wp_insert_post($args);

            $name = $posted_data['first-name'] . ' ' . $posted_data['last-name'];

            update_field('name', $name, $post_id);

            update_field('rating', $posted_data['rating'], $post_id);

            update_field('sex', $posted_data['sex'], $post_id);

        }
    }

    return $posted_data;
}

