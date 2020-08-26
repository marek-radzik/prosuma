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

        //hover on sign btn
        jQuery('.btn-sign').hover(function () {
            jQuery('.img-sign').css('background-image', 'url(/wp-content/themes/mr-theme/img/sign-white.png)');
        }, function () {
            jQuery('.img-sign').css('background-image', 'url(/wp-content/themes/mr-theme/img/sign.png)');
        });

    });
}(jQuery));