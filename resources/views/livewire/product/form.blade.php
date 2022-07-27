<div>
    <form wire:submit.prevent="save"  >
        @csrf

        <div class="card-body">
            <div class="payment-method-item">
                <div class="payment-method-header">
                    <div class="form-group">
                        <label class="font-weight-bold">@lang('Image') <span class="text-danger">*</span></label>
                        <div class="thumb">
                            <div class="avatar-preview">
                                <div class="profilePicPreview" style="background-image: url('{{getImage(imagePath()['product']['path'].'/'.$product->image,imagePath()['product']['size'])}}')"></div>
                            </div>
                            <div class="avatar-edit">
                                <input type="file" name="image" class="profilePicUpload" id="image" accept=".png, .jpg, .jpeg"/>
                                <label for="image" class="bg--primary"><i class="la la-pencil"></i></label>
                            </div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="row mb-none-15">
                            <div class="col-sm-12 col-xl-4 col-lg-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">@lang('Name') <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="product.name" placeholder="@lang('Product Name')" name="name"/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4 col-lg-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">@lang('Category') <span class="text-danger">*</span></label>
                                    <select name="category" class="form-control" wire:model="product.category">
                                        <option value="">@lang('Select One')</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'Selected':'' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4 col-lg-6">
                                <label class="font-weight-bold">@lang('Price') <span class="text-danger">*</span></label>
                                <div class="input-group has_append">
                                    <input type="text" class="form-control" wire:model="product.price" placeholder="0" name="price" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">{{ __($general->cur_text) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4 col-lg-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">@lang('Schedule') <span class="text-danger">*</span></label>
                                    <select name="schedule" class="form-control" wire:model="product.schedule">
                                        <option value="1" {{ $product->started_at > now() ? 'Selected' : '' }}>@lang('Yes')</option>
                                        <option value="0">@lang('No')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4 col-lg-6 started_at">
                                <div class="form-group">
                                    <label class="font-weight-bold">@lang('Started_at') <span class="text-danger">*</span></label>
                                    <input type="text" name="started_at" placeholder="@lang('Select Date & Time')" id="startDateTime" data-position="bottom left" class="form-control border-radius-5" wire:model="product.started_at" autocomplete="off" required/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4 col-lg-6">
                                <div class="form-group">
                                    <label class="font-weight-bold">@lang('Expired_at') <span class="text-danger">*</span></label>
                                    <input type="text" name="expired_at" placeholder="@lang('Select Date & Time')" id="endDateTime" data-position="bottom left" class="form-control border-radius-5" wire:model="product.expired_at" autocomplete="off" required/>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="font-weight-bold">@lang('Short Description')</label>
                                    <textarea rows="4" class="form-control border-radius-5" name="short_description">{{ $product->short_description }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group mt-3">
                    <label class="font-weight-bold">@lang('Long Description')</label>
                    <textarea rows="8" class="form-control border-radius-5 nicEdit" name="long_description">{{ $product->long_description }}</textarea>
                </div>

                <x-media-library :model="$product" />


                <div class="row">

                    <div class="col-lg-12">
                        <div class="card border--primary mt-3">
                            <h5 class="card-hefader bg--primary  text-white">@lang('Specification')
                                <button type="button" class="btn btn-sm btn-outline-light float-right addUserData"><i class="la la-fw la-plus"></i>@lang('Add New')
                                </button>
                            </h5>

                            <div class="card-body">
                                <div class="row addedField">
                                    @if ($product->specification)
                                        @foreach ($product->specification as $spec)
                                            <div class="col-md-12 user-data">
                                                <div class="form-group">
                                                    <div class="input-group mb-md-0 mb-4">
                                                        <div class="col-md-4">
                                                            <input name="specification[{{ $loop->iteration }}][name]" class="form-control" type="text" value="{{ $spec['name'] }}" required placeholder="@lang('Field Name')">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input name="specification[{{ $loop->iteration }}][value]" class="form-control" type="text" value="{{ $spec['value'] }}" required placeholder="@lang('Field Value')">
                                                        </div>
                                                        <div class="col-md-2 mt-md-0 mt-2 text-right">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn--danger btn-lg removeBtn w-100" type="button">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    @foreach($report as $name => $values)--}}
{{--                        <div class="card border--primary mt-3">--}}
{{--                            <div class="card-hefader bg--primary text-white">--}}
{{--                                <div class="card-hefader bg--primary text-white">--}}
{{--                                    {{ $name }}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                @foreach($values as $sub_name => $array)--}}
{{--                                    <div class="row my-10">--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <h5 class="mb-2">{{ $sub_name }}</h5>--}}
{{--                                            @foreach($array as $type => $values)--}}
{{--                                                <x-dynamic-component--}}
{{--                                                        :product="$product"--}}
{{--                                                        :component="$type"--}}
{{--                                                        :data="$values"--}}
{{--                                                        :name="$sub_name"--}}
{{--                                                />--}}
{{--                                            @endforeach--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}


        </div>

        <div class="card-footer">

            <button type="submit" class="btn btn--primary btn-block">@lang('Submit')</button>
        </div>
    </form>

</div>
