@php
    $input_name  = \Illuminate\Support\Str::slug($name)
@endphp
@foreach($data as $key => $value)
    <div class="custom-control custom-radio custom-control-inline">
        <input
                @if (isset($product->report[$input_name]['radio']) && $product->report[$input_name]['radio'] == $value) checked @endif
                type="radio"
                id="{{ $input_name }}_{{ $key }}"
                value="{{ $value }}"
                name="report[{{$input_name}}][radio]"
                class="custom-control-input"
        />
        <label class="custom-control-label" for="{{ $input_name }}_{{ $key }}">{{ $value }}</label>
    </div>
@endforeach
<hr>