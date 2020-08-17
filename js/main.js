jQuery.noConflict();

(function ($) {
    $(document).ready(function () {
        // WOW
        new WOW().init();

        //nav up 	  
        jQuery('.scrollup-mr').click(function () {
            jQuery('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });

        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 300)
                jQuery('.scrollup-mr').fadeIn();
            else
                jQuery('.scrollup-mr').fadeOut();
        });

        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 50) {
                jQuery('.menu').addClass('fixed-top');
            } else {
                jQuery('.menu').removeClass('fixed-top');
            }
        });

        //slick
        //settings to slider
        // jQuery('.recommended-slider').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     autoplaySpeed: 3000,
        //     adaptiveHeight: true,
        //     mobileFirst: true,
        //     dots: false,
        //     arrows: false,
        //     prevArrow: '<button class="slick-prev slick-arrow" aria-label="Prev" type="button"><i class="fas fa-angle-left"></i></button>',
        //     nextArrow: '<button class="slick-next slick-arrow" aria-label="Prev" type="button"><i class="fas fa-angle-right"></i></button>',
        //     responsive: [
        //         {
        //             breakpoint: 480,
        //             settings: {
        //                 slidesToShow: 3,
        //                 slidesToScroll: 1,
        //                 autoplay: true,
        //                 autoplaySpeed: 3000,
        //                 adaptiveHeight: true,
        //                 mobileFirst: true,
        //                 dots: false,
        //                 arrows: false
        //             }
        //         },
        //         {
        //             breakpoint: 1200,
        //             settings: {
        //                 slidesToShow: 4,
        //                 slidesToScroll: 1,
        //                 autoplay: true,
        //                 autoplaySpeed: 3000,
        //                 adaptiveHeight: true,
        //                 mobileFirst: true,
        //                 dots: false,
        //                 arrows: true
        //             }
        //         }
        //     ]
        // });
    });
}(jQuery));