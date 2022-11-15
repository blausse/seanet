//로그인 기능
function login_form_check() {
    var u_id = document.getElementById("u_id_box");
    var u_pwd = document.getElementById("u_pwd_box");
    var u_pwdCheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;
    if (u_id.value == "") {
        var txt = document.getElementById("err_id");
        txt.textContent = "아이디를 입력하세요";
        u_id.focus();
        return false;
    };
    if (u_pwd.value == "") {
        var txt = document.getElementById("err_pwd");
        txt.textContent = "비밀번호를 입력하세요";
        u_pwd.focus();
        return false;
    };
    if (!u_pwdCheck.test(u_pwd.value)) {
        var txt = document.getElementById("err_pwd");
        txt.textContent = "비밀번호는 영문자+숫자+특수문자 조합으로 8~25자리 사용해야 합니다.";
        u_pwd.focus();
        return false;
    };
};