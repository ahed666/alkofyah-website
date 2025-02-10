(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Fixed Navbar
    $('.fixed-top').css('top', $('.top-bar').height());
    $(window).scroll(function () {
        if ($(this).scrollTop()) {
            $('.fixed-top').addClass('bg-dark border-bottom-dark').css('top', 0);

        } else {
            $('.fixed-top').removeClass('bg-dark border-bottom-dark').css('top', $('.top-bar').height());
    
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        rtl: $("html").attr("dir") === "rtl", // Enable RTL if Arabic is selected

        smartSpeed: 1500,
        autoplayTimeout: 5000, // 3 seconds delay
        loop: true,
        nav: true,
        dots: false,
        items: 1,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: false,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

   
        $(".category-slider").owlCarousel({
            loop: true, // Infinite loop
            margin: 10, // Space between items
            autoplay: true, // Auto slide
            autoplayTimeout: 3000, // 3 seconds delay
            autoplayHoverPause: true, // Pause on hover
            nav: false, // Next & Prev buttons
            dots: false, // Hide dots
            responsive: {
                0: { items: 2 },  // Show 2 items on small screens
                576: { items: 3 }, // Show 3 items on tablets
                768: { items: 4 }, // Show 4 items on medium screens
                1024: { items: 5 } // Show 5 items on large screens
            }
        });
    
  
    
})(jQuery);



  