<div>
    @if(isset($latest_bid))
        <div class="product-price last-bid" wire:poll="last_bid">
            <div class="">@lang('Current bid'):
                {{ showAmount($latest_bid) }} <span class="text--base">{{ __($general->cur_text) }}</span>
            </div>
        </div>
    @else
        <div class="product-price mb-3">
            <div>
                {{ showAmount($product->price) }} <span class="text--base">{{ __($general->cur_text) }}</span>
            </div>
        </div>
    @endif



    @if ($product->status == 1 && $product->started_at < now() && $product->expired_at > now())
        <form wire:submit.prevent="checkData">
            <div class="mb-2">Quick bid</div>
            <div class="mb-2">
                <button value="{{ $next_bid_price }}" wire:model="next_bid_price" name="quick_amount" class="cmn--btn btn--sm" type="submit">
                    {{ $general->cur_sym }} {{ number_format($next_bid_price, 2, '.', '.') }}
                </button>
            </div>

            <div class="btn__area">
                <div class="cart-plus-minus input-group w-auto">
                    <span class="input-group-text bg--base border-0 text-white">{{ $general->cur_sym }}</span>
                    <input type="number" wire:model="amount" placeholder="@lang('Enter your amount')"
                           class="form-control" id="amount" min="0" step="any">
                </div>
                <div>
                    <button class="cmn--btn btn--sm bid_now" type="submit"
                            data-cur_sym="{{ $general->cur_sym }}">@lang('Bid Now')</button>
                </div>
                @error('amount') <span class="text--danger empty-message">{!! $message !!}</span> @enderror
            </div>
        </form>
    @endif
</div>
