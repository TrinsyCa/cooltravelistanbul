@extends('app')
@section('title')
    Gallery {{ config('app.seperator') }}{{ config('app.name') }}
@endsection
@section('article', 'Gallery')
@section('styles')
<link rel="stylesheet" href="{{ asset('/css/extensions/focus.css') }}">
@endsection
@section('content')
    <div class="space"></div>
    <div class="focus gallery section-container">
        <h1 class="subTitle">
            Gallery
        </h1>
        <div class="focus-container focus-anim focus-img-container">
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg" alt="{{ config('app.name') }} Transportation Service" loading="lazy">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg" alt="{{ config('app.name') }} Transportation Service" loading="lazy">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg" alt="{{ config('app.name') }} Transportation Service" loading="lazy">
            </div>
        </div>
        <br>
        <div class="focus-container focus-anim focus-img-container">
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg" alt="{{ config('app.name') }} Transportation Service" loading="lazy">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg" alt="{{ config('app.name') }} Transportation Service" loading="lazy">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg" alt="{{ config('app.name') }} Transportation Service" loading="lazy">
            </div>
        </div>
    </div>
@endsection
