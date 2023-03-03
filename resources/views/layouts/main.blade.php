<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="{{ asset('favicon.ico')}}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    @yield('cdns')
    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header')
    @yield('content')

    @yield('script')
    @include('includes.footer')
</body>
</html>