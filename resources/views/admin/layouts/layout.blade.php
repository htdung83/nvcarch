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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme/icons/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/fonts.css') }}">
    <link rel="stylesheet" id="ckEditorContentCss" href="{{ asset('theme/css/style.css') }}">
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
        }
        .cke_contents.cke_reset img {max-width: 100% !important;}
    </style>
    @stack('extraCss')
</head>
<body>
{{--<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img--}}
{{--            src="{{ asset('theme/images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820"--}}
{{--            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>--}}
{{--</div>--}}
{{--<div class="preloader">--}}
{{--    <div class="cssload-container">--}}
{{--        <div class="cssload-speeding-wheel"></div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Page-->
<div class="page">
    @include('admin.layouts.partials.header')

    <div class="container mt-4">
        @yield('mainContent')
    </div>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{ asset('theme/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('theme/js/core.min.js') }}"></script>
<script src="{{ asset('theme/js/script.js') }}"></script>
<script>
    $(document).ready(function () {
        $(".toast").toast('show');
    });
</script>
@stack('extraJs')
<!-- coded by barber-->
</body>
</html>
