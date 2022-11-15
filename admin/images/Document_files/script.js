// for (a = 1; a <= 5; a++) {
//     document.write("<p>문장이 " + a + "번 반복</p>")
// };

// window.alert("메세지 출력")


// var i = prompt("점수별 등급표", "점수를 입력하세요");
// var i 를 해주는 이유는 return value를 할당하기 위한 저장소
// if (i <= 59) {
//     document.write("F")
// } else if (i <= 69) {
//     document.write("D")
// } else if (i <= 79) {
//     document.write("C")
// } else if (i <= 89) {
//     document.write("B")
// } else if (i <= 100) {
//     document.write("A")
// }
// else {
//     document.write("잘못된 점수입니다.")
// };

// var i = prompt("배고프다", "뭐먹지")

// switch (i) {
//     case "1": document.write("뷔페");
//         break;
//     case "2": document.write("분식");
//         break;
//     case "3": document.write("라면");
//         break;
//     case "4": document.write("밥");
//         break;
// }

// var i = prompt("마지막 날짜", "해당 월을 입력하세요");

// switch (i) {
//     case "2":
//         document.write(i + "월");
//         document.write("28" + "일");
//         break;
//     case (i % 2 == "0"):
//         document.write(i + "월");
//         document.write("30" + "일");
//         break;
//     case (i % 2 == "1"):
//         document.write(i + "월");
//         document.write("31" + "일");
//         break;
// };
function testFunc() {
    alert("함수를 실행하였습니다");
}

//함수명 실행
testFunc()
// aaa -> 변수
// "aaa" -> 글자(값의 역할)
// -------------
// aaa() -> 함수
// bbb.aaa() -> method
// -------------명령어