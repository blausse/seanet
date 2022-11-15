$(document).ready(function () {

    //첨부파일
    $("#file").on('change', function () {
        var fileName = $("#file").val();
        $(".upload-name").val(fileName);
    });
})