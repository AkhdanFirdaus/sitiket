<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('bs4/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

    <script type="text/javascript" src="{{asset('JQuery/jquery-3.3.1.min.js')}}"></script>
</head>
<body>
    <div id="app">    
        @include('partials.navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('bs4/js/bootstrap.min.js') }}"></script>
</body>
</html>
