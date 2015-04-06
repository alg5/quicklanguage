    (function ($) {    // Avoid conflicts with other libraries
        $().ready(function () {

            changeEnable('#quicklanguage_is_link_translate_show', 'setting_lnk_translate');
            $('#quicklanguage_is_link_translate_show').on('change', function () {
                changeEnable(this, 'setting_lnk_translate');
            });
            function changeEnable(el, idDiv) {
                var div = $('#' + idDiv);
                if ($(el).prop('checked')) {
                    $(div).children().prop('disabled', false);
                    $(div).find('dl').css('opacity', '1');
                }
                else {
                    $(div).children().prop('disabled', true);
                    $(div).find('dl').css('opacity', '0.3');
                }
            }


        });


    })(jQuery);                                                      // Avoid conflicts with other libraries
