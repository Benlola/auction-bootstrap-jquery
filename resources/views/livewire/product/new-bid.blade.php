<div>
    @isset($latest_bid)
        <div class="product-price last-bid" wire:poll="last_bid">
            <div class="fs-6 text-secondary">@lang('Last bid'):
                {{ showAmount($latest_bid) }} <span class="text--base">{{ __($general->cur_text) }}</span>
            </div>
        </div>
    @endisset


    @if ($product->status == 1 && $product->started_at < now() && $product->expired_at > now())
        <form wire:submit.prevent="checkData">
            <div class="btn__area">
            <div class="cart-plus-minus input-group w-auto">
                <span class="input-group-text bg--base border-0 text-white">{{ $general->cur_sym }}</span>
                <input type="number" wire:model="amount" placeholder="@lang('Enter your amount')" class="form-control" id="amount" min="0" step="any">
            </div>
            <div>
                <button class="cmn--btn btn--sm bid_now" type="submit" data-cur_sym="{{ $general->cur_sym }}">@lang('Bid Now')</button>
            </div>
            @error('amount') <span class="text--danger empty-message">{{ $message }}</span> @enderror
        </div>
        </form>
    @endif
    </form>

</div>
