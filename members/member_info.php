<?php
//세션으로 데이터 가져오기
include "../inc/session.php";
//로그인 사용자만 접근
include "../inc/login_check.php";
//db 연결
include "../inc/dbcon.php";
//쿼리 작성
$sql ="select * from members where idx=$s_idx;";
//쿼리 실행
$result = mysqli_query($dbcon,$sql);
//db에서 데이터 가져오기
//mysqli_fetch_row() -- 필드 순서
$array = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="../css/user_info.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="../script/postal_code.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script src="../script/top_menu.js" type="text/javascript"></script>
    <script src="../script/popular_rank.js" type="text/javascript"></script>
    <script src="../script/gnb.js" type="text/javascript"></script>
    <script src="../script/join.js" type="text/javascript"></script>
    <script src="/web_project/script/email_change.js" type="text/javascript"></script>
    <script src="/web_project/script/member_info.js" type="text/javascript"></script>
    <script src="/web_project/script/member_delete.js" type="text/javascript"></script>
    <script>
    </script>
</head>

<body>
    <div class="wrap">
    <?php include '../html_inc/header.inc'; ?>
        <main>
            <form action="edit.php" name="edit.fom" method="post" onsubmit="return edit_form_check()">
                <fieldset class="signup_box">
                    <p class="private_signup" id="private_signup">회원 정보</p>
                    <input type="hidden" name="g_idx" value="<?php $array['idx'] ?>">
                    <div class="u_info1">
                        <p>
                            ID : <?php echo $array["u_id"]; ?>
                        </p>
                        <p>
                            <label for="pwd">P/W</label><br>
                            <input type="password" name="pwd" id="pwd" value="">
                            <br><span class="err_txt" id="err_pwd"></span>
                        </p>
                        <p>
                            <label for="repwd">P/W 확인</label><br>
                            <input type="password" name="repwd" id="repwd" value="">
                            <br><span class="err_txt" id="err_repwd"></span>
                        </p>
                        <p>
                            실명 : <?php echo $array["u_name"]; ?>
                        </p>
                        <?php
                        //db에 입력된 yyyy-mm-dd 형식을 yyyymmdd로 치환
                        $birth = str_replace("-","",$array['birth']);
                        ?>
                        <p>
                            <label for="birth">생년월일</label><br>
                            <input type="text" name="birth" id="birth" value="<?php echo $birth; ?>">
                            <br>
                            <span class="type_birth">ex) 20221006</span><br><span class="err_txt" id="err_birth"></span>
                        </p>
                        <?php
                        //문자 분리 : explode
                        //변수 = explode("기준문자","어떤 값에서");
                        //변수가 배열처리되어 분리된 값 사용
                        //db에서 가져온 이메일을 @ 기준으로 분리
                        $email = explode("@", $array["email"]);
                        ?>
                        <p><label for="email_id">이메일</label><br><input type="text" name="email_id" id="email_id" value="<?php echo $email[0]; ?>"><br> @
                            <input type="text" name="email_dmn" id="email_dmn" value="<?php echo $email[1] ?>"><select name="email_sel" id="email_sel">
                                <option value="">직접 입력</option>
                                <option value="naver.com">네이버</option>
                                <option value="hanmail.net">다음</option>
                                <option value="gmail.com">구글</option>
                                <option value="nate.com">네이트</option>
                            </select>
                        </p>
                        <p>
                            <label for="mobile">전화번호</label><br>
                            <input type="text" name="mobile" id="mobile"value="<?php echo $array["mobile"]; ?>">
                            <br><span class="gd_mobile">"-"없이 숫자만 입력</span><br><span class="err_txt"
                                id="err_mobile"></span>
                        </p>
                        <p class="address">
                            <label for="pscode">주소</label><br>
                            <input type="text" name="pscode" id="pscode" value="<?php echo $array["pscode"]; ?>">
                            <button type="button" onclick="postalcode()">주소검색</button><br>
                            <label for=" addr_b">기본주소</label>
                            <input type="text" name="addr_b" id="addr_b" value="<?php echo $array["addr_b"]; ?>"><br>
                            <label for="addr_d">상세주소</label>
                            <input type="text" name="addr_d" id="addr_d" value="<?php echo $array["addr_d"]; ?>">
                            <label for="sub_addr">참고항목</label><input type="text" name="sub_addr" id="sub_addr" value="">
                        </p>
                        <p class="gender_wrap">
                            <input type="radio" name="gender" id="male" value="m"<?php if($array['gender'] == 'm') echo " checked";?>><label for="gender">남</label>
                            <input type="radio" name="gender" id="female" value="f"<?php if($array['gender'] == 'f') echo " checked";?>><label for="gender">여</label>
                        </p>
                    </div>
                    <p><button type="button" name="prev_btn" id="prev_btn">이전으로</button></p>
                    <p><button type="submit" name="sub_btn" id="sub_btn">수정하기</button></p>
                    <p><button type="button" name="exit_btn" id="exit_btn" onclick="mem_del()">탈퇴하기</button></p>
                </fieldset>
            </form>
        </main>
        <?php include '../html_inc/footer.inc'; ?>
    </div>
</body>

</html>