<?php
include '../inc/session.php';
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
    <script>
    </script>
</head>

<body>
    <div class="wrap">
        <?php include '../html_inc/header.inc'; ?>
        <main>
            <form action="insert.php" name="join.fom" method="post" onsubmit="return form_check()">
                <fieldset class="signup_box">
                    <p class="private_signup" id="private_signup">개인회원</p>
                    <div class="u_info1">
                        <p><label for="u_id">ID</label><br><input type="text" name="u_id" id="u_id">
                            <button type="button" class="id_search">중복확인</button>
                            <br><span class="err_txt" id="err_id"></span>
                        </p>
                        <p>
                            <label for="pwd">P/W</label><br>
                            <input type="password" name="pwd" id="pwd">
                            <br><span class="err_txt" id="err_pwd"></span>
                        </p>
                        <p>
                            <label for="repwd">P/W 확인</label><br>
                            <input type="password" name="repwd" id="repwd">
                            <br><span class="err_txt" id="err_repwd"></span>
                        </p>
                        <p>
                            <label for="u_name">실명</label><br>
                            <input type="text" name="u_name" id="u_name">
                        </p>
                        <p>
                            <label for="birth">생년월일</label><br>
                            <input type="text" name="birth" id="birth">
                            <br>
                            <span class="type_birth">ex) 20221006</span><br><span class="err_txt" id="err_birth"></span>
                        </p>
                        <p><label for="email_id">이메일</label><br><input type="text" name="email_id" id="email_id"><br> @
                            <input type="text" name="email_dmn" id="email_dmn"><select name="email_sel" id="email_sel">
                                <option value="">직접 입력</option>
                                <option value="naver.com">네이버</option>
                                <option value="hanmail.net">다음</option>
                                <option value="gmail.com">구글</option>
                                <option value="nate.com">네이트</option>
                            </select>
                        </p>
                        <p>
                            <label for="mobile">전화번호</label><br>
                            <input type="text" name="mobile" id="mobile">
                            <br><span class="gd_mobile">"-"없이 숫자만 입력</span><br><span class="err_txt"
                                id="err_mobile"></span>
                        </p>
                        <p class="address">
                            <label for="pscode">주소</label><br>
                            <input type="text" name="pscode" id="pscode">
                            <button type="button" onclick="postalcode()">주소검색</button><br>
                            <label for=" addr_b">기본주소</label>
                            <input type="text" name="addr_b" id="addr_b"><br>
                            <label for="addr_d">상세주소</label>
                            <input type="text" name="addr_d" id="addr_d">
                            <label for="sub_addr">참고항목</label><input type="text" name="sub_addr" id="sub_addr">
                            <!-- <br><button type="button" onclick="intxt()">입력</button> -->
                        </p>
                        <p class="gender_wrap">
                            <input type="radio" name="gender" id="male" value="m"><label for="gender">남</label>
                            <input type="radio" name="gender" id="female" value="f"><label for="gender">여</label>
                        </p>
                        <p>
                            <input type="checkbox" name="apply" id="apply" value="y"><label for="apply">약관 동의</label>
                        </p>
                    </div>
                    <p><button type="button" name="prev_btn" id="prev_btn">이전으로</button></p>
                    <p><button type="submit" name="sub_btn" id="sub_btn">등록하기</button></p>
                </fieldset>
            </form>
            <!-- <form action="join.form" name="insert.php" method="get" onsubmit="return form_check()"
                class="company_signup">
                <fieldset class="signup_box">
                    <p class="company_signup" id="company_signup">기업회원</p>
                    <div class="u_info2">
                        <p><label for="u_id">ID</label><br><input type="text" name="u_id" id="u_id">
                            <button type="button" class="id_search">중복확인</button>
                            <br><span class="err_txt" id="err_id"></span>
                        </p>
                        <p>
                            <label for="pwd">P/W</label><br>
                            <input type="password" name="pwd" id="pwd">
                            <br><span class="err_txt" id="err_pwd"></span>
                        </p>
                        <p>
                            <label for="repwd">P/W 확인</label><br>
                            <input type="password" name="repwd" id="repwd">
                            <br><span class="err_txt" id="err_repwd"></span>
                        </p>
                        <p>
                            <label for="c_name">회사명</label><br>
                            <input type="text" name="c_name" id="c_name">
                        </p>
                        <p>
                            <label for="pic">담당자명</label><br>
                            <input type="text" name="pic" id="pic">
                            <br>
                            <span class="type_pic">ex)00팀 000매니저</span><br><span class="err_txt" id="err_pic"></span>
                        </p>
                        <p><label for="email">이메일</label><br><input type="text" name="email" id="email"><br> @ <input
                                type="text" name="email_dmn" id="email_dmn"><select name="email_sel" id="email_sel">
                                <option value="">직접 입력</option>
                                <option value="naver.com">네이버</option>
                                <option value="hanmail.net">다음</option>
                                <option value="gmail.com">구글</option>
                                <option value="nate.com">네이트</option>
                            </select></p>
                        <p>
                            <label for="mobile">전화번호</label><br>
                            <input type="text" name="mobile" id="mobile">
                            <br><span class="gd_mobile">"-"없이 숫자만 입력</span><br><span class="err_txt"
                                id="err_mobile"></span>
                        </p>
                    </div>
                    <p><button type="submit" name="sub_btn" id="sub_btn">등록하기</button></p>
                </fieldset>
            </form> -->
        </main>
        <?php include '../html_inc/footer.inc'; ?>
    </div>
</body>

</html>