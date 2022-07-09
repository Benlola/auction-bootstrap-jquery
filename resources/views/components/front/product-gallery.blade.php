<div>
    @foreach($all_gallery as $image)
        <img class="rounded-md" alt="" src="{{ $image->getUrl($loop->index == 0 ? 'preview': 'thumb') }}" />
    @endforeach
    @foreach($gallery_category ?? [] as $category)
        @foreach($product->getMedia($category)->chunk(6) ?? [] as $chunk)
            <div class="my-10">
                {{ \Illuminate\Support\Str::title($category) }}
            </div>
            <div class="float-left">
                @foreach ($chunk as $file)
                    <img class="rounded-md" alt="" src="{{ $file->getUrl('thumb') }}">
                @endforeach
            </div>
        @endforeach
    @endforeach
</div>