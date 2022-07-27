@php
    $input_name  = \Illuminate\Support\Str::slug($name)
@endphp
@foreach($data as $key => $value)
    <div class="form-check form-check-inline">
        <input
                class="form-check-input"
                type="checkbox"
                value="{{$value}}"
                name="report[{{ $input_name }}][]"
                id="{{ $input_name }}_{{ $key }}"
                @if (isset($product->report[$input_name][$key]) && $product->report[$input_name][$key] == $value) checked @endif

        />
        <label class="form-check-label" for="{{ $input_name }}_{{ $key }}">
            @lang($value)
        </label>
    </div>
@endforeach
<hr>