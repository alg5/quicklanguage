(function ($) {

    $().ready(function () {
        $('.lang').on('click', function (e) {
            e.preventDefault();
            if ($(this).attr('iso') == S_CURRENT_LANG) return;

            $('input[name=h_lang]').val($(this).attr('iso'));
            $('#frmQuickLang').submit();
        });
    });

})(jQuery);