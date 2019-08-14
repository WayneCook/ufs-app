
// Main script
$(window).on('load', function() {

	$('#navigation').onePageNav();

    if(document.cookie.indexOf('animated') > -1 ) {
        $('.intro-animation-wrapper').hide();
        $('body').toggleClass('noScroll');
    }
    else {
        setcookie()
        animate();
    }

    function setcookie(){
        //Set animation cookie
        var now = new Date();
        var minutes = 20;
        now.setTime(now.getTime() + (minutes * 60 * 1000));
        document.cookie="animated=true";
        document.cookie = "expires=" + now.toUTCString() + ";"
    }

    function animate(){
        $('.logo-animation').toggleClass('animated')
        $('.intro-animation-wrapper').delay( 3000 ).fadeOut( 3000, function(){
             $('body').toggleClass('noScroll');
        });
    }

    // Init carousel
    $('.brand-images-container').slick({
        slidesToShow: 8,
        mobileFirst: true,
        infinite: true,
        slidesToScroll: 1,
        draggable: false,
        accessibility: false,
        focusOnSelect: false,
        swipe: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        autoplay: true,
        autoplaySpeed: 700,
        responsive: [{
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
        }]
      });

    // Hide top section when scroll
    $(window).on('scroll', function(){
        if ($(this).scrollTop() > 50) {
            $('.hidden-top').addClass("shrink-hidden-top");
        } else {
            $('.hidden-top').removeClass("shrink-hidden-top");
        }
    });

    //Handle mobile nav events
    topMenu = $("#navigation"),
    navContainer = $('.nav-container');

    $('.nav-click').click(function(){
        $('#clickable').trigger('click');
    })

    $('.hamburger-icon').click(function(){
        topMenu.toggleClass('active');
        navContainer.toggleClass('active');
    })

    // Init AOS slide effects
    AOS.init({
        // Global settings:
        disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 0, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease-out-back', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });

});
