<?php
/**Error 설명 */
// error_reporting(E_ALL);

// ini_set('display_errors', '1');
//작성자 입력을 위한 session 가져오기
// include '../inc/session.php';

// $n_title = $_POST['n_title'];
// $n_content = $_POST['n_content'];
// $writer = $_POST['writer'];
// $name = $_FILES['file']["name"];
// $type = $_FILES['file']["type"];
// $size = $_FILES['file']["size"];
// $w_date = date("Y-m-d");
$p_location = $_POST['final_location'];
$p_location_detail = $_POST['final_location_detail'];
$p_company_name = $_POST['p_company_name'];
$p_port = $_POST['p_port'];
$provision = $_POST['provision'];
$p_addr = $_POST['p_addr'];
$p_ceo = $_POST['p_ceo'];
$p_pic = $_POST['p_pic'];
$p_num = $_POST['p_num'];
$p_fax = $_POST['p_fax'];
$p_email_id = $_POST['p_email_id'];
$p_email_dmn = $_POST['p_email_dmn'];
$p_email = $p_email_id."@".$p_email_dmn;
$p_web = $_POST['p_web'];
$p_note = $_POST['p_note'];

$spare = $_POST['spare'];
$store = $_POST['store'];
$bilge = $_POST['bilge'];
$cleaning = $_POST['cleaning'];
$repair = $_POST['repair'];
$sludge = $_POST['sludge'];
$agency = $_POST['agency'];
$spro = $_POST['spro'];
$garbage = $_POST['garbage'];
$fw = $_POST['fw'];
$onboard_pay = $_POST['onboard_pay'];
$tex_free = $_POST['tex_free'];
$private = $_POST['private'];
$laundry = $_POST['laundry'];
$etc = $_POST['etc'];

include "../inc/dbcon.php";

$sql = "insert into provision_list ";
$sql .= "(p_location,p_location_detail,p_company_name,p_port,p_addr,p_ceo,p_pic,p_num,p_fax,p_email,p_web,p_note) " ;
$sql .= "values('$p_location','$p_location_detail','$p_company_name','$p_port','$p_addr','$p_ceo','$p_pic','$p_num','$p_fax','$p_email','$p_web','$p_note');";


$item_sql = "insert into provision_item ";
$item_sql .= "(provision,spare,store,bilge,cleaning,repair,sludge,agency,spro,garbage,fw,onboard_pay,tex_free,private,laundry,etc) " ;
$item_sql .= "values('$provision','$spare','$store','$bilge','$cleaning','$repair','$sludge','$agency','$spro','$garbage','$fw','$onboard_pay','$tex_free','$private','$laundry','$etc');";

mysqli_query($dbcon,$sql);
mysqli_query($dbcon,$item_sql);

mysqli_close($dbcon);

// //리디렉션
echo "<script type='text/javascript'>
location.href = 'list.php'
</script>";
?>