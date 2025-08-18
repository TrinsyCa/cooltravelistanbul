<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('layouts.meta')
    <link rel="stylesheet" href="{{ asset('/css/preload.min.css') }}?v={{ filemtime(public_path('/css/preload.min.css')) }}">
    <script>
    let loadedAssets = 0;

    function removePreload(force = false) {
    if (force) {
        document.body.classList.add('loaded');
        window.scrollTo(0, 0);
        return;
    }
    loadedAssets++;
    if (loadedAssets >= 3) {
        document.body.classList.add('loaded');
        window.scrollTo(0, 0);
    }
    }

    const posterImage = new Image();
    posterImage.src = "{{ asset('assets/img/header-video/cover.webp') }}?v={{ filemtime(public_path('assets/img/header-video/cover.webp')) }}";
    posterImage.onload  = () => removePreload();
    posterImage.onerror = () => removePreload();

    @if (!request()->routeIs('home'))
    document.addEventListener('DOMContentLoaded', () => removePreload(true));
    @endif
    </script>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}?v={{ filemtime(public_path('/css/main.css')) }}" media="print" onload="this.media='all'; removePreload();">
    @if (request()->is('/'))<link rel="stylesheet" href="{{ asset('/css/header.css') }}?v={{ filemtime(public_path('/css/header.css')) }}" media="print" onload="this.media='all'; removePreload();">@endif
    <link rel="stylesheet" href="{{ asset('/css/main-responsive.css') }}?v={{ filemtime(public_path('/css/main-responsive.css')) }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('/css/anims.css') }}?v={{ filemtime(public_path('/css/anims.css')) }}" media="print" onload="this.media='all'">
    @yield('styles')
</head>
<body>
    @include('layouts.preload')
    <div id="body-content">
        @include('layouts.notification')
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
    </div>
    <script src="{{ asset('/scripts/extensions/jquery-3.7.1.slim.min.js') }}?v={{ filemtime(public_path('/scripts/extensions/jquery-3.7.1.slim.min.js')) }}"></script>
    <script src="{{ asset('/scripts/extensions/swiper-bundle.min.js') }}?v={{ filemtime(public_path('/scripts/extensions/swiper-bundle.min.js')) }}"></script>
    <script src="{{ asset('/scripts/main.js') }}?v={{ filemtime(public_path('/scripts/main.js')) }}"></script>
    @yield('scripts')
</body>
</html>
