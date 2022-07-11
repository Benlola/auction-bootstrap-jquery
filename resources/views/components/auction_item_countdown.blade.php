@props([
    /** @var \mixed */
    'product',
    'general'
])

<div {{ $attributes->class(['inner__grp']) }}>
    <div class="total-price">
        {{ $general->cur_sym }}{{ showAmount($product->price) }}
    </div>
    @if($product->expired_at > now())
        <ul class="countdown"
            data-date="{{ showDateTime($product->expired_at, 'm/d/Y H:i:s') }}">
            <li>
                <span class="days">@lang('00')</span>
            </li>
            <li>
                <span class="hours">@lang('00')</span>
            </li>
            <li>
                <span class="minutes">@lang('00')</span>
            </li>
            <li>
                <span class="seconds">@lang('00')</span>
            </li>
        </ul>
    @endif
</div>
