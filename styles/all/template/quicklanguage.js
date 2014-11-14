(function ($) {

    $().ready(function () {
        //alert('1');
        $('.lang').each(function () {
            $(this).css('background', 'url("./ext/alg/quicklanguage/styles/all/theme/images/flags/' + $(this).attr('iso') + '.png") no-repeat');
            if ($(this).attr('iso') == S_CURRENT_LANG)
                $(this).css('cursor', 'default');
            // $(forumtitle).html($(forumtitle).html() + div);
        });

        $('.lang').on('click', function (e) {
            e.preventDefault();
            if ($(this).attr('iso') == S_CURRENT_LANG) return;

            $('input[name=h_lang]').val($(this).attr('iso'));
            console.log($('input[name=h_lang]'));
            $('#frmQuickLang').submit();
        });


    });



})(jQuery);