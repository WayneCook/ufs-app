<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

        <title>Universal Forklift Services</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.8.95/css/materialdesignicons.css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>


        </style>
    </head>
    <body>

        <div class="main-container p-0">

            <section class="main-section">

                <div class="top-nav d-flex flex-column">

                    <header class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-lg-8 p-4">
                                <div class="d-flex flex-row">
                                    <span class="small-logo">
                                        @include('svgs/smallLogo')
                                    </span>
                                    <div class="d-flex flex-column logo-text-container">
                                        <h1 class="m-0 p-0">UNIVERSAL</h1>
                                        <h1 class="m-0 p-0 text-color-yellow">FORKLIFT</h1>
                                    </div>
                                </div>
                            </div>

                            <div class="top-right-header col-sm-4 col-md-4 col-lg-4"><h1></h1></div>
                        </div>
                    </header>

                    <nav class="nav-container">
                        <div class="container">
                            <ul class="m-0 p-0">
                                <li>HOME</li>
                                <li>SERVICES</li>
                                <li>ABOUT</li>
                                <li>CONTACT</li>
                            </ul>
                        </div>
                    </nav>

                    <div class="container hero-container flex-grow-1">
                        <div class="row d-flex flex-row hero-row">
                            <div class="col-lg-8"></div>

                            <div class="hero-column pl-4 col-lg-4 d-flex flex-column justify-content-center">
                                <h1>QUALITY</h1>
                                <h1>FORKLIFT</h1>
                                <h1>REPAIR</h1>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
                <div class="container-fluid info-wrapper">
                    <div class="container info-container flex-grow-1">
                        <div class="row info-row">
                            <div class="col-lg-4 col-md-6 p-4 card-wrapper">
                                <div class="info-card">
                                    <div class="card-heading mb-4">
                                        <h2 class="mb-0">MOBILE REPAIR</h2>
                                        <h2 class="mb-0 text-color-yellow">SERVICE</h2>
                                    </div>
                                    <div class="info-image-container">
                                         <img src="{{ asset('images/info_truck_small.jpg') }}" alt="">
                                    </div>
                                    <p>We offer reliable, affordable and experienced forklift services to you and your company. We are experienced in all electric and propain forklifts. "There are no problems only solutions".</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 p-4 card-wrapper">
                                <div class="info-card">
                                    <div class="card-heading mb-4">
                                    <h2 class="mb-0">PART SOURCING</h2>
                                    <h2 class="mb-0 text-color-yellow">SERVICE</h2>
                                    </div>
                                    <div class="info-image-container">
                                         <img src="{{ asset('images/forklift_engine.jpg') }}" alt="">
                                    </div>
                                    <p>We have great pricing and years of experience in sourcing the right forklift part for your particular need.</p>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6 p-4 card-wrapper card-wrapper-yellow">
                                <div class="info-card info-card-yellow">
                                    <div class="card-heading mb-4">
                                        <h2 class="mb-0">MAINTENANCE</h2>
                                        <h2 class="mb-0 text-dark">PROGRAM</h2>
                                    </div>
                                    <div class="info-image-container">
                                         <img src="{{ asset('images/mobile_repair.jpg') }}" alt="">
                                    </div>
                                    <p>Maintenance plans provide ongoing upkeep of your forklifts and help detect problems before they turn into something that negatively impacts your business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="service-area-wrapper container-fluid" style="background-image: url('{{ asset('images/map_background.jpg') }}')">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 order-md-1 col-md-12 p-4 map-wrapper">
                                <iframe src="https://www.google.com/maps/d/embed?mid=1IPC5HJbX8j1jLmnX6MWaEUs9e6WFbc3X" style="border:none;" width="100%" height="380"></iframe>
                            </div>
                            <div class="order-first order-md-2 col-lg-4 col-md-12 service-area-right d-flex flex-column justify-content-center">
                                <div class=location-icon-wrapper>
                                    <span class="location-icon">@include('svgs/location_icon')</span>
                                </div>
                                <h1>MOBILE</h1>
                                <h1>SERVICE</h1>
                                <h1>AREA</h1>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        {{-- /main-container --}}





    </body>
</html>
