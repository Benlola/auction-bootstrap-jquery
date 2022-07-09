<div>
    @foreach($gallery_category ?? [] as $category)
        @foreach($product->getMedia($category)->chunk(6) ?? [] as $chunk)
            <div class="mt-5">
                <h5 class="title">{{ \Illuminate\Support\Str::title($category) }} <span class="text-secondary fw-normal fs-6">({{ $product->getMedia($category)->count() }})</span></h5>
            </div>
            <div class="float-left">
                @foreach ($chunk as $file)
                    <img class="rounded" alt="" src="{{ $file->getUrl('gallery') }}">
                @endforeach
            </div>
        @endforeach
    @endforeach
</div>

{{--
<div>
    @foreach($all_gallery as $image)
        <img class="rounded-md" alt="" src="{{ $image->getUrl($loop->index == 0 ? 'preview': 'thumb') }}" />
    @endforeach
    @foreach($gallery_category ?? [] as $category)
        @foreach($product->getMedia($category)->chunk(6) ?? [] as $chunk)
            <div class="my-10">
                <h5 class="title">{{ \Illuminate\Support\Str::title($category) }}</h5>
            </div>
            <div class="float-left">
                @foreach ($chunk as $file)
                    <img class="rounded-md" alt="" src="{{ $file->getUrl('thumb') }}">
                @endforeach
            </div>
        @endforeach
    @endforeach
</div>
--}}
