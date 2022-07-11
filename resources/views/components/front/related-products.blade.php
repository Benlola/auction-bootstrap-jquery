@props([
    'relatedProducts',
    'general'
])

<div {{ $attributes->class(['mt-5']) }} id="related-products">
    <h5 class="title mb-4">@lang('Related Products')</h5>
    <div class="slide-wrapper p-2">
        <div class="related-slider owl-theme owl-carousel">
            @foreach ($relatedProducts as $relatedProduct)
                <div class="slide-item">
                    <div class="auction__item bg-body">
                        <div class="auction__item-thumb">
                            <a href="{{ route('product.details', [$relatedProduct->id, slug($relatedProduct->name)]) }}">
                                <img
                                    src="{{getImage(imagePath()['product']['path'].'/thumb_'.$relatedProduct->image,imagePath()['product']['thumb'])}}"
                                    alt="auction">
                            </a>
                            <span class="total-bids">
                                                                    <span><i class="las la-gavel"></i></span>
                                                                    <span>@lang('x') {{ ($relatedProduct->total_bid) }} @lang('Bids')</span>
                                                                </span>
                        </div>
                        <div class="auction__item-content">
                            <h6 class="auction__item-title">
                                <a href="{{ route('product.details', [$relatedProduct->id, slug($relatedProduct->name)]) }}">{{ __($relatedProduct->name) }}</a>
                            </h6>
                            <div class="auction__item-countdown">
                                <x-auction_item_countdown :product="$relatedProduct" :general="$general"/>
                            </div>
                            <div class="auction__item-footer" style="text-align: left">
                                <a href="{{ route('product.details', [$relatedProduct->id, slug($relatedProduct->name)]) }}"
                                   class="cmn--btn1 w-75-">@lang('Details')</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
