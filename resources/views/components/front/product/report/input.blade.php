@foreach($data as $key => $value)
    @php
        $input_name  = \Illuminate\Support\Str::slug($value)
    @endphp
    <div class="form-group row">
        <label for="{{ $input_name }}_{{ $key }}" class="col-sm-2 col-form-label">{{ $value }}</label>
        <div class="col-sm-10">
            <input
                    value="{{ $product->report[$input_name] ?? '' }}"
                    type="text"
                    class="form-control"
                    name="report[{{$input_name}}]"
                    id="{{ $input_name }}_{{ $key }}"
            />
        </div>
    </div>
@endforeach
<hr>