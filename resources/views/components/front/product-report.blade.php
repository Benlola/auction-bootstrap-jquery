@if(is_countable($product->report))
<div id="report">
    <h5 class="title pb-4">Report</h5>
    @foreach($blank_report ?? [] as $name => $values)
        <div class="card border--primary mt-3">
            <div class="card-hefader bg--primary text-white">
                <div class="card-hefader bg--primary text-white">
                    {{ $name }}
                </div>
            </div>
            <div class="card-body">
                @foreach($values as $sub_name => $array)
                    <div class="row my-10">
                        <div class="col-md-12">
                            <h5 class="mb-2">{{ $sub_name }}</h5>
                            @foreach($array as $type => $values)
                                @php
                                    $component = sprintf("front.product.report.%s", $type);
                                @endphp
                                <x-dynamic-component
                                        :product="$product"
                                        :component="$component"
                                        :data="$values"
                                        :name="$sub_name"
                                />
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endif