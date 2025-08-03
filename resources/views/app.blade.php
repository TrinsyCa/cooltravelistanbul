<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.meta')
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}?v={{ filemtime(public_path('/css/main.css')) }}">
    <link rel="stylesheet" href="{{ asset('/css/main-responsive.css') }}?v={{ filemtime(public_path('/css/main-responsive.css')) }}" media="(max-width: 1335px), print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/css/anims.css') }}?v={{ filemtime(public_path('/css/anims.css')) }}" media="print" onload="this.media='all'">
    @yield('styles')
</head>
<body>
    @include('layouts.notification')
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('/scripts/extensions/jquery-3.7.1.slim.min.js') }}?v={{ filemtime(public_path('/scripts/extensions/jquery-3.7.1.slim.min.js')) }}"></script>
    <script src="{{ asset('/scripts/extensions/swiper-bundle.min.js') }}?v={{ filemtime(public_path('/scripts/extensions/swiper-bundle.min.js')) }}"></script>
    <script src="{{ asset('/scripts/main.js') }}?v={{ filemtime(public_path('/scripts/main.js')) }}"></script>
    @yield('scripts')
</body>
</html>
