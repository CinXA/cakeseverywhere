<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cakeseverywhere</title>

    <title>Cakeseverywhere</title>
    <!-- boostrap css -->
    <link href="{{asset('css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <!-- flash mensajes<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->

    <!-- Fonts -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- styles-->

    <link href="{{asset('css/index.css')}}" rel="stylesheet">

    <link href="{{asset('css/carusel.css')}}" rel="stylesheet">
    <link href="{{asset('css/basicos.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('img/icons/logo.png')}}">
</head>
    <body>
    @include('partials.login_sign_modal')
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
    <!--javascript -->
    <script src="{{asset('js/lib/jquery-3.3.1.min.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('js/lib/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/index.js')}}" ></script>
    @yield('javascript')
    </body>
</html>