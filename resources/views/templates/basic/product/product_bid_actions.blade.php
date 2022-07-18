@push('style')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endpush

@push('script')
    <script>
        (function ($) {
            "use strict";
            let pid = '{{ $product->id }}';
            loadData(pid);

            function loadData(pid, url="{{ route('product.review.load') }}") {
                $.ajax({
                    url: url,
                    method: "GET",
                    data: { pid: pid },
                    success: function (data) {
                        $('#load_more_button').remove();
                        $('.review-area').append(data);
                    }
                });
            }

            $(document).on('click', '#load_more_button', function () {
                let id  = $(this).data('id');
                let url = $(this).data('url');
                $('#load_more_button').html(`<b>{{ __('Loading') }} <i class="fa fa-spinner fa-spin"></i> </b>`);
                loadData(pid, url);
            });

            $('.empty-message').hide();
            {{--$('.bid_now').on('click', function () {--}}
            {{--    var modal = $('#bidModal');--}}
            {{--    var cur_sym = $(this).data('cur_sym');--}}
            {{--    var amount = $('#amount').val();--}}
            {{--    modal.find('.message').html('@lang("Are you sure to bid on this product?")');--}}
            {{--    if(!amount){--}}
            {{--        modal.find('.message').html('@lang("Please enter an amount to bid")');--}}
            {{--        $('.empty-message').show();--}}
            {{--    }else{--}}
            {{--        $('.empty-message').hide();--}}
            {{--        modal.find('.amount').val(amount);--}}
            {{--        modal.modal('show');--}}
            {{--    }--}}
            {{--});--}}
        })(jQuery);

        Echo.channel('channel.product.new-bid.{{ $product->id }}')
            .listen('NewBid', (e) => {
                let curr_usr_id = {{ auth()->id()??0 }};
                let current_bid_amount_text = '{{ __( 'Current Bid' ) }}';
                console.log(e.current_bid_usr_id + '===' + curr_usr_id);
                if(e.current_bid_usr_id === curr_usr_id){
                    current_bid_amount_text += '<span class="text-secondary fw-normal small" >{{ __( '(your bid)' ) }}</span>';
                }

                document.querySelector('.product-single-sidebar .product-price .amount').innerHTML = e.current_bid_amount;
                document.querySelector('.product-single-sidebar .product-price .amount-text').innerHTML = current_bid_amount_text;
                document.querySelector('.product-single-sidebar .quick_amount').innerHTML = e.next_bid_amount_text;
                document.querySelector('.product-single-sidebar .quick_amount').setAttribute('value', e.next_bid_amount);
                document.querySelector('#countdown_current_product').setAttribute('data-date',e.expired_at);
                //current_product_countdown_area countdown-area mb-4 bg--section last_minute last_minutes
                console.log(e);
/*
                jQuery('.countdown').each(function () {
                    //debugger;
                    let date = jQuery(this).data('date');
                    console.log('Main started counter => '. date);
                    jQuery(this).countdown({
                        date: date,
                        offset: +6,
                        day: 'Day',
                        days: 'Days'
                    });
                });
                */
            })

        Echo.channel('product.bid-history.{{ $product->id }}')
            .listen('BidHistory', (e) => {
                document.querySelector('.product-bid-history ul').innerHTML = e.history;
                console.log('Listen Bid History => ');
                console.log(e);
            })
/*
        Echo.channel('product.{ { $product->id }}.expiration.update')
            .listen('UpdateProductExpiration', (e) => {
                //console.log('logger update product expiration');
                debugger;
                //document.querySelector('.product-price.last-bid .price').innerHTML = e.current_bid_amount;
                console.log('UpdateProductExpiration => '+e);//.current_bid_amount
            })
        */

    </script>
@endpush
