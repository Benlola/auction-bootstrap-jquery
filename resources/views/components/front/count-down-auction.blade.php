<div class="current_product_countdown_area countdown-area mb-4 @if($last_minutes) last-minutes @endif"
     style="box-shadow: 0 0 13px #214ab036;">
    {!! $product_expire !!}

    @push('script')
        <script type="text/javascript">
            let sentToServer = false;

            let current_countdown_el = document.querySelector('.current_product_countdown_area');
            let countDownCurrentProduct = document.getElementById('countdown_current_product');

            function getTimeRemaining(endTime, startTime) {// = new Date()
                const total = Date.parse(endTime) - Date.parse(new Date());
                const seconds = Math.floor((total / 1000) % 60);
                const minutes = Math.floor((total / 1000 / 60) % 60);
                const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
                const days = Math.floor(total / (1000 * 60 * 60 * 24));

                return {
                    total,
                    days,
                    hours,
                    minutes,
                    seconds
                };
            }

            function initializeClock(id) {//, endTime, startTime
                const clock = document.getElementById(id);
                const daysSpan = clock.querySelector('.days');
                const hoursSpan = clock.querySelector('.hours');
                const minutesSpan = clock.querySelector('.minutes');
                const secondsSpan = clock.querySelector('.seconds');

                // 15 * 24 * 60 * 60 * 1000
                //  d    m    s    ms
                function updateClock() {
                    let date = countDownCurrentProduct.getAttribute('data-date');
                    //let date_server = countDownCurrentProduct.getAttribute('data-server');
                    let endTime = countDownCurrentProduct.getAttribute('data-date');
                    //let serverTime = new Date(Date.parse(date_server));
                    const t = getTimeRemaining(endTime);
                    daysSpan.innerHTML = t.days + 'd';
                    hoursSpan.innerHTML = ('0' + t.hours).slice(-2) + 'h';
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2) + 'm';
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2) + 's';

                    if (t.total <= {{ (int) config('auction.increase_expiration_on_new_bid') }} * 60 * 1000) { //last 2 minutes
                        current_countdown_el.classList.add('last-minutes');

                            /*
                            //Echo.channel('product.new-bid.{ { $product->id }}').emit('NewBid');
                            //Echo.postMessage('')
                            if(!sentToServer){
                                axios.get('{ { route('product.update.expiration', ['id' => $product->id]) }}')
                                    .then(response => {
                                        console.info('response.data: '+response.data);
                                        sentToServer = true;
                                        //callback(false, response.data);
                                    })
                                    .catch(error => {
                                        console.error(error);
                                        //callback(true, error);
                                    });
                            }
                            //Echo.channel('product.new-bid.{ { $product->id }}').trigger('NewBid', '{ { $product->id }}');
                            //window.Echo.channel().socket.emit('UpdateBid')

                            */
                    }else{
                        current_countdown_el.classList.remove('last-minutes');
                        /*
                        [].map.call(current_countdown_el, function (element) {
                            element.classList.remove('last_minutes');
                        });
                        */
                    }
                    if (t.total <= 0) {
                        clearInterval(timeInterval);
                        current_countdown_el.innerHTML =
                            '<div class="text-center fs-4 text--base fw-bold">' +
                            '<span class="finished-bid">@lang('Product Sold!')</span>' +
                            '</div>';
                        document.querySelector('.add-bid-form').remove();
                    }
                }

                updateClock();
                const timeInterval = setInterval(updateClock, 1000);
            }

            window.addEventListener('load', function () {
                function initProductCounter() {

                    if (countDownCurrentProduct != null) {
                        let product_id = countDownCurrentProduct.getAttribute('data-product_id');

                        //console.log('started counter for product ' + product_id + ' => ' + date);
                        //const endAuctionProduct = new Date(Date.parse(date));
                        //const serverTime = new Date(Date.parse(date_server));
                        initializeClock('countdown_current_product');
                    }
                }

                initProductCounter();
            });

        </script>
    @endpush
</div>
