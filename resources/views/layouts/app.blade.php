<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecospan - Fertilizer manufacturing company in West Bengal | Premium micro nutrient for plant manufacturing company</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel='stylesheet' href='{{ asset('assets/vendor/icofont/icofont.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets/vendor/animate/animate.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets/vendor/venobox/venobox.min.css') }}'>
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/sharp-regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/sharp-solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <!-- OVERLAY -->
    <div class="rv-overlay"></div>
    <!-- OVERLAY -->

    <!-- SEARCH FORM -->
    <div class="rv-search-modal">
        <form action="#">
            <input type="search" name="search" id="rv-search-modal-input" placeholder="Search Here">
            <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
        </form>

        <button class="rv-search-modal-close-btn"><i class="fa-regular fa-xmark"></i></button>
    </div>
    <!-- SEARCH FORM -->

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    <!-- JS FILES -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/fslightbox/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/vendor/mixitup/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/gsap/gsap-scroll-trigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/split-type/split-type-0.3.3.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/lenis/lenis.js') }}"></script>
    <script src="{{ asset('assets/vendor/anime/anime.min.js') }}"></script>
    <script src='{{ asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}'></script>
    <script src='{{ asset('assets/vendor/venobox/venobox.min.js') }}'></script>
    <script src='{{ asset('assets/vendor/aos/aos.js') }}'></script>
    <script src='{{ asset('assets/js/main.js') }}'></script>
    <script src='{{ asset('assets/js/search-modal.js') }}'></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
