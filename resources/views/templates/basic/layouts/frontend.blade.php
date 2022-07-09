<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ session('direction') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    @include('partials.seo')

    <link rel="stylesheet" href="{{ asset('assets/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('assets/global/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/global/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/headline.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/main.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/bootstrap-fileinput.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/color.php')}}?color={{ $general->base_color }}">


    <link rel="icon" type="image/png" href="{{ getImage(imagePath()['logoIcon']['path'] .'/favicon.png') }}" sizes="16x16">
    @livewireStyles
    @stack('style-lib')

    @stack('style')

</head>

<body>

    @stack('fbComment')

    <main class="main-body">

        @include($activeTemplate.'partials.preloader')

        <div class="overlay"></div>
        <a href="#0" class="scrollToTop"><i class="las la-angle-up"></i></a>

        @if (!request()->routeIs('user.login') && !request()->routeIs('user.register') && !request()->routeIs('user.authorization') && !request()->routeIs('user.password.request') && !request()->routeIs('user.password.code.verify') && !request()->routeIs('user.password.reset'))
            @include($activeTemplate.'partials.header')
        @endif

        @if (!request()->routeIs('home') && !request()->routeIs('user.login') && !request()->routeIs('user.register') && !request()->routeIs('user.authorization') && !request()->routeIs('user.password.request') && !request()->routeIs('user.password.code.verify') && !request()->routeIs('user.password.reset') && !request()->routeIs('vendor.profile') && !request()->routeIs('admin.profile.view') && !request()->routeIs('merchant.profile.view'))
            @include($activeTemplate.'partials.breadcrumb')
        @endif

        @yield('content')

        @if (!request()->routeIs('user.login') && !request()->routeIs('user.register') && !request()->routeIs('user.authorization') && !request()->routeIs('user.password.request') && !request()->routeIs('user.password.code.verify') && !request()->routeIs('user.password.reset'))
            @include($activeTemplate.'partials.footer')
        @endif

    </main>

    @php
        $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
    @endphp

    @if(@$cookie->data_values->status && !session('cookie_accepted'))
        <div class="cookies-card bg--default text-center cookies--dark radius--10px">
            <div class="cookies-card__icon">
                <i class="fas fa-cookie-bite"></i>
            </div>
            <p class="mt-4 cookies-card__content"> @php echo @$cookie->data_values->description @endphp <a class="d-inline" href="{{ @$cookie->data_values->link }}">@lang('Read Policy')</a></p>
            <div class="cookies-card__btn mt-4">
                <button class="cookies-btn btn--base w-100" id="allow-cookie">@lang('Allow')</button>
            </div>
        </div>
    @endif


    <script src="{{asset('assets/global/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/global/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/rafcounter.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/lightbox.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/owl.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/countdown.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/headline.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/main.js') }}"></script>

    @stack('script-lib')

    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            this.livewire.on('notify', data => {
                iziToast[data.status]({
                    message: data.message,
                    position: "topRight"
                });

            })

            this.livewire.on('confirm', data => {
                iziToast.question({
                    timeout: 20000,
                    close: false,
                    overlay: true,
                    displayMode: 'once',
                    id: 'question',
                    zindex: 999,
                    message: data.message,
                    position: 'center',
                    buttons: [
                        ['<button><b>YES</b></button>', function (instance, toast) {
                            window.livewire.emit('saveNewBid');
                            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                        }],
                        ['<button>NO</button>', function (instance, toast) {

                            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');

                        }, true],
                    ],


                });

            })
        });

        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{route('home')}}/change/"+$(this).val() ;
            });

            var url = `{{ route('cookie.accept') }}`;

            $('#allow-cookie').on('click', function(){
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        $('.cookies-card').hide();
                    }
                });
            });


        })(jQuery);
    </script>

    @livewireScripts


</body>
</html>
