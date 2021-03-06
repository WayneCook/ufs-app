<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Universal Forklift Services</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('slick-carousel/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('slick-carousel/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive-home.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <style>
            .intro-animation {
                position: absolute;
                height: 100vh;
                width: 100vw;
                background-color: black;
                z-index: 9999999;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .intro-logo-wrapper {
                position: relative;
                width: 250px;
                height: 200px;
            }

            .intro-logo-wrapper img {
                position: absolute;
                width: 100%;
            }

            img .animated {
                /* animation-duration: 1.75s; */
                animation-duration: 2s;
                /* animation-delay: 2s; */
                /* animation-iteration-count: infinite; */
            }



        </style>

    </head>
    <body>
        <div class="intro-animation">
            <div class="intro-logo-wrapper">

                <img src="{{ asset('images/logo_pieces/circle.png') }}" class="logo_circle animated bounceInDown delay-2s" alt="logo_circle">
                <img src="{{ asset('images/logo_pieces/bottom.png') }}" class="logo_bottom animated zoomInDown rollIn delay-1s" alt="logo_bottom">
                <img src="{{ asset('images/logo_pieces/left.png') }}" class="logo_left animated zoomInUp delay-1s" alt="logo_left">
                <img src="{{ asset('images/logo_pieces/logo-u.png') }}" class="logo_letters animated zoomInLeft delay-1s" alt="logo_letters">
                <img src="{{ asset('images/logo_pieces/logo-f.png') }}" class="logo_letters animated jackInTheBox delay-1s" alt="logo_letters">
                <img src="{{ asset('images/logo_pieces/logo-s.png') }}" class="logo_letters animated zoomInRight delay-1s" alt="logo_letters">
                <img src="{{ asset('images/logo_pieces/top.png') }}" class="logo_top animated rollIn delay-1s" alt="logo_top">

            </div>
        </div>

        <div class="main-container p-0">
            <section class="main-section" id="home">
                <div class="top-nav d-flex flex-column">
                    <div class="head-nav-wrapper">
                        <header class="container hidden-top">
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
                                <div class="top-right-header d-flex flex-column justify-content-center p-4 col-sm-4 col-md-4 col-lg-4">
                                    <h1 class="text-light call-now">CALL NOW!</h1>
                                    <h1 class="phone-number">562-450-4194</h1>
                                </div>
                            </div>
                        </header>


                    <div class="mobile-nav container-fluid">
                        <span class="hamburger-icon">
                                @include('svgs/hamburger_icon')
                        </span>
                        <span class="small-logo-mobile">
                                @include('svgs/smallLogo')
                        </span>
                    </div>
                    <nav class="nav-container">
                        <div class="container">
                            <nav id="navigation">
                                <a href="#home" class="active-link">HOME</a>
                                <a href="#services">SERVICES</a>
                                <a href="#contact">CONTACT</a>
                                <a href="#about">ABOUT</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                    <div class="container hero-container flex-grow-1">
                        <div class="row d-flex flex-row hero-row">
                            <div class="col-lg-4 hero-column-left"></div>
                            <div class="col-lg-4 hero-column-middle"></div>

                            <div class="hero-column pl-4 col-lg-4 d-flex flex-column justify-content-center">

                                <div class="text-wrapper-large">
                                    <h1>QUALITY</h1>
                                    <h1>FORKLIFT</h1>
                                    <h1>REPAIR</h1>
                                </div>

                                <div class="text-wrapper-small">
                                    <h1>UNIVERSAL</h1>
                                    <h1 class="forklift-yellow">FORKLIFT</h1>
                                    <h1>SERVICES</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
                <section class="container-fluid info-wrapper" id="services">
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
                                    <p>We offer reliable, affordable and experienced forklift services to you and your company. We are experienced in all electric and propain forklifts.</p>
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
                </section>

                <div id="contact">
                <div class="box-shadow-wrapper">
                        <div class="brands-section-wrapper container-fluid">
                            <div class="row brand-images-container">
                                <div class="p-0"><img src="{{ asset('images/brands/brand_1.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_2.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_3.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_4.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_5.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_6.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_7.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_8.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_9.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_10.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_11.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_12.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_13.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_14.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_15.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_16.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_17.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_18.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_19.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_20.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_21.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_22.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_23.jpg') }}" alt="Forklift-brand"></div>
                                <div class="p-0"><img src="{{ asset('images/brands/brand_24.jpg') }}" alt="Forklift-brand"></div>
                            </div>
                        </div>
                    </div>
                    {{-- /brands-section-wrapper --}}

                <section class="container-fluid form-section-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-12 pt-5 pb-5">
                                <h1 class="contact-form-label text-center font-weight-bold">CONTACT US</h1>

                                    <div class="contact-form-container d-flex flex-row justify-content-center">

                                    <form method="post" action="{{ action('Admin\MessagesController@store') }}#contact">
                                    {{ csrf_field() }}


                                    @if (session('success'))
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Message Sent!</h4>
                                        <hr>
                                        <p class="mb-0">{{ session('success') }}</p>
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="location" class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" placeholder="Location" value="{{ old('location') }}">
                                        @if ($errors->has('location'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('location') }}
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" cols="30" rows="5"  placeholder="Message...">{{ old('body') }}</textarea>
                                        @if ($errors->has('body'))
                                        <span class="invalid-feedback">
                                        {{ $errors->first('body') }}
                                        </span>
                                        @endif
                                    </div>

                                    <button type="submit" class="custom-button btn btn-primary">SUBMIT

                                    </button>
                                    </form>
                                </div>

                            </div>
                            <div class="contact-section-right d-flex flex-column justify-content-center col-md-12 col-lg-4 p-4">
                                <div class="location-icon-wrapper">
                                    <span class="location-icon">@include('svgs/phone_icon')</span>
                                </div>
                                <h1>562-450-4194</h1>
                                <p>Feel free to contact us using the phone number above or send us a message to get your free estimate.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
                {{-- /contact-section --}}

                <div id="about" class="container-fluid mobile-about-section">
                    <div class="row">
                        <div class="p-4 about-right-container d-flex flex-column justify-content-center">
                            <h1 class="text-left font-weight-bold">ABOUT US</h1>
                            <p>Residents throughout the local area have turned to us for all of their forklift repair needs. With free estimates and fast turnaround, we are known for our personal service and expertise in all forms of specialized forklift repair and maintenance.</p>
                        </div>
                     </div>
                 </div>

                <section class="container-fluid about-section p-0" style="background-image: url('{{ asset('images/about-background.jpg') }}')">
                    <div class="container about-section-container">
                        <div class="row about-section-row">
                            <div class="col-lg-8 col-12">
                                <div class="about-heading-container d-flex flex-column justify-content-center">
                                    <h1>THERE ARE NO PROBLEMS, ONLY <span>SOLUTIONS</span></h1>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 about-column-right">
                                <div class="p-3 about-right-container d-flex flex-column justify-content-center">
                                    <h1 class="text-left font-weight-bold">ABOUT US</h1>
                                    <p>Residents throughout the local area have turned to us for all of their forklift repair needs. With free estimates and fast turnaround, we are known for our personal service and expertise in all forms of specialized forklift repair and maintenance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <section class="service-area-wrapper container-fluid" style="background-image: url('{{ asset('images/map_background.jpg') }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 order-md-1 col-md-12 p-4 map-wrapper">
                            <iframe allowfullscreen src="https://www.google.com/maps/d/embed?mid=1IPC5HJbX8j1jLmnX6MWaEUs9e6WFbc3X" style="border:none;" width="100%" height="380"></iframe>
                        </div>
                        <div class="order-first order-md-2 col-lg-4 col-md-12 service-area-right d-flex flex-column justify-content-center pl-4">
                            <div class=location-icon-wrapper>
                                <span class="location-icon">@include('svgs/location_icon')</span>
                            </div>
                            <h1>SERVICE</h1>
                            <h1>COVERAGE</h1>
                            <h1>AREA</h1>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="container-fluid">
                <div class="container footer-container">
                    <div class="row">
                        <div class="col">
                            <h5 class="font-weight-bold text-dark">INFORMATION</h5>
                            <a class="footer-link" href="#about">About Us</a>
                        </div>
                        <div class="col">
                            <h5 class="font-weight-bold text-dark">SERVICES</h5>
                            <a class="footer-links" href="#services">Repairs</a>
                            <br>
                            <a class="footer-links" href="#services">Parts</a>

                            <br>
                            <a class="footer-links" href="#services">Maintenance Plans</a>
                        </div>
                        <div class="col">
                            <h5 class="font-weight-bold text-dark">CONTACT</h5>
                            <span style="color: gray">562-450-4194</span>
                            <br>
                            <a class="footer-links" href="#contact">Form</a>
                        </div>
                    </div>
                </div>

            </footer>
            <div class="container-fluid copyright-container">
                <div class="container p-4 d-flex flex-column justify-content-center">
                    <p class="rights"><span>©&nbsp; </span><span class="copyright-year">2019</span><span>&nbsp;</span><span>Universal Forklift Services</span></p>
                </div>
            </div>

        </div>

        {{-- /main-container --}}


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="{{ asset('slick-carousel/slick/slick.js') }}"></script>



<script type="text/javascript">

window.onload=function(){

    $('.brand-images-container').slick({
        slidesToShow: 8,
        mobileFirst: true,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 700,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 8,
                slidesToScroll: 1,
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 0,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            }
        ]
      });

}

$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
        $('.hidden-top').addClass("shrink-hidden-top");
    } else {
        $('.hidden-top').removeClass("shrink-hidden-top");
    }
});

// Cache selectors
var lastId,
hamburger = $('.hamburger-icon');
menuContainer = $('.nav-container');


 topMenu = $("#navigation"),
 navContainer = $('.nav-container');

 topMenuHeight = topMenu.outerHeight()+1,
 // All list items
 menuItems = topMenu.find("a"),
 // Anchors corresponding to menu items
 scrollItems = menuItems.map(function(){
   var item = $($(this).attr("href"));
    if (item.length) { return item; }
 });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
    $('#clickable').trigger('click');
    hamburger.trigger('click');
    topMenu.toggleClass('active');
    navContainer.toggleClass('active');

    menuItems.removeClass();
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+50;
  $('html, body').stop().animate({
      scrollTop: offsetTop
  }, 850);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .removeClass()
         .filter("[href=#"+id+"]").addClass("active-link");
   }
});



hamburger.click(function(){

    topMenu.toggleClass('active');
    navContainer.toggleClass('active');

})


  </script>

    </body>
</html>
