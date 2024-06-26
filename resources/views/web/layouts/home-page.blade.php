<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Site Title-->
    <title>{{ config('app.name') }} - @stack('pageTitle')</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('theme/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Lato:300,300italic%7CMontserrat:400,700">
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/fonts.css') }}">
    <style>.ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }</style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="{{ asset('theme/images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
</div>
<div class="preloader">
    <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
    </div>
</div>
<!-- Page-->
<div class="page">
    @include('web.layouts.partials.header')

    @yield('mainContent')

    <!-- Page Footer-->
    <footer class="novi-background bg-cover footer-corporate bg-gray-darker">
        <div class="container">
            <div class="footer-corporate__inner">
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span> - @lang('contact-info.company_full_name')</span></p>
                <ul class="list-inline-xxs">
                    <li><a class="icon novi-icon icon-xxs icon-gray-darker fa fa-facebook" href="#"></a></li>
{{--                    <li><a class="icon novi-icon icon-xxs icon-gray-darker fa fa-twitter" href="#"></a></li>--}}
{{--                    <li><a class="icon novi-icon icon-xxs icon-gray-darker fa fa-google-plus" href="#"></a></li>--}}
{{--                    <li><a class="icon novi-icon icon-xxs icon-gray-darker fa fa-vimeo" href="#"></a></li>--}}
                    <li><a class="icon novi-icon icon-xxs icon-gray-darker fa fa-youtube" href="#"></a></li>
{{--                    <li><a class="icon novi-icon icon-xxs icon-gray-darker fa fa-pinterest" href="#"></a></li>--}}
                </ul>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{ asset('theme/js/core.min.js') }}"></script>
<script src="{{ asset('theme/js/script.js') }}"></script>
<!-- coded by barber-->
</body>
</html>
