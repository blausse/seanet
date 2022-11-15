<?php
/**Error 설명 */
// error_reporting(E_ALL);

// ini_set('display_errors', '1');


/***이전 페이지에서 값 가져오기***/
// method : get --> $_GET["필드의 네임 속성값"];
// method : post --> $_POST["필드의 네임 속성값"];
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dmn = $_POST["email_dmn"];
$email = $email_id."@".$email_dmn;
$birth = $_POST["birth"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$pscode = $_POST["pscode"];
$apply = $_POST["apply"];
$gender = $_POST["gender"];
$pwd = $_POST["pwd"];
// 시간 구하기
$reg_date = date("Y-m-d");


// //js : document.write() --> echo
// echo "<p> 이름: ".$u_name."</p>";
// echo "<p> 아이디: ".$u_id."</p>";
// echo "<p> 전화번호: ".$mobile."</p>";
// echo "<p> 이메일: ".$u_email."</p>";
// echo "<p> 생년월일: ".$birth."</p>";
// echo "<p> 기본주소: ".$addr_b."</p>";
// echo "<p> 상세주소: ".$addr_d."</p>";
// echo "<p> 가입일: ".$reg_date."</p>";
// echo "<p> 우편번호: ".$pscode."</p>";
// echo "<p> 약관: ".$apply."</p>";
// echo "<p> 성별: ".$gender."</p>";

// DB 연결
// $dbcon = mysqli_connect("호스트","사용자","비밀번호","DB명");
// /**mysql -u root; */
//닷홈에 올릴 때는 사용자,비밀번호,db명이 내 아이디와 비밀번호임

// mysqli_select_db($dbcon, "문자셋");
// /**use DB명 */
// $dbcon = mysqli_connect('localhost','root','','front') or die("db 접속 실패 시 출력될 메세지");
// mysqli_set_charset($dbcon, "utf8");

include "../inc/dbcon.php";

$sql = "insert into members";
$sql .= "(u_name, u_id, pwd, mobile, birth, email, pscode, addr_b, addr_d, gender, reg_date)" ;
$sql .= "values('$u_name','$u_id','$pwd','$mobile','$birth','$email','$pscode','$addr_b','$addr_d','$gender','$reg_date');";

// echo $sql;

//데이터베이스에 쿼리 전송
// mysqli_query("DB 연결객체","전송할 쿼리")
mysqli_query($dbcon,$sql);

//DB 접속 종료
//mysqli_close($dbcon);
mysqli_close($dbcon);

//리디렉션
echo "<script type='text/javascript'>
location.href = 'welcome.php'
</script>";
?>

<!-- 리디렉션
<script type="text/javascript">
// location.href = "이동할 페이지 주소"
location.href = "welcome.php"
</script> -->