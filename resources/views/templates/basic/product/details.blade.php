@extends($activeTemplate.'layouts.frontend')

@section('content')
          <!-- Product -->
          <section class="product-section pt-120 pb-120">
            <div class="container">
                <div class="row gy-5 justify-content-between">
                    <div class="col-lg-8">
                        <x-front.show-car-gallery :product="$product"/>

                        <div class="mt-4">
                            <h1 class="title mt-0 mb-2" style="font-size: 40px">{{ __($product->name) }}</h1>
                            <div class="ratings mb-4">
                                {!! displayAvgRating($product->avg_rating) !!} ({{ $product->review_count }})
                            </div>
                            <p class="mb-4 mt-0">
                                {{ __(shortDescription($product->short_description)) }}
                            </p>
                        </div>
                        <div class="product__single-item">
                            {{--
                            <div class="product-thumb-area mb-5">
                                <div class="product-thumb pe-md-4">
                                    @foreach($images as $index => $image)
                                        <img src="{{ $image->getUrl('thumb') }}" alt="{{ $product->name }} #{{ $loop->iteration }}">
                                    @endforeach
                                    <div class="meta-post mt-4">
                                        <div class="meta-item me-sm-auto">
                                            <span class="text--base"><i class="las la-gavel"></i></span> {{ __($product->total_bid) }}
                                        </div>
                                        <div class="meta-item me-0 d-none">
                                            <span class="text--base"><i class="lar la-share-square"></i></span>
                                            <ul class="social-share">
                                                <li>
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" title="@lang('Facebook')" target="blank"><i class="fab fa-facebook"></i></a>
                                                </li>

                                                <li>
                                                    <a href="http://pinterest.com/pin/create/button/?url={{urlencode(url()->current()) }}&description={{ __($product->name) }}&media={{ getImage('assets/images/product/'. @$product->main_image) }}" title="@lang('Pinterest')" target="blank"><i class="fab fa-pinterest-p"></i></a>
                                                </li>

                                                <li>
                                                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{urlencode(url()->current()) }}&amp;title={{ __($product->name) }}&amp;summary={{ shortDescription(__($product->summary)) }}" title="@lang('Linkedin')" target="blank"><i class="fab fa-linkedin"></i></a>
                                                </li>

                                                <li>
                                                    <a href="https://twitter.com/intent/tweet?text={{ __($product->name) }}%0A{{ url()->current() }}" title="@lang('Twitter')" target="blank">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">



                                </div>
                            </div>
                            --}}
                            <div class="max-banner mb-4">
                                @php
                                    showAd('780x80')
                                @endphp
                            </div>
                            <div class="content">

                                <div class="mt-5">


                                    <div class="mt-5" id="description">
                                        <h5 class="title">@lang('Description')</h5>
                                        @php
                                            echo $product->long_description
                                        @endphp
                                    </div>

                                    <div class="mt-5" id="specification">
                                        <div class="specification-wrapper">
                                            <h5 class="title">@lang('Specification') <a href="{{ route('product.details.specifications',[ 'id' => $product->id, 'slug' => slug($product->name) ]) }}" class="btn btn-primary float-end">@lang('Full specification')</a></h5>
                                            <div class="table-wrapper">
                                                <table class="specification-table">
                                                    <tr>
                                                        <th>@lang('Category')</td>
                                                        <td>{{ __($product->category->name) }}</td>
                                                    </tr>
                                                    @if ($product->specification)
                                                        @foreach ($product->specification as $spec)
                                                            <tr>
                                                                <th>{{ __($spec['name']) }}</th>
                                                                <td>{{ __($spec['value']) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <x-front.product-media-categories :product="$product" />

                                    <x-front.product-report :product="$product" />

                                    <div class="mt-5" id="reviews">
                                        <h5 class="title pb-4">@lang('Reviews') <span class="text-secondary fw-normal fs-6">({{ $product->reviews->count() }})</span></h5>
                                        <div class="review-area"></div>

                                        @if($product->bids->where('user_id', auth()->id())->count())
                                            @php $review = $product->reviews->where('user_id', auth()->id())->first(); @endphp
                                            <div class="add-review pt-4 pt-sm-5">
                                                <h5 class="title bold mb-3 mb-lg-4">
                                                    @if($review)
                                                        @lang('Update Your Review')
                                                    @else
                                                        @lang('Add Review')
                                                    @endif
                                                </h5>
                                                <form action="{{ route('user.product.review.store') }}" method="POST" class="review-form rating row">
                                                    @csrf
                                                    <input type="hidden" value="{{ $product->id }}" name="product_id">


                                                    <div class="review-form-group mb-20 col-md-6 d-flex flex-wrap">
                                                        <label class="review-label mb-0 me-3">@lang('Your Rating') :</label>
                                                        <div class="rating-form-group">
                                                            <label class="star-label">
                                                                <input type="radio" name="rating" value="1" {{ ($review && $review->rating ==1) ? 'checked': ''  }} />
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                            </label>
                                                            <label class="star-label">
                                                                <input type="radio" name="rating" value="2" {{ ($review && $review->rating ==2) ? 'checked': ''  }} />
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                            </label>
                                                            <label class="star-label">
                                                                <input type="radio" name="rating" value="3" {{ ($review && $review->rating ==3) ? 'checked': ''  }} />
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                            </label>
                                                            <label class="star-label">
                                                                <input type="radio" name="rating" value="4" {{ ($review && $review->rating ==4) ? 'checked': ''  }} />
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                            </label>
                                                            <label class="star-label">
                                                                <input type="radio" name="rating" value="5" {{ ($review && $review->rating ==5) ? 'checked': ''  }} />
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                                <span class="icon"><i class="las la-star"></i></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="review-form-group mb-20 col-12 d-flex flex-wrap">

                                                        <textarea name="description" placeholder="@lang('Write your review')..." class="form-control" id="review-comments">{{ $review ? __($review->description) : old('description') }}</textarea>
                                                    </div>
                                                    <div class="review-form-group mb-20 col-12 d-flex flex-wrap">
                                                        <button type="submit" class="cmn--btn">@lang('Submit Review')</button>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                    </div>


                                </div>
                                <div class="max-banner mt-5">
                                    @php
                                        showAd('780x80')
                                    @endphp
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="product-single-sidebar ms-xl-3 ms-xxl-5 position-sticky" style="top:100px">
                            {{--
                            Now: {{showDateTime(now(), 'm/d/Y H:i:s')}}<br>
                            Expire At: {{showDateTime($product->expired_at, 'm/d/Y H:i:s')}}
                            <livewire:product.count-down-auction :product="$product"/>
                            --}}
                            <x-front.count-down-auction :product="$product"/>
                            {{--
                            <div class="countdown-area bg--section mb-4" style="box-shadow: 0 0 13px #214ab036;">
                                <ul class="countdown sidebar-countdown" data-date="{{ showDateTime($product->expired_at, 'm/d/Y H:i:s') }}">
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
                            </div>
                            --}}
                            <livewire:product.new-bid :product_id="$product->id" />

                            <div class="seller-area bg--section mb-4 d-none">
                                <h6 class="about-seller mb-4">
                                    @lang('About Seller')
                                </h6>
                                @php
                                    $admin = $product->admin_id != 0 ? true : false;
                                @endphp
                                <a href="{{ $admin ? route('admin.profile.view', [$product->admin->id, slug(@$general->merchant_profile->name)]) : route('merchant.profile.view', [$product->merchant->id, slug($product->merchant->fullname)]) }}" class="seller">
                                    <div class="thumb">
                                        @if ($admin)
                                            <img src="{{getImage(imagePath()['profile']['admin']['path'].'/'.$general->merchant_profile->image, null, true)}}" alt="winner">
                                        @else
                                            <img src="{{getImage(imagePath()['profile']['merchant']['path'].'/'.$product->merchant->image, null, true)}}" alt="winner">
                                        @endif

                                    </div>
                                    <div class="cont">
                                        <h6 class="title">{{ __($admin ? @$general->merchant_profile->name : $product->merchant->fullname) }}</h6>
                                    </div>
                                </a>
                                <ul class="seller-info mt-4">
                                    <li>
                                        @lang('Since'): <span class="text--base">{{ showDateTime($admin ? $product->admin->created_at : $product->merchant->created_at, 'd M Y') }}</span>
                                    </li>

                                    @if(!$admin)
                                    <li>
                                        <div class="ratings">
                                            {!! displayAvgRating($star = $admin ? $product->admin->avg_rating : $product->merchant->avg_rating) !!}
                                            ( {{ __($admin ? $product->admin->review_count : $product->merchant->review_count) }})
                                        </div>
                                    </li>
                                    @endif
                                    <li>
                                        @lang('Total Products') : <span class="text--base">{{ $admin ? $product->admin->products->count() : $product->merchant->products->count() }}</span>
                                    </li>


                                    <li>
                                        @lang('Total Sale') : <span class="text--base">{{ $admin ? $product->admin->products->sum('total_bid') : $product->merchant->products->sum('total_bid') }}</span>
                                    </li>

                                </ul>
                            </div>

                            <x-front.related-products :relatedProducts="$relatedProducts" :general="$general"/>

                            <div class="mini-banner">
                                @php
                                    showAd('370x670')
                                @endphp
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product -->
        <div class="modal fade" id="bidModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">@lang('Confirmation Alert')</h5>
                        <button class="btn text--danger modal-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('user.bid') }}" method="POST">
                        @csrf
                        <input type="hidden" class="amount" name="amount" required>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="modal-body">
                            <h6 class="message"></h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn--danger" data-bs-dismiss="modal">@lang('No')</button>
                            <button type="submit" class="btn btn--base">@lang('Yes')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

@include('templates.basic.product.product_bid_actions')


