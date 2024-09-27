jQuery(document).ready(function ($) {

    /**
     * add_to_cart
     */


    $(document).on('click', '.add-cart', function (e) {

        e.preventDefault();

        let product_id = $(this).attr('data-product_id');
        let qty = 1;
        let text = $(this).find('span').attr('data-txt');

        let that = $(this);


        $.ajax({

            url: globals.url,
            data: {
                action: 'add_to_cart',
                product_id: product_id,
                qty: qty
            },
            success: function (data) {

                that.find('span').text(text);

                $( document.body ).trigger( 'wc_fragment_refresh' );
                $( document.body ).trigger('wc_update_cart');

            }
        });
    })

});