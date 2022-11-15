$(document).ready(function () {
    $('#email_sel').change(function () {
        let dmn = $("#email_sel option:selected").val();
        $('#email_dmn').val(dmn);
    })
});