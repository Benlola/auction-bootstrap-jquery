<div
        wire:ignore
        x-data
        x-init="
{{--        FilePond.registerPlugin(FilePondPluginImagePreview);--}}
                FilePond.setOptions({
                    credits: null,
                    allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
                server: {
                process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes->whereStartsWith('wire:model')->first() }}', file, load, error, progress)
                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes->whereStartsWith('wire:model')->first() }}', filename, load)
                },
            }
        });
        FilePond.create($refs.input);
    "
>
    <input type="file" x-ref="input">
</div>


@push('before-scripts')
    @once
        <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.css">
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    @endonce
@endpush
