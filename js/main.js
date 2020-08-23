jQuery.noConflict();

(function ($) {
    $(document).ready(function () {

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
            if (jQuery(this).scrollTop() > 10) {
                jQuery('.menu').addClass('fixed-top');
                jQuery('.menu').addClass('menu-fixed');
            } else {
                jQuery('.menu').removeClass('fixed-top');
                jQuery('.menu').removeClass('menu-fixed');
            }
        });
        
    });
}(jQuery));