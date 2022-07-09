@foreach($media_category ?? [] as $category)
    <div class="row my-10">
        {{ $category }}
    </div>
    @foreach($model->getMedia($category)->chunk(6) ?? [] as $chunk)
        <div class="row my-10">
            @foreach ($chunk as $file)
                <div class="card position-relative col-md-1">
                    <div class="position-absolute my-2 mx-2">
                        <a href="{{ route("remove.media", $file) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger pull-right btn-sm delete confirmable">
                            delete
                        </a>
                    </div>
                    <div class="card-img-top">
                        <img class="rounded-md" alt="" src="{{ $file->getUrl('gallery') }}">
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endforeach


@foreach($media_category ?? [] as $category)

<div class="form-group my-5">
    <label class="font-weight-bold">{{ $category }}</label>
    <input type="file" name="media[{{ $category }}][]" class="filepond" multiple/>
</div>
@endforeach


@push('script-lib')
    <link href="{{ asset('assets/vendor/filepond/dist/filepond.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/vendor/filepond/dist/filepond.min.js') }}"></script>
@endpush
@push('script')
    <script>

        const inputElements = document.querySelectorAll('input.filepond');

        // loop over input elements
        Array.from(inputElements).forEach(inputElement => {

            FilePond.create(inputElement);

        })

        FilePond.setOptions({
            server: {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                process: {
                    url: '{{ route('media.store',['model' => $model]) }}',
                },

            }
        });

    </script>
@endpush
