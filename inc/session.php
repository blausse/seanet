<?php
// 다른 페이지에서도 SESSION을 사용할 수 있게 함.
session_start();
//삼항연산자를 이용해 세션변수가 없을 때 발생하는 오류를 처리할 수 있음.
$s_idx = isset($_SESSION['s_idx'])? $_SESSION['s_idx']:"";
$s_name = isset($_SESSION['s_name'])? $_SESSION['s_name']:"";
// $idx = isset(조건)? 값1 : 값2;
$s_id = isset($_SESSION['s_id'])? $_SESSION['s_id']:"";
?>