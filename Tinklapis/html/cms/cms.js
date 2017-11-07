$(document).ready(function () { //reiskia kad pradeda veikti kai uzkrauna puslapi;

    /*=======================================*/
    /*SAVE ARTICLE IN DB WITHOUT REDIRECTING*/
    /*=======================================*/
    $('#article-editor').on('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var imgname = $('input[type=file]').val().split('\\').pop();
        var title = $('#title-input').val();
        var content = $('#editor1').val();
        console.log(imgname, title, content);
        if (imgname == null || imgname == "" || title == null || title == "" || content == null || content == "") {
            return;
        }
        var formData = "imgname=" + imgname + "&title=" + title + "&editor1=" + content;
        $.ajax({
            url: "./createArticle.php",
            type: "POST",
            data: formData,
            success: function (data, textStatus, jqXHR) {
                $('#msg').text('Article posted!'); //data - response from server
                setTimeout(function () {
                    $('#msg').text('');
                }, 3000);
            },

        });
    });
    /*==================================*/
    /*MODALS(ARTICLE CONTENT) WITH AJAX*/
    /*==================================*/
    $('.view_data').click(function () {
        var article_id = $(this).attr("id");
        var data = "article_id=" + article_id;
        $.ajax({
            url: "./getArticle.php",
            method: "post",
            data: data,
            success: function (data) {
                $('#article-content').html(data);
                $('#dataModal').modal("show");
            }
        });
    });
});