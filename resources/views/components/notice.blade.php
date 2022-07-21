@php
    $input_name  = \Illuminate\Support\Str::slug($name)
@endphp

@foreach($data as $key => $value)

    <div class="form-group row">
        <label for="notice_{{ $input_name }}_{{ $key }}" class="col-sm-2 col-form-label">{{ $value }}</label>
        <div class="col-sm-10">
            <input
                    type="text"
                    class="form-control"
                    name="report[{{$input_name}}][notice]"
                    id="notice_{{ $input_name }}_{{ $key }}"
                    value="{{ $product->report[$input_name]['notice'] ?? '' }}"

            />
        </div>
    </div>
@endforeach
<hr>