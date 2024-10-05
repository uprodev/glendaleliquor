jQuery(document).ready(function ($) {


    /* add_to_cart */

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


    /* remove_from_cart_button */

    $(document).on('click', '.del', function( e ){
        e.preventDefault();
        var key = $(this).attr('data-cart_item_key');

        if ( $( '.woocommerce-cart-form' ).length ||  $( '.woocommerce-checkout' ).length) {
            $(this).closest('li').remove();
        }

        $(this).closest('.item-row').remove();
        $.ajax({
            type: 'get',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'remove_from_cart',
                key: key
            },

            success: function (data) {

                $(document.body).trigger('wc_update_cart');
                $(document.body ).trigger( 'wc_fragment_refresh' );
                $(document.body).trigger('update_checkout');

                //   if (data.count === 0) location.href = '/shop';

            }
        })

    })


    /* change qty product */

    $(document).on('click', '.btn-count-plus', function () {
        let counter = $(this).closest('.input-number');
        let quantity = counter.find('.qty');
        let value = parseInt(quantity.val());

        quantity.val(value + 1);

    });

    $(document).on('click', '.btn-count-minus', function () {
        let counter = $(this).closest('.input-number');
        let quantity = counter.find('.qty');
        let value = parseInt(quantity.val());
        
        if (value > 0) {
            quantity.val(value - 1);
        }

    });


    $(document).on('click', '.btn-count-plus, .btn-count-minus', function(){

        let that = $(this)
        setTimeout(function(){

            let item_quantity = that.closest('.input-number').find('.qty').val();

            let key = that.closest('.input-number').attr('data-key');

            let currentVal = parseFloat(item_quantity);


            $.ajax({
                type: 'GET',
                url: wc_add_to_cart_params.ajax_url,
                data: {
                    action: 'qty_cart',
                    hash: key,
                    quantity: currentVal,
                },
                success: function (data) {
                    $(document.body).trigger('wc_update_cart');
                    $(document.body).trigger('update_checkout');
                    $( document.body ).trigger( 'wc_fragment_refresh' );
                },
            });
        }, 100)
    })

});