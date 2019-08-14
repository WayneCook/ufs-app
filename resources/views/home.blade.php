<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Universal Forklift Service</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('js/slick-carousel/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('js/slick-carousel/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive-home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/intro-animation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos/aos.min.css') }}">
    </head>
    <body class="noScroll">
        <div class="main-container m-0 p-0">
            {{-- Page sections --}}
            @include('sections.logoAnimation')
            @include('sections.navigationSection')
            @include('sections.serviceSection')
            @include('sections.brandsCarousel')
            @include('sections.contactSection')
            @include('sections.aboutSection')
            @include('sections.serviceAreaSection')
            @include('sections.footerSection')
        </div>
        <script src="{{ asset('js/aos/aos.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        {{-- Brands carousel --}}
        <script src="{{ asset('js/slick-carousel/slick/slick.min.js') }}"></script>
        {{-- Scrollable navigation --}}
        <script src="{{ asset('js/jquery-nav.js') }}"></script>
    </body>
</html>
