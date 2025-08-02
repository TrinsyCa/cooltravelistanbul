@extends('app')
@section('title')
    About {{ config('app.seperator') }}{{ config('app.name') }}
@endsection
@section('article', 'About')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/css/extensions/safety.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/extensions/focus.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/safety.css') }}">
@endsection
@section('content')
    <section class="safety section-container">
        <div class="safety-container bigText">
            <div class="side">
                <h1 class="bigTitle">About Us</h1>
            </div>
            <div class="side">
                <p>
                    Cool Travel Istanbul is a leading luxury transportation and tour service, offering VIP airport transfers and private tours across Turkey. Our Mercedes Maybach Vito vehicles provide ultimate comfort, featuring <b>star-light ceilings, leather seats, Wi-Fi, and Android TV</b> for a premium travel experience.
                    <br><br>
                    With <b>professional English-speaking drivers</b>, punctual service, and a commitment to safety, we ensure a seamless and stress-free journey. Whether you're exploring Istanbul, Bursa, or Sapanca, we personalize every trip to suit your needs.
                </p>
            </div>
        </div>
        <div class="safety-img">
            <div class="safety-img-container blur-load" style="background-image: url(/assets/img/nuru-photos/low/spayai.iot.png);">
                <img src="/assets/img/nuru-photos/spayai.iot.png" loading="lazy">
            </div>
        </div>
    </section>
    <div class="space"></div>
    <div class="space"></div>
    <div class="focus section-container">
        <div class="focus-container focus-anim">
            <div class="focus-detail">
                <h1 class="subTitle">
                    Our goals and vision
                </h1>
                <p>
                    At {{ config('app.name') }}, our vision is to redefine luxury travel in Turkey by setting new standards in <b>comfort, safety, and exclusivity.</b> We aim to provide the most <b>premium, reliable, and unforgettable</b> travel experiences for our guests.
                    <br><br>
                    Our primary goals include:
                    <br><br>
                    Delivering first-class transportation services with high-end, fully equipped Mercedes Maybach Vito vehicles.
                    Expanding our tour offerings to include new destinations and customized travel experiences across Turkey.
                    Ensuring professionalism and excellence by providing top-tier customer service with well-trained, <b>English-speaking drivers</b>.
                    Enhancing our airport transfer services with real-time flight tracking, ensuring seamless pickups and drop-offs.
                    Offering tailor-made tours to meet the unique preferences of each traveler, from business professionals to families and adventure seekers.
                    Our mission is to make every journey not just a trip, but a luxurious, stress-free, and truly memorable experience. Whether you’re discovering Istanbul’s rich history, enjoying the stunning views of Bursa, or exploring the scenic landscapes of Sapanca and Kartepe, we are dedicated to delivering the highest quality travel services.
                    <br><br>
                    {{ config('app.name') }} is more than a transportation company, we create journeys that inspire.
                </p>
                <div class="focus-buttons">
                    <button class="main-btn" onclick="wpLink();">Book Now</button>
                </div>
            </div>
            <div class="focus-img blur-load " style="background-image: url(/assets/img/gallery/istanbul-turkey-the-bosphorus-bridge-and-the-ort-2025-01-08-02-31-14-utc.jpg);">
                <img src="/assets/img/gallery/istanbul-turkey-the-bosphorus-bridge-and-the-ort-2025-01-08-02-31-14-utc.jpg" loading="lazy">
            </div>
        </div>
    </div>
    <div class="space"></div>
@endsection
