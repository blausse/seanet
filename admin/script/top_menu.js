$(document).ready(function () {
    //top menu 기능
    $('.login').click(function () {
        $(location).attr("href", "/web_project/login/login.php");

    })
    $('.signup').click(function () {
        $(location).attr("href", "/web_project/members/term.html");
    })
})