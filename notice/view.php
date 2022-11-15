<?php
include '../inc/session.php';
include '../inc/dbcon.php';
$n_idx = $_GET['n_idx'];
$sql = "select*from notice where idx=$n_idx";
$result = mysqli_query($dbcon,$sql);
$array = mysqli_fetch_array($result);
//조회수 업데이트
$cnt = $array['cnt'] + 1;
$sql = "update notice set cnt = $cnt where idx = $n_idx;";
mysqli_query($dbcon,$sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th,td{padding:10px;font-size:16px;border-collapse:collapse;}
    tr>td:first-child{background:#e0e0e0;}
    #n_content{background: white;}
    tr{border:2px solid #999;}
</style>
<script>
function notice_del() {
    const ck = confirm("정말 삭제하시겠습니까?");
    if (ck) {
        location.href = "delete.php?n_idx=<?php echo $n_idx;?>";
    };
};
</script>
</head>
<body>
    <table>
    <tr>
    <td>번호</td>
    <td><?php echo $n_idx;?></td>
    </tr>
    <tr>
    <td>제목</td>
    <td><?php echo $array['n_title'];?></td>
    </tr>
    <tr>
    <td>작성자</td>
    <td><?php echo $array['writer'];?></td>
    </tr>
    <tr>
    <td>작성일자</td>
    <td><?php echo $array['w_date'];?></td>
    </tr>
    <tr>
    <td>조회수</td>
    <td><?php echo $cnt;?></td>
    </tr>
    <tr>
    <td colspan='2' id = "n_content">
        <?php
        $n_content = str_replace("\n","<br>",$array['n_content']);
        $n_content = str_replace(" ","&nbsp;",$n_content);
        echo $n_content;
        ?>
    </td>
    </tr>
    </table>
    <p class="list">
        <a href="list.php">[목록]</a>
        <?php if($s_id == "admin"){ ?>
        <a href="modify.php?n_idx=<?php echo $n_idx;?>">[수정]</a>
        <a href="#" onclick="notice_del()">[삭제]</a>
        <?php };?>
        <?php if($s_id == $array["writer"]){ ?>
        <a href="modify.php?n_idx=<?php echo $n_idx;?>">[수정]</a>
        <a href="#" onclick="notice_del()">[삭제]</a>
        <?php };?>
    </p>
</body>
</html>