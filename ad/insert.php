<?php
/**Error 설명 */
// error_reporting(E_ALL);

// ini_set('display_errors', '1');
//작성자 입력을 위한 session 가져오기
// include '../inc/session.php';

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

$ai_work = $_POST['ai_work'];
$ai_location = $_POST['ai_location'];
$ai_salary = $_POST['ai_salary'];
$ai_school = $_POST['ai_school'];
$ai_worktype = $_POST['ai_worktype'];
$ai_ctype = $_POST['ai_ctype'];
$ai_career = $_POST['ai_career'];
$ai_date = $_POST['ai_date'];
$ai_essential = $_POST['ai_essential'];
$ai_preferential = $_POST['ai_preferential'];
$ai_gender = $_POST['ai_gender'];
$ai_title = $_POST['ai_title'];
$ai_detail = $_POST['ai_detail'];
$ai_startDate = $_POST['ai_startDate'];
$ai_endDate = $_POST['ai_endDate'];

if($_FILES["file"] != NULL){
    $tmp_name = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];
    $up = move_uploaded_file($tmp_name, "../data/$name");
};

$c_logo_name = $_FILES["file"]["name"];
$c_logo_type = $_FILES["file"]["type"];
$c_logo_date = $_FILES["file"]["size"];

include "../inc/dbcon.php";

$sql = "insert into ad_company";
$sql .= "(c_name,c_web,c_num,c_fax,c_pic,c_email,c_addr,c_info,c_logo_type,c_logo_date,c_logo_name) " ;
$sql .= "values('$c_name','$c_web','$c_num','$c_fax','$c_pic','$c_email','$c_addr','$c_info','$c_logo_type','$c_logo_date','$c_logo_name');";

mysqli_query($dbcon,$sql);

mysqli_close($dbcon);

//리디렉션
echo "<script type='text/javascript'>
location.href = 'list.php'
</script>";
?>