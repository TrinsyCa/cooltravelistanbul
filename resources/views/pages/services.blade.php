@extends('app')
@section('title')
    Services {{ config('app.seperator') }}{{ config('app.name') }}
@endsection
@section('article', 'Services')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/extensions/safety.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/extensions/focus.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/services.css') }}">
@endsection
@section('content')
    <section class="safety section-container">
        <div class="safety-container">
            <div class="side">
                <h1 class="subTitle">Premium Travel Services</h1>
            </div>
            <div class="side">
                <p>{{ config('app.name') }} offers top-tier VIP transportation services, from Istanbul, Bursa, Sapanca-Kartepe daily city tours to excursions, and airport transfers. Travel in ultimate comfort with our custom-designed Maybach Vito vehicles!</p>
            </div>
        </div>
        <div class="safety-img">
            <div class="safety-img-container blur-load" style="background-image: url(/assets/img/cars/vito/low/01-02.webp);">
                <img src="/assets/img/cars/vito/01-02.webp" alt="Private Vito" loading="lazy">
            </div>
        </div>
    </section>
    <div class="space" id="transfer"></div>
    <div class="space"></div>
    <div class="focus section-container">
        <div class="focus-container focus-anim">
            <div class="focus-detail">
                <h1 class="subTitle">
                    VIP Airport Transfers
                </h1>
                <p>
                    Arriving in a new city should be stress-free and comfortable. Our VIP airport transfer service ensures that your journey begins smoothly from the moment you land. Whether you're arriving at Istanbul Airport (IST) or Sabiha Gökçen Airport (SAW), our professional chauffeur will be waiting for you with a personalized name sign, ready to escort you to your luxurious Maybach Vito.<br><br>
                    Our VIP vehicles are equipped with plush reclining seats, starlight ceilings, Android TV, onboard refreshments, and full climate control, ensuring a first-class experience from start to finish. Avoid the hassle of taxis and crowded shuttles—travel in style and privacy, with direct door-to-door service to your hotel, business meeting, or any destination in Istanbul. Experience seamless, punctual, and luxurious transfers with Cool Travel Istanbul
                </p>
                <div class="focus-buttons longBtns">
                    <button class="main-btn" onclick="wpLink('Hi, I Want To Reserve Istanbul Airport Transfer');">Book Istanbul Airport Transfer</button>
                    <button class="main-btn" onclick="wpLink('Hi, I Want To Reserve Sabiha Gökçen Airport Transfer');">Book Sabiha Gökçen Airport Transfer</button>
                </div>
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/cars/vito/00-01.webp" alt="Private Vito" loading="lazy">
            </div>
        </div>
    </div>
    <div class="space">
    </div>
    <div class="focus section-container">
        <div class="focus-container focus-anim-r">
            <div class="focus-img blur-load" style="background-image: url(/assets/img/nuru-photos/low/soyut.safety2.png);">
                <img src="/assets/img/portrait-of-mature-businessman-wearing-telephone-h-2024-10-20-13-45-47-utc.jpg" alt="Call Us" loading="lazy">
            </div>
            <div class="focus-detail">
                <h1 class="subTitle">
                    Call Us & Book Your Trip Now
                </h1>
                <p>
                    Your luxury travel experience is just one call away! Whether you need a VIP airport transfer, a private city tour, or a scenic getaway to Bursa, Uludağ, Sapanca, or Kartepe, we are here to provide a seamless and comfortable journey. Our professional team is available 24/7 to assist you with bookings, special requests, and personalized travel plans.
                    📲 Contact us now and let us take care of the rest because every journey deserves luxury, comfort, and exclusivity!
                </p>
                <div class="focus-buttons">
                    <button class="main-btn" onclick="callLink('16697775127');">Call Us</button>
                    <button class="main-btn" onclick="wpLink('Hi, I Want To Reserve My Trip!');">Whatsapp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="space"></div>
@endsection
