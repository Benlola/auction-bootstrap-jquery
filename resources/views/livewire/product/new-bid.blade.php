<div class="col-12">
    @if(isset($latest_bid))
        <div class="product-price last-bid" wire:poll="last_bid">
            <div class="price fs-2 text--black">
                {{ showAmount($latest_bid) }} <span class="text--base">{{ __($general->cur_text) }}</span>
            </div>
            <div class="fs-5 fw-bold text-base ">
                @lang('Current Bid')
            </div>
        </div>
    @else
        <div class="product-price mb-3">
            <div class="price">
                {{ showAmount($product->price) }} <span class="text--base">{{ __($general->cur_text) }}</span>
            </div>
        </div>
    @endif



    @if ($product->status == 1 && $product->started_at < now() && $product->expired_at > now())
        <form wire:submit.prevent="checkData">
            <div class="mb-0 text-secondary">@lang('Quick Bid')</div>
            <div class="mb-2">
                <button value="{{ $next_bid_price }}" wire:model="next_bid_price" name="quick_amount" class="cmn--btn btn--sm" type="submit" style="padding:2px 10px; font-size: 13px">
                    <i class="las la-gavel me-2"></i> {{ $general->cur_sym }} {{ number_format($next_bid_price, 2, '.', ',') }}
                </button>
            </div>

            <div class="row btn__area mt-3">
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
                    @error('amount') <div class="text--danger empty-message mt-3">{!! $message !!}</div> @enderror
                </div>


            </div>
        </form>
    @endif
</div>
