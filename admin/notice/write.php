<?php
include '../inc/session.php';
include '../inc/login_check.php';
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEANET</title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/ir.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link href="../css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="../css/write.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script src="../script/top_menu.js" type="text/javascript"></script>
    <script src="../script/popular_rank.js" type="text/javascript"></script>
    <script src="../script/gnb.js" type="text/javascript"></script>
    <script src="../script/write.js" type="text/javascript"></script>
    <script>
    </script>
</head>

<body>
    <div class="wrap">
        <?php include '../html_inc/header.inc'; ?>
        <main>
            <form action="insert.php" name="join.fom" method="post" onsubmit="return notice_check()">
                <fieldset class="signup_box">
                    <legend>공지사항</legend>
                    <legend class="private_signup" id="private_signup">공지사항</legend>
                    <div class="u_info1">
                    <p>
                            <input type="hidden" value="<?php echo $s_name;?>" name="writer">
                        </p>
                        <p>
                            <label for="n_title">제목</label>
                            <input type="text" name="n_title" id="n_title">
                        </p>
                        <p>
                            <label for="n_content">내용</label><br>
                            <textarea cols="60" rows="10" name="n_content" id="n_content"></textarea>
                        </p>
                    </div>
                    <p><button type="button" name="prev_btn" id="prev_btn">이전으로</button></p>
                    <p><button type="submit" name="sub_btn" id="sub_btn">등록하기</button></p>
                </fieldset>
            </form>
        </main>
        <?php include '../html_inc/footer.inc'; ?>
    </div>
</body>

</html>