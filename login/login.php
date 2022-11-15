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
    <link rel="stylesheet" href="../css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="../css/voice.css" type="text/css">
    <link rel="stylesheet" href="../css/provision.css" type="text/css">
    <link rel="stylesheet" href="../css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/rank.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script src="../script/gnb.js" type="text/javascript"></script>
    <script src="../script/top_menu.js" type="text/javascript"></script>
    <script src="../script/popular_rank.js" type="text/javascript"></script>
    <script src="../script/login.js" type="text/javascript"></script>
    <script></script>
</head>

<body>
    <div class="wrap">
        <?php include '../html_inc/header.inc'; ?>
        <main>
            <form action="login_ok.php" name="login.form" method="post" onsubmit="return login_form_check()">
                <fieldset class="login_box" id="login_box">
                    <legend class="log_in" id="login_txt">SEANET</legend>
                    <p><label for="u_id" class="u_id">ID<br><input type="text" name="u_id"
                                id="u_id_box" autofocus></label><br><span class="txt_id" id="err_id"></span> </p>
                    <p>
                        <label class="pwd">P/W<br><input type="password" name="pwd" id="u_pwd_box"></label><br>
                        <span class="txt_pwd" id="err_pwd"></span>
                    </p>
                    <div class="search">
                        <p><a href="#" class="login_id">아이디 찾기</a></p>
                        <p><a href="#" class="login_pwd">비밀번호 찾기</a></p>
                        <p><a href="/web_project/members/term.html" class="login_signup">회원가입</a></p>
                    </div>
                    <button type="button" class="prev_btn" onclick="history.back()">돌아가기</button>
                    <button type="submit" class="login_btn">로그인</button>
                </fieldset>
            </form>
        </main>
        <?php include '../html_inc/footer.inc'; ?>
    </div>
</body>

</html>