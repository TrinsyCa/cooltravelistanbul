@extends('app')
@section('title')
    Gallery {{ config('app.seperator') }}{{ config('app.name') }}
@endsection
@section('article', 'Gallery')
@section('styles')
<link rel="stylesheet" href="{{ asset('/css/extensions/focus.css') }}">
@endsection
@section('content')
    <section class="notification" id="notification">
        <button id="closeNotification">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496"/></svg>
        </button>
        <div class="notification-container">
            <div class="notification-content">
                <p id="notificationText"></p>
            </div>
        </div>
    </section>
    <div class="space"></div>
    <div class="focus gallery section-container">
        <h1 class="subTitle">
            Gallery
        </h1>
        <div class="focus-container focus-anim focus-img-container">
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg">
            </div>
        </div>
        <br>
        <div class="focus-container focus-anim focus-img-container">
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg">
            </div>
        </div>
    </div>
@endsection
