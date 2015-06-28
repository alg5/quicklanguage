(function ($) {

    var translatepost_key = 'translatepost';
    var filllstyandex_key = 'filllstyandex';
    var langs;
    $().ready(function () {
        if (parseInt(S_SHOW_TRANSLATE_POST) > 0) {
            var url = U_TRANSLATE_GETLANG;
            $.post(url, { key: S_YK }, function (data) {
                langs = data.langs;
            });
        }
        ClearTranslatedPosts();
        $('.lang').on('click', function (e) {
            e.preventDefault();
            if ($(this).attr('data-iso') == S_CURRENT_LANG) return;

            $('input[name=h_lang]').val($(this).attr('data-iso'));
            $('#frmQuickLang').submit();
        });


    }); //$().ready

    function ClearTranslatedPosts() {
        Object.keys(localStorage)
        .forEach(function (key) {
            if (key.indexOf(translatepost_key) > -1 || key.indexOf(filllstyandex_key) > -1) {
                localStorage.removeItem(key);
            }
        });
    }

    $('#wrap').on('click', '.ql-lstLangYandex', function (e) {
        e.preventDefault();
        var post_id = $(this).prev().attr('numpost');
        if (localStorage.getItem(filllstyandex_key + post_id) === null) {
            var cbo = $('#cboLangYandex' + post_id);
            $(cbo).empty();
            $.each(langs, function (key, val) {
                console.log('key = ' + key + 'val = ' + val);
                $('<option/>', { value: key }).text(val).appendTo(cbo);
            });
            localStorage.setItem(filllstyandex_key + post_id, 1);

        }
    });

    $('#wrap').on('click', '.ql-translatepost', function (e) {
        e.preventDefault();
        var post_id = $(this).attr('numpost');
        var content = $('#post_content' + post_id).find('div.content').html();
        var url = U_TRANSLATE_POST;
        $.ajax({
            type: "POST",
            url: url,
            data: { key: S_YK , text: content, lang: $('#cboLangYandex' + post_id).val(), format: "html", options: 1 },
            success: function (data) {
                $('#post_content' + post_id).find('div.content').html(data.text);
                localStorage.setItem(translatepost_key + post_id, content);
                $('#divtranslatepost' + post_id).hide();
                $('#divoriginalpost' + post_id).show();
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            }
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