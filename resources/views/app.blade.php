<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.meta')
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}?v={{ filemtime(public_path('/css/main.css')) }}">
    <link rel="stylesheet" href="{{ asset('/css/main-responsive.css') }}?v={{ filemtime(public_path('/css/main-responsive.css')) }}">
    @yield('styles')
</head>
<body>
    @include('layouts.notification')
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('/scripts/extensions/swiper-bundle.min.js') }}?v={{ filemtime(public_path('/scripts/extensions/swiper-bundle.min.js')) }}"></script>
    <script src="{{ asset('/scripts/main.js') }}?v={{ filemtime(public_path('/scripts/main.js')) }}"></script>
    @yield('scripts')
</body>
</html>
