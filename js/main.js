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

        //fachkrafte-anfrage-btn
        $('.fachkrafte-anfrage-btn').click(function () {
            $('.fachkrafte-anfrage-content').toggle();
        });

        //birthday date field
        $('.mr-date').attr('placeholder', '');
        $('.mr-date').attr('autocomplete', 'off');

    });
}(jQuery));