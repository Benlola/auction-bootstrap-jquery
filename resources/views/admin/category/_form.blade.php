<div class="modal-body">
    <div class="form-group">
        <label>@lang('Name')<span class="text-danger">*</span></label>
        <div class="input-group has_append">
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label>@lang('Icon')<span class="text-danger">*</span></label>
        <div class="input-group has_append">
            <input type="text" class="form-control icon" value="{{ $category->icon }}" name="icon" required>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary iconPicker" data-icon="las la-home" role="iconpicker"></button>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card border--primary mt-3">
                <h5 class="card-hefader bg--primary  text-white">@lang('Media category')
                    <button type="button" class="btn btn-sm btn-outline-light float-right addUserData"><i class="la la-fw la-plus"></i>@lang('Add New')
                    </button>
                </h5>

                <div class="card-body">
                    <div class="row addedField">
                        @foreach ($category->media_category ?? [] as $row)
                            <div class="col-md-12 user-data">
                                <div class="form-group">
                                    <div class="input-group mb-md-0 mb-4">
                                        <div class="col-md-10">
                                            <input name="media_category[]" class="form-control" type="text" value="{{ $row }}" required placeholder="@lang('Field Name')">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group statusGroup">
        <label>@lang('Status')</label>
        <input type="checkbox"
        {{  ($category->status == 1 ? ' checked' : '') }}
        data-onstyle="-success" value="{{ $category->status }}"
               data-offstyle="-danger" data-toggle="toggle" data-on="@lang('Active')" data-off="@lang('Inactive')" data-width="100%" name="status">
    </div>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn--primary btn-block">@lang('Submit')</button>
</div>

@push('script-lib')
    <script src="{{ asset('assets/admin/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
@endpush

@push('script')
    <script>

        (function ($) {
            "use strict";

            $('.iconPicker').iconpicker().on('change', function (e) {
                $(this).parent().siblings('.icon').val(`<i class="${e.icon}"></i>`);
            });

            var specCount = `{{ $category->specification ? count($category->specification) : 0 }}`;
            specCount = parseInt(specCount);
            specCount = specCount ? specCount + 1 : 1;

            $('.addUserData').on('click', function () {
                var html = `
                    <div class="col-md-12 user-data">
                        <div class="form-group">
                            <div class="input-group mb-md-0 mb-4">
                                <div class="col-md-10">
                                    <input name="media_category[]" class="form-control" type="text" required placeholder="@lang('Field Name')">
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
                    </div>`;
                $('.addedField').append(html);
                specCount += 1;
            });

            $(document).on('click', '.removeBtn', function () {
                $(this).closest('.user-data').remove();
            });


        })(jQuery);
    </script>
@endpush
