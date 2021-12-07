<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SearchDevs') }}</title>

        <!-- Favicons -->
        <link href="/assets/img/Logo2.png" rel="icon">
        <link href="/assets/img/Logo2.png" rel="apple-touch-icon">

{{--        <!-- Scripts -->--}}
{{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

{{--        <!-- Styles -->--}}
{{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

        <!-- Vendor CSS Files -->
        <link href="/dash/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/dash/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/dash/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="/dash/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/dash/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="/dash/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="/dash/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="/dash/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>

        @include('layouts.js')

        @yield('js')
    </body>
</html>
