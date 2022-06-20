@foreach($model->getMedia('product')->chunk(6) ?? [] as  $chunk)
    <div class="row my-10">
        @foreach ($chunk as  $file)
            <div class="card position-relative col-md-2">
                <div class="position-absolute my-2 mx-2">
                    <a href="{{ route("remove.media", $file) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger pull-right btn-sm delete confirmable">
                        delete
                    </a>
                </div>
                <div class="card-img-top">
                    <img class="rounded-md" alt="" src="{{ $file->getUrl('thumb') }}">
                </div>
            </div>
        @endforeach
    </div>
@endforeach


<div class="form-group my-3">
    <label class="font-weight-bold">@lang('Media') </label>
    <input type="file" name="media[]" class="filepond" multiple/>
</div>

@push('script-lib')
    <link href="{{ asset('assets/vendor/filepond/dist/filepond.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/vendor/filepond/dist/filepond.min.js') }}"></script>
@endpush
@push('script')
    <script>
        const inputElement = document.querySelector('.filepond');
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                process: {
                    url: '{{ route('media.store') }}',
                },

            }
        });

    </script>
@endpush