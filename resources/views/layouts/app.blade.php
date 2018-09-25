<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'siTiket') }} @yield('title', 'siTiket')</title>

    <!-- Styles -->
    <link href="{{ asset('bs4/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="text/css" href="">
    @yield('style')
</head>
<body>
    <div id="app">
        @include('partials.navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('bs4/js/bootstrap.min.js') }}"></script>
    @yield('script')
</body>
</html>
