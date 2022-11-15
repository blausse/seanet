<?php
$u_id = $_POST["u_id"];

include "../inc/dbcon.php";

$sql = "select u_id from members where u_id = '$u_id';";

$result = mysqli_query($dbcon,$sql);

$num = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function return_id() {
            opener.document.getElementById("u_id").value = "<?php echo "$u_id";?>";
            window.close();
        };
        // function searched_id() {
        //     var id_txt = document.getElementById("id_txt");
        //     id_txt.textContent = opener.document.getElementByID("u_id");
        // };
    </script>
</head>
<body>
    <?php if(!$num){ ?>
    <p>입력하신 <span class="id_txt" id="id_txt" onload="searched_id()"><?php echo "$u_id"; ?></span>은 사용할 수 <span>있는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="return_id()">[사용하기]</a>
        <a href="#" onclick="history.back()">[다시 검색]</a>
    </p><?php } else{ ?>
    <p>입력하신 <span class="id_txt" id="id_txt" onload="searched_id()"><?php echo "$u_id";  ?></span>은 사용할 수 <span>없는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="history.back()">[다시 검색]</a>
        <a href="#" onclick="window.close()">[닫기]</a>
    </p><?php }; 
    mysqli_close($dbcon); ?>
</body>

</html>