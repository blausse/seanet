<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select idx from notice where idx=$n_idx;";
if(!$s_idx || $s_idx !== "$n_idx"){
    echo "
    <script type='text/javascript'>
    alert('작성자의 로그인이 필요합니다.');
    location.href= 'http://localhost/web_project/index.php';
    </script>
    ";
    exit;
};
?>