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
        <header>
            <div class="logo_header_wrap">
                <div class="logo_header">
                    <h1><a href="/web_project/index.php" class="header_logo">SEANET</a></h1>
                    <div class="header_search_wrap">
                        <svg class="glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path 
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                        </svg><input type="text" placeholder="찾고싶은 회사를 검색해보세요" class="header_search">
                    </div>
                    <div class="popular_wrap">
                        <h2 class="popular">실시간 인기</h2>
                        <div class="list_wrap">
                            <ol class="popular_list">
                                <li class="list1"><a href="#">1. <span>SK shipping</span></a></li>
                                <li><a href="#">2. <span>HMM</span></a></li>
                                <li><a href="#">3. <span>현대글로비스</span></a></li>
                                <li><a href="#">4. <span>장금상선</span></a></li>
                                <li><a href="#">5. <span>윌헴슨쉽매니지(주)</span></a></li>
                                <li><a href="#">6. <span>고려해운</span></a></li>
                                <li><a href="#">7. <span>팬오션</span></a></li>
                                <li><a href="#">8. <span>에이치라인</span></a></li>
                                <li><a href="#">9. <span>현대LNG</span></a></li>
                                <li class="list10"><a href="#">10. <span>SM Group 해운부문</span></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gnb_wrap">
                <nav id="gnb">
                    <h2 class="hide">GNB</h2>
                    <a href="#" class="gnb_logobox">
                        <svg class="gnb_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </a>
                    <ul class="gnb">
                        <li class="gnb1"><a href="ad_basic.html">구인광고
                                <ul>
                                    <li><a href="ad_basic.html">구인광고 검색</a></li>
                                    <li><a href="#">구인광고 등록</a></li>
                                    <li><a href="ad_detail.html">구인광고 상세</a></li>
                                </ul>
                            </a></li>
                        <li class="gnb2"><a href="#">Seaman's Voice
                                <ul>
                                    <li><a href="#">Seaman's Voice</a></li>
                                    <li><a href="#">Voice 작성</a></li>
                                    <li><a href="#">실시간 Voice</a></li>
                                </ul>
                            </a></li>
                        <li class="gnb3"><a href="#">선식, 선용품
                                <ul>
                                    <li><a href="#">업체조회</a></li>
                                    <li><a href="#">배송조회</a></li>
                                    <li><a href="#">업체등록</a></li>
                                    <li><a href="#">이용안내</a></li>
                                </ul>
                            </a></li>
                        <li class="gnb4"><a href="#">문의</a>
                        </li>
                    </ul>
                    <div class="gnb_bg"></div>
                </nav>
            </div>
            <div class="top_menu">
            <div class="top_menu_wrap">
                    <h2 class="hide">top menu</h2>
                    <?php if(!$s_idx){ ?>
                    <button  class='login'>로그인</button>
                    <button class='signup' id='signup'>회원가입</button>
                    <?php }else{ ?>
                <span class='print_name'><?php echo "$s_name"?>님, 안녕하세요</span>
                    <button class='logout' id='logout' onclick="location.href = '/web_project/login/logout.php'">로그아웃</button>
                    <button class='mypage' id='mypage' onclick="location.href = '/web_project/members/member_info.php'">마이페이지</button>
                    <?php }; ?>
                    <button class="customer_center" id="customer_center">고객센터</button>
                </div>
            </div>
        </header>
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
        <footer>
            <div class="footer_wrap">
                <h2 class="footer_logo">seanet</h2>
                <h3 class="hide">회사약관</h3>
                <ul class="footer_menu">
                    <li class="fnb1"><a href="#">회사소개</a></li>
                    <li class="fnb2"><a href="#">찾아오시는 길</a></li>
                    <li class="fnb3"><a href="#">회원약관</a></li>
                    <li class="fnb4"><a href="#">개인정보처리방침</a></li>
                    <li class="fnb5"><a href="#">제휴문의</a></li>
                </ul>
                <div class="footer_info">
                    <p>대표자:전헤아림</p>
                    <address>주소: 서울시 종로구 삼봉로 81, 1015호</address>
                    <p>사업자등록번호 : 875-88-01605 | 직업정보제공사업 : 서울청 제 2022-8호 | 통신판매업신고 : 제 2020-서울종로-2492호</p>
                    <p>문의 : info@deepcircle.net | 전화 : 02-538-5986 | 팩스 : 02-318-0261</p>
                    <p>COPYRIGHT DEEPCIRCLE CO.,LTD ALL RIGHTS RESERVED. SINCE 1998.</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>