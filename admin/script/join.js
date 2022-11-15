//회원가입 기능
function form_check() {
    var u_id = document.getElementById("u_id");
    var pwd = document.getElementById("pwd");
    var pwdCheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;
    var repwd = document.getElementById("repwd");
    var birth = document.getElementById("birth");
    var birthcheck = /^(?=.*[0-9]).{8,8}$/g;
    var mobile = document.getElementById("mobile")
    var mobilecheck = /^(?=.*[0-9]).{10,11}$/g;
    if (u_id.value == "") {
        var txt = document.getElementById("err_id");
        txt.textContent = "*아이디를 입력해주세요";
        u_id.focus();
        return false;
    };
    if (pwd.value == "") {
        var txt = document.getElementById("err_pwd");
        txt.textContent = "*비밀번호를 입력해주세요";
        u_id.focus();
        return false;
    };
    if (!pwdCheck.test(pwd.value)) {
        var txt = document.getElementById("err_pwd")
        txt.textContent = "비밀번호는 영문자+숫자+특수문자 조합으로 8~25자리 사용해야 합니다.";
        pwd.focus();
        return false;
    };
    if (repwd.value !== pwd.value) {
        var txt = document.getElementById("err_repwd");
        txt.textContent = "비밀번호가 다릅니다.";
        pwd.focus();
        return false;
    };
    if (!birthcheck.test(birth.value)) {
        var txt = document.getElementById("err_birth")
        txt.textContent = "8자리 숫자를 입력해주세요.";
        birth.focus();
        return false;
    };
    if (!mobilecheck.test(mobile.value)) {
        var txt = document.getElementById("err_mobile")
        txt.textContent = "10~11자리 숫자만 입력해주세요.";
        mobile.focus();
        return false;
    }
};
$(document).ready(function () {
    $('.id_search').click(function () {
        function id_search() {
            window.open("id_search.php", "", "width=600px,height=300px");
        };
        id_search();
    })
});
