$(document).ready(function () {
    //main버튼 클릭시 기능
    $('.community_btn').click(function () {
        $('.main_banner_bg').hide()
        $('.provision_box').hide()
        $('.community').show()
    })
    $('.recruit_btn').click(function () {
        $('.main_banner_bg').show()
        $('.provision_box').hide()
        $('.community').hide()
    })
    $('.provision_btn').click(function () {
        $('.main_banner_bg').hide()
        $('.provision_box').show()
        $('.community').hide()
    })
})