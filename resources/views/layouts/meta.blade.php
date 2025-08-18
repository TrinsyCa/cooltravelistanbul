<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title', config('app.name'))</title>
<link rel="shortcut icon" href="{{ asset('assets/img/logo/shortcut-icon.webp') }}?v={{ filemtime(public_path('assets/img/logo/shortcut-icon.webp')) }}">


<meta name="keywords" content="{{ config('app.name') }}, luxury airport transfer, VIP transportation, Istanbul private tour, Mercedes Vito transfer, Bursa tour, Sapanca tour, Kartepe tour, Istanbul chauffeur service, best travel service Istanbul, safe travel in Turkey, premium car hire Istanbul, airport transfer Istanbul, business travel Istanbul">
<meta property="og:keywords" content="{{ config('app.name') }}, luxury airport transfer, VIP transportation, Istanbul private tour, Mercedes Vito transfer, Bursa tour, Sapanca tour, Kartepe tour, Istanbul chauffeur service, best travel service Istanbul, safe travel in Turkey, premium car hire Istanbul, airport transfer Istanbul, business travel Istanbul">


<meta name="description" content="{{ config('app.name') }} offers luxury VIP airport transfers and private tours in Istanbul, Bursa, and Sapanca. Travel in comfort with our Mercedes Maybach Vito, featuring Wi-Fi, star-light ceilings, and Android TV. Book now for a safe, stylish, and premium experience!">
<meta property="og:description" content="{{ config('app.name') }} offers luxury VIP airport transfers and private tours in Istanbul, Bursa, and Sapanca. Travel in comfort with our Mercedes Maybach Vito, featuring Wi-Fi, star-light ceilings, and Android TV. Book now for a safe, stylish, and premium experience!">
<meta name="twitter:description" content="{{ config('app.name') }} offers luxury VIP airport transfers and private tours in Istanbul, Bursa, and Sapanca. Travel in comfort with our Mercedes Maybach Vito, featuring Wi-Fi, star-light ceilings, and Android TV. Book now for a safe, stylish, and premium experience!">


<meta property="article:section" content="@yield('article', 'Home')">
<meta name="author" content="{{ config('app.name') }}">
<meta property="og:title" content="{{ config('app.name') }}">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:type" content="article">
<meta property="og:card" content="summary_large_image">
<meta property="og:image" content="{{ asset('assets/img/logo/logo.webp') }}?v={{ filemtime(public_path('assets/img/logo/logo.webp')) }}">
<meta name="theme-color" content="#FFFFFF">
<meta name="twitter:title" content="{{ config('app.name') }}">
<meta name="twitter:creator" content="{{ config('app.name') }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ config('app.name') }}">
<meta name="twitter:author" content="{{ config('app.name') }}">
<meta name="twitter:image" content="{{ asset('assets/img/logo/logo.webp') }}?v={{ filemtime(public_path('assets/img/logo/logo.webp')) }}">

<meta name="base_path" content="{{ base_path() }}">

<meta property="og:title" content="{{ config('app.name') }}">
<meta name="twitter:title" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ URL::to('/') }}">
<meta name="twitter:url" content="{{ URL::to('/') }}">


<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- Google Analytics --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LKB2L1K5RW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LKB2L1K5RW');
</script>
{{-- Google Analytics --}}

{{-- Cookies Banner with Cookiebot --}}
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="af87f4c4-6482-41b7-bfd2-3772caadf9c2" type="text/javascript" async></script>
{{-- Cookies Banner with Cookiebot --}}
