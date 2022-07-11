<div wire:poll="sync_product_data">
    <div class="p-3 bg--section mb-4">
        <div class="col-12">
            @if(isset($latest_bid))
                <div class="product-price last-bid">
                    <div class="price fs-2 text--black">
                        {{ showAmount($latest_bid) }} <span class="text--base">{{ __($general->cur_text) }}</span>
                    </div>
                    <div class="fs-5 fw-bold text-base">
                        @lang('Current Bid')
                        @if($product->latest_bid && auth()->id() === $product->latest_bid->user_id)
                            <span class="text-secondary fw-normal small">@lang('(your bid)')</span>
                        @endif
                    </div>
                </div>
            @else
                <div class="product-price last-bid">
                    <div class="price fs-2 text--black">
                        {{ showAmount($product->price) }} <span class="text--base">{{ __($general->cur_text) }}</span>
                    </div>
                    <div class="fs-5 fw-bold text-base">
                        @lang('Current Bid')
                        @if($product->latest_bid && auth()->id() === $product->latest_bid->user_id)
                            <span class="text-secondary fw-normal small">@lang('(your bid)')</span>
                        @endif
                    </div>
                </div>
            @endif


            @if (Auth::guard('bidder')->check() && $product->status == 1 && $product->started_at < now() && $product->expired_at > now())
                <form wire:submit.prevent="checkData" class="mt-3">
                    <div class="mb-0 text-secondary">@lang('Quick Bid')</div>
                    <div class="mb-2">
                        <button value="{{ $next_bid_price }}" wire:model="next_bid_price" name="quick_amount"
                                class="cmn--btn btn--sm" type="submit" style="padding:2px 10px; font-size: 13px">
                            <i class="las la-gavel me-2"></i> {{ $general->cur_sym }} {{ number_format($next_bid_price, 2, '.', ',') }}
                        </button>
                    </div>

                    <div class="row btn__area mt-4">
                        <div class="col-8">
                            <div class="cart-plus-minus input-group w-100">
                                <span class="input-group-text bg--base border-0 text-white">{{ $general->cur_sym }}</span>
                                <input type="number" wire:model="amount" placeholder="@lang('Enter your amount')"
                                       class="form-control" id="amount" min="0" step="any" style="background-color:#f4f4f4">
                            </div>
                        </div>
                        <div class="col-4 ps-0">
                            <button class="cmn--btn btn--sm bid_now w-100"
                                    type="submit"
                                    style="height:40px"
                                    data-cur_sym="{{ $general->cur_sym }}">@lang('Bid Now')
                            </button>
                        </div>
                        <div>
                            @error('amount')
                            <div class="text--danger empty-message mt-3">{!! $message !!}</div> @enderror
                        </div>


                    </div>
                </form>
            @endif
        </div>
    </div>
    @if(count($bid_history))
        <div class="product-bid-history">
        <div class="mt-5">
            <h5 class="title mb-4">@lang('Bid history')</h5>
            <ul>
                @foreach($bid_history as $bid)
                    <li class="row py-2 m-0"
                        style="border-bottom: 1px solid #e2e2e2f4; opacity:0.{{($loop->iteration-10)*(-1)}}">
                        <div class="fs-5 col-6 ps-0">
                            <i class="las la-gavel"></i> <span
                                class="amount fw-bold">{{ $general->cur_sym }} {{ showAmount($bid->amount) }}</span>
                        </div>
                        <div class="text-secondary small col-6 text-end pe-0">
                            <div
                                title="{{ showDateTime($bid->created_at, 'Y-m-d h:i:s') }}">{{ $bid->created_at->diffForHumans() }}</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</div>
