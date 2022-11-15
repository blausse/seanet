$(document).ready(function () {
    $('.notice_card').click(function () {
        $(this).css({ boxShadow: "0 4px 4px 0 rgba(0, 0, 0, 0.25)" })
        $('.notice_card').not($(this)).css({ boxShadow: "0 0 0 0" })
        $(this).children('p').eq(1).css({ color: "#0080ff", fontWeight: "bold" })
        $('.title').not($(this).children('p').eq(1)).css({ color: "#222", fontWeight: "normal" })
    })
});