<?php
//데이터 가져오기 - post 방식 활용, 이전페이지에 hidden 필드 사용
// $g_idx = $_POST["g_idx"]
//데이터 가져오기 - get 방식 활용, 이전페이지에 hidden 필드 사용
// $g_idx = $_GET["g_idx"]
//데이터 가져오기
include '../inc/session.php';
//db 연결
include '../inc/dbcon.php';
//쿼리 작성(만약 쿼리가 select면 db에서 데이터 가져오는 것도 필요함)
// delete from 테이블명 where 필드명 = "값";
$sql = "delete from members where idx='$s_idx';";
//쿼리 전송
mysqli_query($dbcon,$sql);
//DB 종료
mysqli_close($dbcon);
//세션 해제
unset($_SESSION['s_idx']);
unset($_SESSION['s_name']);
unset($_SESSION['s_id']);
//페이지 이동
echo "<script type='text/javascript'>
alert('정상 처리되었습니다.');
location.href = 'http://localhost/web_project/';
</script>";
?>