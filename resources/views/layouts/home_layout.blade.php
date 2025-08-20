<!DOCTYPE html>
<html lang="{{ env('APP_LOCALE') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    {{-- Bootstrap Css --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>

    @yield('content')

    {{-- Jquery --}}
    <script src="{{ asset('assets/jquery/jquery-3.7.1.min.js') }}"></script>
    {{-- Js --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>
    {{-- Bootstrap Js --}}
    <script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
