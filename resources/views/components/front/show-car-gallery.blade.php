
<div class="row">
    <div class="col-12 col-sm-8">
        <a class="text-decoration-none w-100 mw-100 h-100">
            <img class=" w-100 mw-100 h-100"
                 src="{{ getImage(imagePath()['product']['path'].'/'.$product->image,imagePath()['product']['size']) }}"
                 alt="{{ $product->name }}">
        </a>
    </div>
    <div class="col-12 col-sm-4">
        <div class="row">
            @php
                $total = $product->media->count();
            @endphp
            @foreach($product->media()->limit(8)->get() as $image)
                @php
                    $p_b = ($loop->last || $loop->iteration === 7 || $loop->iteration === 8 )?"":"pb-2";
                @endphp
                <div class="col-6 ps-0 {{ $p_b }} last-{{ $loop->last }} iteration-{{ $loop->iteration }}">

                    @if($loop->last)
                        <div class="position-relative">
                            <div
                                class="d-flex flex-wrap flex-row align-content-center justify-content-center position-absolute w-100 h-100 text-center"
                                style="line-height: 1rem;background: rgb(0 0 0 / 56%);font-size: 12px;color:white;">
                                VIEW ALL PHOTOS<br/>( {{ $total }} )
                            </div>
                            <img class="w-100"
                                 src="{{ $image->getUrl('gallery') }}"
                                 alt="{{ $product->name }}">
                        </div>
                    @else
                        <img class="w-100"
                             src="{{ $image->getUrl('gallery') }}"
                             alt="{{ $product->name }}">
                    @endif


                </div>
            @endforeach
            {{--
            <div class="col-6 ps-0 pb-2">
                <img class="w-100" src="https://collectingcars.imgix.net/010566/-MG-0373.jpg?w=189&fit=fillmax&auto=format,compress&cs=srgb&q=85" alt="">
            </div>
            <div class="col-6 ps-0 pb-2">
                <img class="w-100" src="https://collectingcars.imgix.net/010566/-MG-0373.jpg?w=189&fit=fillmax&auto=format,compress&cs=srgb&q=85" alt="">
            </div>
            <div class="col-6 ps-0 pb-2">
                <img class="w-100" src="https://collectingcars.imgix.net/010566/-MG-0373.jpg?w=189&fit=fillmax&auto=format,compress&cs=srgb&q=85" alt="">
            </div>
            <div class="col-6 ps-0 pb-2">
                <img class="w-100" src="https://collectingcars.imgix.net/010566/-MG-0373.jpg?w=189&fit=fillmax&auto=format,compress&cs=srgb&q=85" alt="">
            </div>
            <div class="col-6 ps-0 pb-2">
                <img class="w-100" src="https://collectingcars.imgix.net/010566/-MG-0373.jpg?w=189&fit=fillmax&auto=format,compress&cs=srgb&q=85" alt="">
            </div>
            <div class="col-6 ps-0">
                <img class="w-100" src="https://collectingcars.imgix.net/010566/-MG-0373.jpg?w=189&fit=fillmax&auto=format,compress&cs=srgb&q=85" alt="">
            </div>
            <div class="col-6 ps-0">
                <div class="position-relative">
                    <img class="w-100" src="https://collectingcars.imgix.net/010566/-MG-0373.jpg?w=189&fit=fillmax&auto=format,compress&cs=srgb&q=85" alt="">
                </div>
            </div>
            --}}
        </div>
    </div>
</div>
