<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/sf.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tgdd.css') }}">
    @yield('styles')
    <style type="text/css">
        #main-products{
            margin-top: 60px;
        }
        .head-border {
            border-bottom: 5px solid aqua;
        }
    </style>
</head>
<body>



    <section class=" ">
        <div id="main-header">
            @include('phone.includes.header')
        </div>

            @yield('phone-index')
    </section>
@yield('single')




<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/toastr.js') }}"></script>
@yield('scripts')
</body>
</html>