//회원가입 기능
function notice_check() {

    var n_title = document.getElementById("n_title");
    var n_content = document.getElementById("n_content");
    if (n_title.value == "") {
        alert("*마마 제목을 입력해주시옵소서...");
        n_title.focus();
        return false;
    };
    if (!n_content.value) {
        alert("*마마 내용을 입력해주시옵소서...");
        n_content.focus();
        return false;
    };

};
