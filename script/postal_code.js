function postalcode() {
    new daum.Postcode({
        oncomplete: function (data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var addr = ''; // 주소 변수
            var extraAddr = ''; // 참고항목 변수

            if (data.userSelectedType === 'R') {
                addr = data.roadAddress;
            } else {
                addr = data.jibunAddress;
            }

            if (data.userSelectedType === 'R') {

                if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                    extraAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if (data.buildingName !== '' && data.apartment === 'Y') {
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if (extraAddr !== '') {
                    extraAddr = ' (' + extraAddr + ')';
                }
                // 조합된 참고항목을 해당 필드에 넣는다.
                document.getElementById("sub_addr").value = extraAddr;

            } else {
                document.getElementById("sub_addr").value = '';
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('pscode').value = data.zonecode;
            document.getElementById("addr_b").value = addr;
            // 커서를 상세주소 필드로 이동한다.
            document.getElementById("addr_d").focus();
        }
    }).open();
}

function intxt() {
    var postcode = document.getElementById("pscode");
    var address = document.getElementById("addr_b");
    var detailaddress = document.getElementById("addr_d");
    var extraaddress = document.getElementById("sub_addr");
    if (postcode !== "") {
        opener.document.getElementById("ps_code").value = postcode.value;
    }
    if (address !== "") {
        opener.document.getElementById("addr_b").value = address.value;
    }
    if (detailaddress !== "") {
        opener.document.getElementById("addr_d").value = detailaddress.value;
    }
    if (extraaddress !== "") {
        opener.document.getElementById("sub_addr").value = extraaddress.value;
        opener.document.getElementById("addr_d").focus();
        window.close();
    }
}