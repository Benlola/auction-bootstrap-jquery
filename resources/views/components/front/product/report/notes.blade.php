@php
    $input_name  = \Illuminate\Support\Str::slug($name)
@endphp

@foreach($data as $key => $value)
    @if(isset($product->report[$input_name]['notice']))
    <div class="form-group row">
        <label  class="col-sm-2 col-form-label">{{ $value }}</label>
        <div class="col-sm-10">
            <input
                    type="text"
                    class="form-control"
                    value="{{ $product->report[$input_name]['notice'] ?? '' }}"

            />
        </div>
    </div>
    @endif
@endforeach
