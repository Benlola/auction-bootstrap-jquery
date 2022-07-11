<div class="countdown-area mb-4 @if($final_step) final-step @else bg--section @endif" style="box-shadow: 0 0 13px #214ab036;">
    <div wire:poll.1000ms="check_expired_product" data-date="{{ $product->expire_at }}">
        {!! $product_expire !!}
    </div>
</div>
