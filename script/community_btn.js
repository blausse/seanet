$(document).ready(function () {
    //community btn hover시 색 변경
    $('.voice_sub button').hover(function () {
        $(this).css({ background: "#4da4fc", color: "white" })
        // $('.voice_sub button').not($(this)).css({ background: "white", color: "black" })
    }, function () {
        $(this).css({ background: "white", color: "black" })
    })
})