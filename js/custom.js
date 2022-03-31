$(document).ready(function () {
    //Navbar bg when scroll 
    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();
        var sticky = $(".banner-sticky-top");
        if (scrolling >= 90) {
            sticky.addClass("banner-manu-black");
        } else {
            sticky.removeClass("banner-manu-black");
        }
    });

    //initialize swiper when document ready
    var mySwiper = new Swiper('.whyChoose-slider-main .swiper-container', {
        speed: 400,
        loop: true,
        autoplay: true,
    });

    //smooth animation scroll js
    $('a.smooth-s').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 2000);
                return false;
            }
        }
    });

    //Topup smooth animation scroll
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.top-up').fadeIn();
        } else {
            $('.top-up').fadeOut();
        }

    });
    $('.top-up').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 2000);
    });

    // wow js 
    new WOW().init();


    $('.autoplay').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<span class="prv-arrow"><i class="fas fa-angle-left"></i></span>',
        nextArrow: '<span class="frd-arrow"><i class="fas fa-angle-right"></i></span>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: false,
                    dots: true
                }
    },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });


});