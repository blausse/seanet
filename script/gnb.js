$(document).ready(function () {
    //gnb
    $('.gnb_logo').click(function () {
        $('.gnb ul, .gnb_bg').slideToggle("fast")
    });
    //gnb hover시, 색 변경
    $('.gnb>li>a, .gnb li li a').hover(function () {
        $('.gnb>li>a, .gnb li li a').css({ color: "#0080ff" })
        $('.gnb li a, .gnb li li a').not(this).css({ color: "black" })
    }, function () {
        $('.gnb>li>a, .gnb li li a').css({ color: "black" })
    });
})