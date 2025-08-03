@extends('app')
@section('article', 'Home')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('css/extensions/faq.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('css/extensions/focus.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('css/extensions/safety.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('css/extensions/jobcard.css') }}" media="print" onload="this.media='all'">
@endsection
@section('content')
    <header>
        <div class="header-container">
            <div class="header-content">
                <h1>{{ config('app.name') }}</h1>
                <h2>History and More</h2>
                <button class="main-btn link-btn" href="#products" target="_self"><span>Discover Istanbul Now</span></button>
            </div>
        </div>
        <div class="header-video">
            <div class="header-video-container">
                <video poster="{{ asset('assets/img/header-video/cover.webp') }}?v={{ filemtime(public_path('assets/img/header-video/cover.webp')) }}" fetchpriority="high" autoplay muted loop id="header-bg-video" loading="early">
                    <source src="{{ asset('/assets/img/header-video/istanbul-city-tours-1.webm') }}?v={{ filemtime(public_path('/assets/img/header-video/istanbul-city-tours-1.webm')) }}">
                </video>
            </div>
        </div>
    </header>
    <div class="space"></div>
    @include('layouts.product-list')
    <div class="space"></div>
    <section class="jobCard section-container swiper mySwiper">
        <div class="jobCard-container swiper-wrapper">
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3" />
                            <stop offset="100%" stop-color="#ae97ff" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradient-icon)" d="M9.368 1.222a1 1 0 0 0-1.414.15L5.058 5h1.28l2.397-3.004l.77.629L7.575 5h1.288l1.417-1.744l1.718 1.403L11.7 5h.3a3 3 0 0 1 .88.131a1 1 0 0 0-.25-1.245zM3 5.5a.5.5 0 0 1 .5-.5h.558l.795-1H3.5A1.5 1.5 0 0 0 2 5.5v6A2.5 2.5 0 0 0 4.5 14H12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H3.5a.5.5 0 0 1-.5-.5m7.5 4.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1 0-1"/>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <b>Online Payment</b>
                    <p>You can instantly reserve your tour with our Stripe payment integration.</p>
                    <a href="https://api.whatsapp.com/send?phone={{ str_replace([' ', '(', ')','+'], '', config('app.phone')) }}" target="_blank">
                        <span>Reserve Now</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <defs>
                                <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#5962b3" />
                                <stop offset="100%" stop-color="#ae97ff" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#gradient-icon)" d="m12 2l.324.005a10 10 0 1 1-.648 0zm.613 5.21a1 1 0 0 0-1.32 1.497L13.584 11H8l-.117.007A1 1 0 0 0 8 13h5.584l-2.291 2.293l-.083.094a1 1 0 0 0 1.497 1.32l4-4l.073-.082l.064-.089l.062-.113l.044-.11l.03-.112l.017-.126L17 12l-.007-.118l-.029-.148l-.035-.105l-.054-.113l-.071-.111a1 1 0 0 0-.097-.112l-4-4z"/>
                        </svg>
                    </a>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3" />
                            <stop offset="100%" stop-color="#ae97ff" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradient-icon)" d="M404.7 79.78h-2.8c-7.5.26-15.8 1.73-24.8 4.3c-18 5.16-38.4 14.56-59.3 25.78c-41.9 22.4-85.8 52-121.5 68.6c-26.4 12.4-59.3 20.4-89.8 27.5s-58.95 13.4-74.36 20.6c-7.13 3.4-10.9 6.9-12.71 9.9c-1.8 2.9-2.1 5.2-1.44 8.4c1.32 6.4 8.57 15.4 18.49 21.9l3.29 2.1c162.63-2.3 289.43-13.7 387.73-52.6c2.1-17.6 6.7-34.7 16.5-48.5v-.1l.1-.1c24.5-32.2 8.9-72.58-22.4-84.89c-5-1.95-10.7-2.91-17-2.93zm21.9 185.12c-44.2 25.1-103.8 37-169.2 41.2c-68.7 4.4-143.7.1-213.52-7.8l1.89 14c31.19 3.2 98.53 11.8 172.83 11.5c77.2-.3 159.6-11.3 208.6-46.2c-.2-4.1-.4-8.3-.6-12.7m7.1 30.2c-46.9 31.5-113.8 42.9-179.9 45.8c44.7 39 89.3 55.1 127.3 59.1c45.2 4.8 81.5-8.7 94.8-19.8c13-10.8 17.5-19.5 18.3-26.2c.7-6.8-2-13.3-8.2-20.5c-11.3-13.4-33.5-26.4-52.3-38.4"/>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <b>Professional Drivers</b>
                    <p>Our drivers are experienced, courteous, and dedicated to ensuring your safety and comfort throughout your journey.</p>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3" />
                            <stop offset="100%" stop-color="#ae97ff" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradient-icon)" d="M50.001 0C33.65 0 20.25 13.36 20.25 29.666c0 6.318 2.018 12.19 5.433 17.016L46.37 82.445c2.897 3.785 4.823 3.066 7.232-.2l22.818-38.83c.46-.834.822-1.722 1.137-2.629a29.3 29.3 0 0 0 2.192-11.12C79.75 13.36 66.354 0 50.001 0m0 13.9c8.806 0 15.808 6.986 15.808 15.766S58.807 45.43 50.001 45.43c-8.805 0-15.81-6.982-15.81-15.763S41.196 13.901 50 13.901"/><path fill="currentColor" d="m68.913 48.908l-.048.126l.042-.115zM34.006 69.057C19.88 71.053 10 75.828 10 82.857C10 92.325 26.508 100 50 100s40-7.675 40-17.143c0-7.029-9.879-11.804-24.004-13.8l-1.957 3.332C74.685 73.866 82 76.97 82 80.572c0 5.05-14.327 9.143-32 9.143s-32-4.093-32-9.143c-.001-3.59 7.266-6.691 17.945-8.174z" color="currentColor"/>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <b>Expertly Curated Tours</b>
                    <p>Our tours are designed to showcase the best destinations, balancing sightseeing, adventure, and local experiences.</p>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="jobBox">
                <div class="jobBox-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <defs>
                            <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#5962b3"/>
                            <stop offset="100%" stop-color="#ae97ff"/>
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/>
                            <path fill="url(#gradient-icon)" d="M11.298 2.195a2 2 0 0 1 1.232-.055l.172.055l7 2.625a2 2 0 0 1 1.291 1.708l.007.165v5.363a9 9 0 0 1-4.709 7.911l-.266.139l-3.354 1.677a1.5 1.5 0 0 1-1.198.062l-.144-.062l-3.354-1.677a9 9 0 0 1-4.97-7.75l-.005-.3V6.693a2 2 0 0 1 1.145-1.808l.153-.065zm4.135 6.434l-4.598 4.598l-1.768-1.768a1 1 0 0 0-1.414 1.415l2.404 2.404a1.1 1.1 0 0 0 1.556 0l5.234-5.235a1 1 0 1 0-1.414-1.414"/>
                        </g>
                    </svg>
                </div>
                <div class="jobBox-details">
                    <b>Safety & Reliability</b>
                    <p>Your safety comes first strict standards, well maintained vehicles, worry free travel.</p>
                    <button onclick="window.location.href='/services/'">
                        <span>Safe Travel</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <defs>
                                <linearGradient id="gradient-icon" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#5962b3" />
                                <stop offset="100%" stop-color="#ae97ff" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#gradient-icon)" d="m12 2l.324.005a10 10 0 1 1-.648 0zm.613 5.21a1 1 0 0 0-1.32 1.497L13.584 11H8l-.117.007A1 1 0 0 0 8 13h5.584l-2.291 2.293l-.083.094a1 1 0 0 0 1.497 1.32l4-4l.073-.082l.064-.089l.062-.113l.044-.11l.03-.112l.017-.126L17 12l-.007-.118l-.029-.148l-.035-.105l-.054-.113l-.071-.111a1 1 0 0 0-.097-.112l-4-4z"/>
                        </svg>
                    </button>
                </div>
            </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <div class="space"></div>
    <div class="space"></div>
    <section class="safety section-container">
        <div class="safety-container">
            <div class="side">
                <h1 class="subTitle">Private Vito Service</h1>
            </div>
            <div class="side">
                <p>Experience luxury and comfort with Cool Travel Istanbul's Private Vito Service! Our professional chauffeur driven VIP vehicles offer top-notch service for airport transfers, city tours, and private events. Enjoy a personalized journey designed just for you with an exclusive experience!</p>
                <a href="services/">Learn about services</a>
            </div>
        </div>
        <div class="safety-img">
            <div class="safety-img-container blur-load" style="background-image: url(/assets/img/nuru-photos/low/calsan.spay.png);">
                <img src="/assets/img/cars/vito/01-01.webp" alt="Istanbul Private Car Hire" loading="lazy">
                <article>Private VIP Maybach Mercedes Vito</article>
            </div>
        </div>
    </section>
    <br>
    <div class="space"></div>
    <div class="focus section-container">
        <div class="focus-container focus-anim">
            <div class="focus-detail">
                <h1 class="subTitle">
                    Exceptional Service, Unmatched Quality
                </h1>
                <p>At <strong>Cool Travel Istanbul</strong>, we don’t just provide transportation, we create an experience defined by luxury, comfort, and reliability.</p>
                <p>From the moment you step into one of our <strong>Mercedes Maybach Vito</strong> vehicles, you’ll feel the difference. Designed for maximum comfort, our fleet features <strong>reclining leather seats, ambient starry LED ceilings, Android TV, and top-tier sound systems</strong>, ensuring that every journey is smooth, enjoyable, and stress-free.</p>
                <p>Our commitment to excellence goes beyond the vehicles we use. We take pride in offering <strong>professional, highly trained chauffeurs</strong> who are not just drivers but dedicated service professionals. Punctual, courteous, and experienced, they are always ready to provide a seamless and personalized experience.</p>
                <p><strong>Safety and reliability</strong> are at the core of our service. Our vehicles are meticulously maintained and regularly inspected to meet the highest safety standards. With real-time flight tracking, 24/7 customer support, and a focus on hassle-free travel, we ensure that your journey is smooth from start to finish.</p>
                <p>Whether you are booking an <strong>airport transfer, a guided city tour, or a scenic escape to Bursa, Uludağ, or Sapanca</strong>, we guarantee <strong>premium service, privacy, and unmatched comfort</strong>. </p>
                <p>At <strong>Cool Travel Istanbul</strong>, luxury is not an option, it’s the standard.</p>
                <div class="focus-buttons">
                    <button class="main-btn" onclick="wpLink('Hi, I Want To Reserve My Booking');">Feel The Quality Now</button>
                </div>
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <img src="/assets/img/beautiful-woman-walks-at-istiklal-street-istambul-2025-01-16-10-59-23-utc.jpg" alt="Istanbul City Tour" loading="lazy">
            </div>
        </div>
    </div>
    <br>
    <div class="space">
        <hr class="hr-secondary">
    </div>
    <div class="focus section-container">
        <h1 class="subTitle">
            Seeking a Smooth & Enjoyable Journey? Istanbul Awaits You!
        </h1>
        <div class="focus-container focus-anim focus-img-container">
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <article><h2>Hagia Sophia</h2></article>
                <img src="/assets/img/gallery/hagia-sophia-cathedral-church-istanbul-2024-10-21-02-59-14-utc.jpg" alt="Hagia Sophia Tour" loading="lazy">
            </div>
            <div class="focus-img blur-load" style="background-image: url(/assets/img/cars/vito/low/00-01.webp);">
                <article><h2>Ortaköy</h2></article>
                <img src="/assets/img/gallery/exterior-of-ortakoy-mosque-and-bhosphorus-bridge-a-2024-06-12-01-16-04-utc.jpg" alt="Ortaköy Tour" loading="lazy">
            </div>
        </div>
        <br>
        <div class="space">
            <button class="main-btn" onclick="window.location.href='/gallery/'">Show Gallery</button>
        </div>
    </div>
    @include('layouts.faq')
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/three/examples/js/loaders/GLTFLoader.js" defer></script>
    <script src="scripts/homepage.js" defer></script>
    <script src="scripts/faq.js" defer></script>
@endsection
