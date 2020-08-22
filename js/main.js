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

        // Select all links with hashes
        jQuery('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html,body').animate({
                        scrollTop: target.offset().top - 70
                    }, 1000);
                    return false;
                }
            }
        });
    });
}(jQuery));