<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$n_idx = $_GET['n_idx'];
$edit_date = date("Y-m-d");
$sql = "update notice set n_title='$n_title',n_content='$n_content',w_date='$edit_date' where idx=$n_idx;";
mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
echo "<script type='text/javascript'>
location.href = 'view.php?n_idx=$n_idx';
</script>";
?>