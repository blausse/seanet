<?php
// 세션 시작
session_start();

// 1. 데이터 가져오기
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
// echo $u_id." / ".$pwd;

// 2. db 연결
include "../inc/dbcon.php";

// 3. 쿼리 작성
// select u_id, pwd from members where u_id = '$u_id';
$sql = "select idx, u_name,u_id, pwd from members where u_id = '$u_id';";
// $sql = "select * from members where u_id = '$u_id';";
// echo $sql;

// 4. 쿼리 전송
$result = mysqli_query($dbcon,$sql);

// 5. db에서 데이터 가져오기(fetch)
// mysqli_fetch_row("전송한 쿼리"); // 컬럼 순서
// $row = mysqli_fetch_row($result);
// echo $row[0];
// $array = mysqli_fetch_array($result);
// echo $array["u_id"];
// $array = mysqli_fetch_array($result);
// echo $array['pwd'];

// mysqli_num_rows("전송한 쿼리"); // 전체 데이터 수
$num = mysqli_num_rows($result);
// echo $num;
// $(!$num) >> 아이디가 없다면
// if($u_id == $row[0]), if($u_id == $array['u_id']), $($num !== 0) >> 아이디가 있다면


// if(a) 는 a가 참이면 작동하므로
//    if(a!=0)과 동일하다고 합니다.

// if(!a) 는 a가 거짓이면 작동하므로
//    if(a==0)과 동일하다고 합니다.

//조건 처리
if(!$num){//일치하는 아이디가 없다면
        //메세지 출력 후 이전 페이지로 이동
echo
"<script type='text/javascript'>
alert('일치하는 아이디가 없습니다.');
history.back();
</script>";
}else{//일치하는 아이디가 존재하면
        //db에서 사용자 정보 가져오기
$array = mysqli_fetch_array($result);


if($array['pwd']!== $pwd)    //사용자가 입력한 비밀번호와 db에서 가져온 비밀번호가 일치하지 않는다면
                {//메세지 출력 후 이전 페이지로 이동
echo
"<script type='text/javascript'>
alert('비밀번호가 일치하지 않습니다.');
history.back();
</script>";
                }
else{      //비밀번호가 일치한다면
                echo
                "<script type='text/javascript'>
                alert('로그인 되었습니다.');
                </script>";
                // 세션 변수 생성, session : 모든 페이지에서 사용할 수 있는 공통 변수(개개인에게 부여되는 고유한 아이디)
                $_SESSION['s_idx'] = $array['idx'];
                $_SESSION['s_name']= $array['u_name'];
                $_SESSION['s_id']= $array['u_id'];
};
}

//DB 종료
mysqli_close($dbcon);

//페이지 이동
echo"
<script type='text/javascript'>location.href='/web_project/admin/index.php';</script>
";

?>