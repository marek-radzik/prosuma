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

        //kontaktformular-kunde-schritt-3-von-3 save to db
        if ($('#pro-suma-client-form').length > 0) {

            $('.wpcf7-form').each(function () {
                $(this).on('submit', function (e) {
                    e.preventDefault();

                    let data_cookie = JSON.parse(Cookies.get('cf7msm_posted_data'));
                    let data_form = $(this).serializeArray();

                    let data_form_json = '';
                    let merge_data = '{';

                    $.map(data_form, function (val, i) {

                        //parse serialize data form last site
                        if (val.name.indexOf("visible_groups") >= 0 || val.name.indexOf("_hidden_group_fields") >= 0
                            || val.name.indexOf("_hidden_groups") >= 0 || val.name.indexOf("_options") >= 0
                            || val.name.indexOf("msm_multistep_tag") >= 0) {
                            //console.log(val.name);
                        } else {
                            merge_data += '"' + val.name + '":"' + val.value + '",'
                        }

                    });

                    merge_data = merge_data.replace(/,\s*$/, "");
                    merge_data += '}';
                    data_form = JSON.parse(merge_data);

                    $.ajax({
                        type: 'POST',
                        url: '/psf-form-client/',
                        data: { data_cookie: data_cookie, data_form: data_form },
                        dataType: "json",
                        success: function (data) {
                            console.log('ok');
                        },
                        error: function (data, errorThrown) {
                            console.log(errorThrown);
                        }
                    });

                });
            });
        }

        //questionnarie form - helper - image file preview
        $('.image-file').change(function() {
            readURL(this);
        });

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function(e) {
            $('#img_preview').attr('src', e.target.result);
          }
          
          reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
      }

}(jQuery));