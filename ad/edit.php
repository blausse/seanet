<?php
error_reporting(E_ALL);

ini_set('display_errors', '1');

include "../inc/session.php";
include "../inc/dbcon.php";
$n_idx = $_GET['n_idx'];

$c_name = $_POST['c_name'];
$c_web = $_POST['c_web'];
$c_num = $_POST['c_num'];
$c_fax = $_POST['c_fax'];
$c_pic = $_POST['c_pic'];
$c_email_id = $_POST['c_email_id'];
$c_email_dmn = $_POST['c_email_dmn'];
$c_email = $c_email_id."@".$c_email_dmn;
$c_addr = $_POST['c_addr'];
$c_info = $_POST['c_info'];
$vip = $_POST['vip'];

$work = $_POST['ai_work'];
$ai_work = join(',',$work);
$location = $_POST['ai_location'];
$ai_location = join(',',$location);
$salary = $_POST['ai_salary'];
$ai_salary = join(',',$salary);
$school = $_POST['ai_school'];
$ai_school = join(',',$school);
$worktype = $_POST['ai_worktype'];
$ai_worktype = join(',',$worktype);
$ctype = $_POST['ai_ctype'];
$ai_ctype = join(',',$ctype);
$ai_career = $_POST['ai_career'];
$ai_date = $_POST['ai_date'];
$ai_essential = $_POST['ai_essential'];
$ai_preferential = $_POST['ai_preferential'];
$ai_gender = $_POST['ai_gender'];
$ai_title = $_POST['ai_title'];
$ai_detail = $_POST['ai_detail'];
$ai_start = $_POST['ai_startDate'];
$ai_smonth = SUBSTR($ai_start,0,2);
$ai_sdate = SUBSTR($ai_start,3,2);
$ai_syear = SUBSTR($ai_start,6,9);
$ai_startDate = $ai_syear."-".$ai_smonth."-".$ai_sdate;
$ai_end = $_POST['ai_endDate'];
$ai_emonth = SUBSTR($ai_end,0,2);
$ai_edate = SUBSTR($ai_end,3,2);
$ai_eyear = SUBSTR($ai_end,6,4);
$ai_endDate = $ai_eyear."-".$ai_emonth."-".$ai_edate;



    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];
    $up = move_uploaded_file($tmp_name, "../data/$name");
    $vip_tmp_name = $_FILES["vip_file"]["tmp_name"];
    $vip_name = $_FILES["vip_file"]["name"];
    $vip_up = move_uploaded_file($vip_tmp_name, "../data/$vip_name");
    $main_tmp_name = $_FILES["main_file"]["tmp_name"];
    $main_name = $_FILES["main_file"]["name"];
    $main_up = move_uploaded_file($main_tmp_name, "../data/$main_name");


$c_logo_name = $_FILES["file"]["name"];
$c_logo_type = $_FILES["file"]["type"];
$c_logo_date = $_FILES["file"]["size"];
$c_vip_logo = $_FILES["vip_file"]["name"];
$c_main_logo = $_FILES["main_file"]["name"];


$sql = "update ad_company set c_name='$c_name',c_web='$c_web',c_num='$c_num',c_fax='$c_fax',c_pic='$c_pic',c_email='$c_email',c_addr='$c_addr',c_info='$c_info',c_logo_type='$c_logo_type',c_logo_date='$c_logo_date',c_logo_name='$c_logo_name',c_vip_logo='$c_vip_logo',c_main_logo='$c_main_logo',vip='$vip' where ad_company.idx=$n_idx;";

$aiSql = "update ad_info set ai_work='$ai_work',ai_location='$ai_location',ai_salary='$ai_salary',ai_school='$ai_school',ai_worktype='$ai_worktype',ai_ctype='$ai_ctype',ai_career='$ai_career',ai_date='$ai_date',ai_essential='$ai_essential',ai_preferential='$ai_preferential',ai_gender='$ai_gender',ai_title='$ai_title',ai_detail='$ai_detail',ai_startDate='$ai_startDate',ai_endDate='$ai_endDate' where ad_info.idx=$n_idx;";

mysqli_query($dbcon,$sql);
mysqli_query($dbcon,$aiSql);
mysqli_close($dbcon);
echo "<script type='text/javascript'>
location.href = 'list.php?n_idx=$n_idx';
</script>";
?>