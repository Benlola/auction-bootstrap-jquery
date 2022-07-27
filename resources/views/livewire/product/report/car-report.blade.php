<div class="row">
    <div class="col-lg-12">
        @foreach($report as $name => $values)
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
                                    <x-dynamic-component :component="$type" :data="$values" :name="$sub_name"/>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
