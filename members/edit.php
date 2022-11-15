<?php
include '../inc/session.php';
//데이터 가져오기
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dmn = $_POST["email_dmn"];
$email = $email_id."@".$email_dmn;
$birth = $_POST["birth"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$pscode = $_POST["pscode"];
$gender = $_POST["gender"];
$pwd = $_POST["pwd"];
$edit_date = date("Y-m-d");

//db 접속
include '../inc/dbcon.php';
//쿼리 작성
    //update 테이블명 set 필드명 = "바뀐값" where 필드명 = "값"
    // += > add / + = > + after =
    //비밀번호를 입력한 경우
        $sql = "update members";
        $sql .= "set mobile='$mobile',email='$email',birth='$birth',addr_b='$addr_b',addr_d='$addr_d',pscode='$pscode',gender='$gender',pwd='$pwd'";
        $sql .= "where idx = '$s_idx';";

//     //비밀번호를 입력하지 않은 경우
        $sql_nPwd = "update members set mobile='$mobile',email='$email',birth='$birth',addr_b='$addr_b',addr_d='$addr_d',pscode='$pscode',gender='$gender' where idx = '$s_idx';";
// //db에 쿼리 전송
// // mysqli_query($dbcon,$sql);
if($pwd){//비밀번호 입력한 경우
    mysqli_query($dbcon,$sql);
}else{//비밀번호 입력하지 않은 경우
    mysqli_query($dbcon,$sql_nPwd);
};
// //DB 접속 종료
mysqli_close($dbcon);
// //리디렉션
echo "<script type='text/javascript'>
location.href = 'http://localhost/web_project/';
</script>";
?>