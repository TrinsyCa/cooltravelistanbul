@extends('app')
@section('title')
    Reviews {{ config('app.seperator') }}{{ config('app.name') }}
@endsection
@section('article', 'Reviews')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/reviews.css') }}">
@endsection
@section('content')
    <?php
        function timeAgo($date) {
            $now = new DateTime();
            $target = new DateTime($date);
            $diff = $now->diff($target);

            $days = (int) $diff->format('%a');

            if ($days < 7) {
                return $days === 1 ? "1 day ago" : "$days days ago";
            } elseif ($days < 365) {
                $weeks = floor($days / 7);
                return $weeks === 1 ? "1 week ago" : "$weeks weeks ago";
            } else {
                $years = floor($days / 365);
                return $years === 1 ? "1 year ago" : "$years years ago";
            }
        }
    ?>
    <header>
        <div class="header-container">
            <div class="header-content">
                <h1>What Our <br> Customers Say</h1>
                <p>Discover real customer reviews and see our service quality for yourself!</p>
                <a href="{{ url('contact') }}" class="main-btn white">Contact Sales</a>
            </div>
        </div>
    </header>
    <section class="imgSlider section-container">
        <div class="imgSlider-title">
            <h1 class="subTitle">Customer Reviews</h1>
            <a class="link-btn" href="https://www.tripadvisor.com/AttractionProductReview-g293974-d27144495-Istanbul_Private_Car_Hire_with_Driver-Istanbul.html" target="_blank">Share your thoughts <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M14.5 13.5v-7h-7m7 0l-8 8"></path></svg></a>
        </div>
        <div class="imgSlider-swiper swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box tripadvisor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#000" d="M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 0 0 4.04 10.43a5.98 5.98 0 0 0 4.075-1.6L12 19.705l1.922-2.09a5.97 5.97 0 0 0 4.072 1.598a6 6 0 0 0 6-5.998a5.98 5.98 0 0 0-1.957-4.432L24 6.648h-4.35a13.57 13.57 0 0 0-7.644-2.353M12 6.255c1.531 0 3.063.303 4.504.903C13.943 8.138 12 10.43 12 13.1c0-2.671-1.942-4.962-4.504-5.942A11.7 11.7 0 0 1 12 6.256zM6.002 9.157a4.059 4.059 0 1 1 0 8.118a4.059 4.059 0 0 1 0-8.118m11.992.002a4.057 4.057 0 1 1 .003 8.115a4.057 4.057 0 0 1-.003-8.115m-11.992 1.93a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256m11.992 0a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img src="https://ui-avatars.com/api/?format=svg&rounded=true&bold=true&length=1&size=30&color=fff&background=FF5B5B&name=Rehan S" alt="Rehan S" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Zalman A</h3>
                                <i>Geylang, Singapore • 11 contributions</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2024-12-27'); ?></date>
                        </div>
                        <br>
                        <p>
                            On our last day in Istanbul, we got an 8-hour private driver, Ali, to bring us around before our 8 pm flight back home.
                            <br><br>
                            Ali has a warm, humorous and bubbly personality which left a very memorable experience for us through his interesting sharing about the lovely places in Istanbul.
                        </p>
                        <br>
                        <a class="main-btn white" href="https://www.tripadvisor.com/ShowUserReviews-g293974-d23281665-r986633093-Istanbul_Private_Daily_Tours_Cool_Travel_Istanbul-Istanbul.html?m=19905" target="_blank">View Post</a>
                        <br>
                        <a class="main-btn white" href="https://www.tripadvisor.com/UserReviewEdit-g293974-d27144495-Istanbul_Private_Car_Hire_with_Driver-Istanbul.html" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 128 128"><rect width="128" height="128" fill="none"/><path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.3 74.3 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.2 36.2 0 0 1-13.93 5.5a41.3 41.3 0 0 1-15.1 0A37.2 37.2 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.3 38.3 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.3 34.3 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.2 61.2 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38"/><path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.2 61.2 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.3 34.3 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21"/><path fill="#f8bd00" d="M3.26 51.5a63 63 0 0 1 5.5-15.9l20.73 16.09a38.3 38.3 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9"/><path fill="#587dbd" d="M65.27 52.15h59.52a74.3 74.3 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68"/><path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.2 37.2 0 0 0 14.08 6.08a41.3 41.3 0 0 0 15.1 0a36.2 36.2 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.7 63.7 0 0 1 8.75 92.4"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img src="https://ui-avatars.com/api/?format=svg&rounded=true&bold=true&length=1&size=30&color=fff&background=0288D1&name=Mustafa+Oudeh" alt="Mustafa Oudeh" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Mustafa Oudeh</h3>
                                <i>7 Review</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2024-12-15'); ?></date>
                        </div>
                        <br>
                        <p>Wonderful!! I truly had some of the best time With Cool Travel Istanbul. I tried it with taxis And with Cool Travel it’s truly worth the money it’s truly worth the time and Ali is absolutely amazing. He could take you to all the best spots all the genuine Turkish foods and most of all he is kind and generous. Thank you, Ali.</p>
                        <br>
                        <a class="main-btn white" href="https://g.page/r/CXVirz01AnCzEAE/review" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box tripadvisor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#000" d="M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 0 0 4.04 10.43a5.98 5.98 0 0 0 4.075-1.6L12 19.705l1.922-2.09a5.97 5.97 0 0 0 4.072 1.598a6 6 0 0 0 6-5.998a5.98 5.98 0 0 0-1.957-4.432L24 6.648h-4.35a13.57 13.57 0 0 0-7.644-2.353M12 6.255c1.531 0 3.063.303 4.504.903C13.943 8.138 12 10.43 12 13.1c0-2.671-1.942-4.962-4.504-5.942A11.7 11.7 0 0 1 12 6.256zM6.002 9.157a4.059 4.059 0 1 1 0 8.118a4.059 4.059 0 0 1 0-8.118m11.992.002a4.057 4.057 0 1 1 .003 8.115a4.057 4.057 0 0 1-.003-8.115m-11.992 1.93a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256m11.992 0a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img class="rounded" src="/img/reviews/Terrorkks.webp" alt="Terrorkks" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Terrorkks</h3>
                                <i>Singapore • 2 contributions</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2025-01-20'); ?></date>
                        </div>
                        <br>
                        <p>
                            Our trip to Istanbul was made so much better and more pleasant because we were lucky to have such a great driver in Ali! Not only was he a gentleman, he was also very helpful and honest. He helpfully suggested places for us to take Insta worthy photos knowing we were into photography and suggested helpful tips along the way of places to visit and see! I would highly recommend his services if you are in Istanbul! I will be back to look for Ali again! 👍🏻👍🏻👍🏻😊
                        </p>
                        <br>
                        <a class="main-btn white" href="https://www.tripadvisor.com/ShowUserReviews-g293974-d23281665-r989900458-Istanbul_Private_Daily_Tours_Cool_Travel_Istanbul-Istanbul.html?m=19905" target="_blank">View Post</a>
                        <br>
                        <a class="main-btn white" href="https://www.tripadvisor.com/UserReviewEdit-g293974-d27144495-Istanbul_Private_Car_Hire_with_Driver-Istanbul.html" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 128 128"><rect width="128" height="128" fill="none"/><path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.3 74.3 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.2 36.2 0 0 1-13.93 5.5a41.3 41.3 0 0 1-15.1 0A37.2 37.2 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.3 38.3 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.3 34.3 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.2 61.2 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38"/><path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.2 61.2 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.3 34.3 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21"/><path fill="#f8bd00" d="M3.26 51.5a63 63 0 0 1 5.5-15.9l20.73 16.09a38.3 38.3 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9"/><path fill="#587dbd" d="M65.27 52.15h59.52a74.3 74.3 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68"/><path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.2 37.2 0 0 0 14.08 6.08a41.3 41.3 0 0 0 15.1 0a36.2 36.2 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.7 63.7 0 0 1 8.75 92.4"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img src="/img/reviews/Aamer-Abdul-Jaleel.webp" alt="Aamer Abdul-Jaleel" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Aamer Abdul-Jaleel</h3>
                                <i>Local Guide • 17 Review</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2024-12-08'); ?></date>
                        </div>
                        <br>
                        <p>Cool Travel team are highly professional, reliable and provide ease and comfort knowing all the travel needs are in safe and trustworthy hands. The entire team from airport pickup and drop off, to a full 8 hour city tour in a Mercedes Benz Maybach with Netflix on the big screen unit was all smiles for my kids. We really enjoyed every interaction with the team as they give it a personal touch to make your visit to Istanbul a very pleasant and memorable one! Great experience 👍🏼</p>
                        <br>
                        <a class="main-btn white" href="https://g.page/r/CXVirz01AnCzEAE/review" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box tripadvisor">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#000" d="M12.006 4.295c-2.67 0-5.338.784-7.645 2.353H0l1.963 2.135a5.997 5.997 0 0 0 4.04 10.43a5.98 5.98 0 0 0 4.075-1.6L12 19.705l1.922-2.09a5.97 5.97 0 0 0 4.072 1.598a6 6 0 0 0 6-5.998a5.98 5.98 0 0 0-1.957-4.432L24 6.648h-4.35a13.57 13.57 0 0 0-7.644-2.353M12 6.255c1.531 0 3.063.303 4.504.903C13.943 8.138 12 10.43 12 13.1c0-2.671-1.942-4.962-4.504-5.942A11.7 11.7 0 0 1 12 6.256zM6.002 9.157a4.059 4.059 0 1 1 0 8.118a4.059 4.059 0 0 1 0-8.118m11.992.002a4.057 4.057 0 1 1 .003 8.115a4.057 4.057 0 0 1-.003-8.115m-11.992 1.93a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256m11.992 0a2.128 2.128 0 0 0 0 4.256a2.128 2.128 0 0 0 0-4.256"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img class="rounded" src="/img/reviews/Ashmini-S.webp" alt="Ashmini S" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Ashmini S</h3>
                                <i>26 contributions</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2024-12-23'); ?></date>
                        </div>
                        <br>
                        <p>Our driver Ali fetched us from the hotel in Istanbul for a full day drive around the city He was so good and so friendly and knowledgeable. He made our experience really fantastic. Will highly recommend 😁👍</p>
                        <br>
                        <a class="main-btn white" href="https://www.tripadvisor.com/ShowUserReviews-g293974-d23281665-r985756098-Istanbul_Private_Daily_Tours_Cool_Travel_Istanbul-Istanbul.html?m=19905" target="_blank">View Post</a>
                        <br>
                        <a class="main-btn white" href="https://www.tripadvisor.com/UserReviewEdit-g293974-d27144495-Istanbul_Private_Car_Hire_with_Driver-Istanbul.html" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 128 128"><rect width="128" height="128" fill="none"/><path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.3 74.3 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.2 36.2 0 0 1-13.93 5.5a41.3 41.3 0 0 1-15.1 0A37.2 37.2 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.3 38.3 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.3 34.3 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.2 61.2 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38"/><path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.2 61.2 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.3 34.3 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21"/><path fill="#f8bd00" d="M3.26 51.5a63 63 0 0 1 5.5-15.9l20.73 16.09a38.3 38.3 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9"/><path fill="#587dbd" d="M65.27 52.15h59.52a74.3 74.3 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68"/><path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.2 37.2 0 0 0 14.08 6.08a41.3 41.3 0 0 0 15.1 0a36.2 36.2 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.7 63.7 0 0 1 8.75 92.4"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img src="https://ui-avatars.com/api/?format=svg&rounded=true&bold=true&length=1&size=30&color=fff&background=7B1FA2&name=Busra" alt="Busra" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Busra</h3>
                                <i>Local Guide • 10 Review</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2025-01-14'); ?></date>
                        </div>
                        <br>
                        <p>Thanks a lot for everything and your hospitality. Highly recommended!</p>
                        <br>
                        <a class="main-btn white" href="https://g.page/r/CXVirz01AnCzEAE/review" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 128 128"><rect width="128" height="128" fill="none"/><path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.3 74.3 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.2 36.2 0 0 1-13.93 5.5a41.3 41.3 0 0 1-15.1 0A37.2 37.2 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.3 38.3 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.3 34.3 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.2 61.2 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38"/><path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.2 61.2 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.3 34.3 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21"/><path fill="#f8bd00" d="M3.26 51.5a63 63 0 0 1 5.5-15.9l20.73 16.09a38.3 38.3 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9"/><path fill="#587dbd" d="M65.27 52.15h59.52a74.3 74.3 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68"/><path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.2 37.2 0 0 0 14.08 6.08a41.3 41.3 0 0 0 15.1 0a36.2 36.2 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.7 63.7 0 0 1 8.75 92.4"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img src="/img/reviews/Kökay-Baş.webp" alt="Kökay Baş" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Kökay Baş</h3>
                                <i>Local Guide • 350 Review</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2024-08-10'); ?></date>
                        </div>
                        <br>
                        <p>The leading agency in tourism, excellent transfers and top customer satisfaction.</p>
                        <br>
                        <a class="main-btn white" href="https://g.page/r/CXVirz01AnCzEAE/review" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 128 128"><rect width="128" height="128" fill="none"/><path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.3 74.3 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.2 36.2 0 0 1-13.93 5.5a41.3 41.3 0 0 1-15.1 0A37.2 37.2 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.3 38.3 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.3 34.3 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.2 61.2 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38"/><path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.2 61.2 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.3 34.3 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21"/><path fill="#f8bd00" d="M3.26 51.5a63 63 0 0 1 5.5-15.9l20.73 16.09a38.3 38.3 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9"/><path fill="#587dbd" d="M65.27 52.15h59.52a74.3 74.3 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68"/><path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.2 37.2 0 0 0 14.08 6.08a41.3 41.3 0 0 0 15.1 0a36.2 36.2 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.7 63.7 0 0 1 8.75 92.4"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img src="/img/reviews/Çınar-Travel-Tour-of-Turkey.webp" alt="Çınar Travel Tour of Turkey" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Çınar Travel Tour of Turkey</h3>
                                <i>103 Review</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2024-08-10'); ?></date>
                        </div>
                        <br>
                        <p>Premium VIP service. Everything was flawless.</p>
                        <br>
                        <a class="main-btn white" href="https://g.page/r/CXVirz01AnCzEAE/review" target="_blank">Leave your review too!</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviewBox">
                        <div class="right-top-of-box">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 128 128"><rect width="128" height="128" fill="none"/><path fill="#fff" d="M44.59 4.21a63.28 63.28 0 0 0 4.33 120.9a67.6 67.6 0 0 0 32.36.35a57.13 57.13 0 0 0 25.9-13.46a57.44 57.44 0 0 0 16-26.26a74.3 74.3 0 0 0 1.61-33.58H65.27v24.69h34.47a29.72 29.72 0 0 1-12.66 19.52a36.2 36.2 0 0 1-13.93 5.5a41.3 41.3 0 0 1-15.1 0A37.2 37.2 0 0 1 44 95.74a39.3 39.3 0 0 1-14.5-19.42a38.3 38.3 0 0 1 0-24.63a39.25 39.25 0 0 1 9.18-14.91A37.17 37.17 0 0 1 76.13 27a34.3 34.3 0 0 1 13.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.2 61.2 0 0 0 87.2 4.59a64 64 0 0 0-42.61-.38"/><path fill="#e33629" d="M44.59 4.21a64 64 0 0 1 42.61.37a61.2 61.2 0 0 1 20.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.3 34.3 0 0 0-13.64-8a37.17 37.17 0 0 0-37.46 9.74a39.25 39.25 0 0 0-9.18 14.91L8.76 35.6A63.53 63.53 0 0 1 44.59 4.21"/><path fill="#f8bd00" d="M3.26 51.5a63 63 0 0 1 5.5-15.9l20.73 16.09a38.3 38.3 0 0 0 0 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 0 1-5.5-40.9"/><path fill="#587dbd" d="M65.27 52.15h59.52a74.3 74.3 0 0 1-1.61 33.58a57.44 57.44 0 0 1-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0 0 12.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68"/><path fill="#319f43" d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0 0 44 95.74a37.2 37.2 0 0 0 14.08 6.08a41.3 41.3 0 0 0 15.1 0a36.2 36.2 0 0 0 13.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 0 1-25.9 13.47a67.6 67.6 0 0 1-32.36-.35a63 63 0 0 1-23-11.59A63.7 63.7 0 0 1 8.75 92.4"/></svg>
                        </div>
                        <div class="reviewProfile">
                        <img src="/img/reviews/Fero-Fero.webp" alt="Fero Fero" loading="lazy">
                            <div class="reviewProfileDetails">
                                <h3>Fero Fero</h3>
                                <i>Local Guide • 73 Review</i>
                            </div>
                        </div>
                        <div class="reviewDate">
                            <span class="stars">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><g fill="none"><path fill="url(#fluentColorStar200)" d="M9.104 2.899a1 1 0 0 1 1.794 0l1.93 3.911l4.317.627a1 1 0 0 1 .554 1.706l-3.124 3.045l.738 4.299a1 1 0 0 1-1.451 1.054l-3.86-2.03l-3.862 2.03a1 1 0 0 1-1.45-1.054l.737-4.3l-3.124-3.044a1 1 0 0 1 .554-1.706l4.317-.627z"/><defs><linearGradient id="fluentColorStar200" x1="18" x2="1.55" y1="18" y2="2.477" gradientUnits="userSpaceOnUse"><stop stop-color="#ff6f47"/><stop offset="1" stop-color="#ffcd0f"/></linearGradient></defs></g></svg>
                            </span>
                            <date><?php echo timeAgo('2024-11-15'); ?></date>
                        </div>
                        <br>
                        <a class="main-btn white" href="https://g.page/r/CXVirz01AnCzEAE/review" target="_blank">Leave your review too!</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <div class="space">
        <hr>
    </div>
    <section class="sales section-container">
        <div class="sales-container">
            <div class="sales-title">
                <h1 class="subTitle">Plan your trip now! Reach out to us instantly on <span class="magicText">WhatsApp</span></h1>
            </div>
            <div class="sales-details">
                <a target="_blank" href="https://wa.me/905301267153?text=Hi, I want to take a book. I'm coming from {{ config('app.name') }}." class="bigMainBtn">Contact Us</a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script src="{{ asset('scripts/reviews.js') }}"></script>
@endsection
