<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select idx from members where idx=$s_idx;";
$result = mysqli_query($dbcon,$sql);
$array = mysqli_fetch_array($result);
if(!$s_idx || $s_idx !== $array['idx']){
    echo "
    <script type='text/javascript'>
    alert('작성자의 로그인이 필요합니다.');
    location.href= 'http://localhost/web_project/index.php';
    </script>
    ";
    exit;
};
?>