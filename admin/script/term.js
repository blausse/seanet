//약관 체크박스 기능
window.onload = function () {
    var checkwrap = document.getElementById('checkwrap'),
        check = checkwrap.getElementsByTagName('input');
    checkwrap.addEventListener('click', function (e) {
        var target = e.target,
            checkNum = 0;
        if (target === check[0]) {
            if (target.checked) {
                for (var i = 1; i < check.length; i++) {
                    check[i].checked = true;
                };
            } else {
                for (var i = 1; i < check.length; i++) {
                    check[i].checked = false;
                };
            };
        } else {
            for (var i = 1; i < check.length; i++) {
                if (check[i].checked) {
                    checkNum++;
                };
            };
            if (checkNum >= check.length - 1) {
                check[0].checked = true;
            } else {
                check[0].checked = false;
            };
        };
    });
};
window.onload = function () {
    var checkwrap = document.getElementById('checkwrap'),
        check = checkwrap.getElementsByTagName('input');
    checkwrap.addEventListener('click', function (e) {
        var target = e.target,
            checkNum = 0;
        if (target === check[0]) {
            if (target.checked) {
                for (var i = 1; i < check.length; i++) {
                    check[i].checked = true;
                };
            } else {
                for (var i = 1; i < check.length; i++) {
                    check[i].checked = false;
                };
            };
        } else {
            for (var i = 1; i < check.length; i++) {
                if (check[i].checked) {
                    checkNum++;
                };
            };
            if (checkNum >= check.length - 1) {
                check[0].checked = true;
            } else {
                check[0].checked = false;
            };
        };
    });
};
//약관 필수 체크사항
$(document).ready(function () {
    $('#sub_btn').click(function () {
        const check1 = $('#age_check').is(":checked");
        const check2 = $('#serv_check').is(":checked");
        const check3 = $('#info_check').is(":checked");

        if (check1 == false) {
            alert("필수 약관에 동의하셔야 다음 단계로 진행 가능합니다.");
            return;
        } else if (check2 == false) {
            alert("필수 약관에 동의하셔야 다음 단계로 진행 가능합니다.");
            return;
        } else if (check3 == false) {
            alert("필수 약관에 동의하셔야 다음 단계로 진행 가능합니다.");
            return;
        } else {
            $(location).attr('href', "http://localhost/web_project/members/choice.html");
            $("#term").submit();
        }
    })
});