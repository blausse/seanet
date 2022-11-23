$(document).ready(function () {

    //첨부파일
    $("#file,#vip_file,#main_file").on('change', function () {
        var fileName = $("#file").val();
        var vipFile = $("#vip_file").val();
        var mainFile = $("#main_file").val();
        $("input[name=c_logo_name]").val(fileName);
        $("input[name=c_vip_logo]").val(vipFile);
        $("input[name=c_main_logo]").val(mainFile);
    });
})