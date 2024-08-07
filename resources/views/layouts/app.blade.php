<!doctype html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
    <html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('styles')
    <style>
    #loader_new {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        z-index: 10000;
    }
    </style>
</head>
<body>

    @include('layouts.header')

    @yield('content')

<!-- Bootstrap JS (optional, for dropdowns and other interactive features) -->
<!-- Bootstrap JS (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{secure_asset('dist/js/jquery-validate/jquery.validate.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/additional-methods.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/additional-methods.min.js')}}"></script>
    @include('layouts.footer')
@yield('scripts')
</body>

<script>
        setTimeout(function() {
            document.querySelector('.overlay').style.display = 'none';
            document.querySelector('.preloader').style.display = 'none';
        }, 3000); // Adjust the delay time (in milliseconds) as needed
    </script>
</html>
