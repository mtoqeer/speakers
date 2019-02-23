(function ($) {
    "use strict";

    /*================================
    Preloader
    ==================================*/
    var preloader = $('#preloader');
    $(window).on('load', function () {
        preloader.fadeOut('slow', function () {
            $(this).remove();
        });
    });

//    /*================================
//    progresssbar
//    ==================================*/
//    $(window).on('scroll', function () {
//        if ($('.p_bar').length) {
//            var wScroll = $(this).scrollTop();
//            if (wScroll > $('.p_bar').offset().top - ($(window).height() / 1.2)) {
//                $('.p_bar').each(function (i) {
//                    setTimeout(function () {
//                        $('.p_bar').eq(i).addClass('left-anim');
//                    }, (700 * (Math.exp(i * 0.14))) - 700);
//                });
//            } //if end here
//        }
//    });

    /*================================
        slicknav
        ==================================*/
    $('ul#navigation').slicknav({
        prependTo: ".mobile_menu"
    });

    /*================================
    Main Slider Area
//    ==================================*/
    $('.main-slider').owlCarousel({
        smartSpeed: 950,
        loop: true,
        nav: true,
        // navText :['<img src="assets/img/slider/prev.png" alt="">','<img src="assets/img/slider/next.png" alt="">'],
        navText: ['<span></span>', '<span></span>'],
        mouseDrag: false,
        touchDrag: false,
        items: 1,
        autoplay: false,
    });


    $(".main-slider").on("translate.owl.carousel", function () {
        $(".slide-tab-cell h2").removeClass("animated fadeInDown").css("opacity", "0");
        $(".slide-tab-cell p").removeClass("animated fadeInRight").css("opacity", "0");
        $(".search-area").removeClass("animated fadeInUp").css("opacity", "0");
    });

    $(".main-slider").on("translated.owl.carousel", function () {
        $(".slide-tab-cell h2").addClass("animated fadeInDown").css("opacity", "1");
        $(".slide-tab-cell p").addClass("animated fadeInRight").css("opacity", "1");
        $(".search-area").addClass("animated fadeInUp").css("opacity", "1");
    });


    /*================================
    Event Slider Area
//    ==================================*/

    $('.all-event-call').owlCarousel({
        smartSpeed: 950,
        loop: true,
        nav: true,
        navText: ['<img src="assets/img/event/next.png" alt="">', '<img src="assets/img/event/prev.png" alt="">'],
        autoplay: true,
        autoplay: 5000,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });
    
    $('.popular-course-carousel').owlCarousel({
        smartSpeed: 950,
        loop: true,
        nav: false,
        autoplay: true,
        autoplay: 5000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            }
        }
    });


/*================================
    WOW js
//    ==================================*/

    new WOW().init();



// BY KAREN GRIGORYAN

$(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  }); // click() scroll top EMD

  /*************************************
    LEFT MENU SMOOTH SCROLL ANIMATION
   *************************************/
  // declare variable
  var h1 = $("#h1").position();
  var h2 = $("#h2").position();
  var h3 = $("#h3").position();

  $('.link1').click(function() {
    $('html, body').animate({
      scrollTop: h1.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link2').click(function() {
    $('html, body').animate({
      scrollTop: h2.top
    }, 500);
    return false;

  }); // left menu link2 click() scroll END

  $('.link3').click(function() {
    $('html, body').animate({
      scrollTop: h3.top
    }, 500);
    return false;

  }); // left menu link3 click() scroll END

}); // ready() END
    
})(jQuery);
