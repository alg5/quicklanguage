(function ($) {

    var translatepost_key = 'translatepost';
    $().ready(function () {
        ClearTranslatedPosts();
        $('.lang').on('click', function (e) {
            e.preventDefault();
            if ($(this).attr('iso') == S_CURRENT_LANG) return;

            $('input[name=h_lang]').val($(this).attr('iso'));
            $('#frmQuickLang').submit();
        });


    });//$().ready
    function ClearTranslatedPosts() {
        var len = translatepost_key.length;

        Object.keys(localStorage)
        .forEach(function (key) {
            if (key.substring(0, len) == translatepost_key) {
                localStorage.removeItem(key);
            }
        });
    }

    $('#wrap').on('click', '.ql-translatepost', function (e) {
        e.preventDefault();
        var post_id = $(this).attr('numpost');
        var content = $('#post_content' + post_id).find('div.content').html();
        var url = U_TRANSLATE_POST + content + '&lang=' + S_CURRENT_LANG + '&format=html&options=1';
        $.post(url, function (data) {
            $('#post_content' + post_id).find('div.content').html(data.text);
            localStorage.setItem(translatepost_key + post_id, content);
            $('#divtranslatepost' + post_id).hide();
            $('#divoriginalpost' + post_id).show();
        });
    });
    $('#wrap').on('click', '.ql-originalpost', function (e) {
        e.preventDefault();
        var post_id = $(this).attr('numpost');
        var content = $('#post_content' + post_id).find('div.content').html();
        var original_content = localStorage.getItem(translatepost_key + post_id);
        $('#post_content' + post_id).find('div.content').html(original_content);
        $('#divtranslatepost' + post_id).show();
        $('#divoriginalpost' + post_id).hide();
    });


})(jQuery);