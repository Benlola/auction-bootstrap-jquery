@extends($activeTemplate.'layouts.frontend')

@section('content')
<section class="product-section pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            @forelse ($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 mb-3">
                        <div class="slide-item">
                            <div class="auction__item bg--body">
                                <div class="auction__item-thumb">
                                    <a href="{{ route('product.details', [$product->id, slug($product->name)]) }}">
                                        <img src="{{getImage(imagePath()['product']['path'].'/thumb_'.$product->image,imagePath()['product']['thumb'])}}" alt="auction">
                                    </a>
                                    <span class="total-bids">
                                        <span><i class="las la-gavel"></i></span>
                                        <span>@lang('x') {{ ($product->total_bid) }} @lang('Bids')</span>
                                    </span>
                                </div>
                                <div class="auction__item-content">
                                    <h6 class="auction__item-title">
                                        <a href="{{ route('product.details', [$product->id, slug($product->name)]) }}">{{ __($product->name) }}</a>
                                    </h6>
                                    <div class="auction__item-countdown">
                                        <x-auction_item_countdown :product="$product" :general="$general"/>
                                    </div>
                                    <div class="auction__item-footer">
                                        <a href="{{ route('product.details', [$product->id, slug($product->name)]) }}" class="cmn--btn w-100">@lang('Details')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            @empty
                <div class="text-center">
                    <p>{{ __($emptyMessage) }}</p>
                </div>
            @endforelse
        </div>
        {{ $products->links() }}
    </div>
</section>
@endsection
