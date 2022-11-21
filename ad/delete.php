<?php
include "../inc/session.php";
include "../inc/dbcon.php";
$n_idx = $_GET['n_idx'];
$sql = "delete ad_company,ad_info from ad_company join ad_info on ad_company.idx = ad_info.idx where ad_company.idx = $n_idx;";
// $sql = "delete from notice where idx=$n_idx;";
mysqli_query($dbcon,$sql);
mysqli_close($dbcon);
echo "<script type='text/javascript'>
location.href = 'list.php'
</script>";
?>