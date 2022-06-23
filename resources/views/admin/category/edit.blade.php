@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form method="POST" action="{{ route('admin.category.update', $category) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    @include("admin.category._form")
                </form>
            </div>
        </div>
    </div>

@endsection

@push('breadcrumb-plugins')
    <a href="{{ route("admin.category.index") }}" class="btn btn-sm btn--primary box--shadow1 text--small">@lang('Cansel')</a>
@endpush

