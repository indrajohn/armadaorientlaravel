<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico')}}" type="image/x-icon">
    <title>Armada Orient</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toolbar.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <div id="app" class="w-100 h-100">
        @include('template.navbar')
        @yield('content')
        @include('template.footer')
    </div>
</body>
@include('template.footer')

</html>
