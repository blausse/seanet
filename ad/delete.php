<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$n_idx = $_GET['n_idx'];
$sql = "delete from notice where idx=$n_idx;";
mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
echo "<script type='text/javascript'>
location.href = 'list.php'
</script>";
?>