<?php
session_start();
$idx = isset($_SESSION['s_idx'])? $_SESSION['s_idx']:"";
$name = isset($_SESSION['s_name'])? $_SESSION['s_name']:"";
// $idx = isset(조건)? 값1 : 값2;
$name = $_SESSION['s_name'];
$id = $_SESSION['s_id'];

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEANET</title>
    <link rel="stylesheet" href="/web_project/css/reset.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/ir.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/footer.css" type="text/css">
    <link href="/web_project/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="/web_project/css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/header.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/voice.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/provision copy.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/rank.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/gnb.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/header_search.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/main_bg.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/community.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/company_info.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/ad_info.css" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="/web_project/script/jquery.js"></script>
    <script src="/web_project/script/jquery.nice-select.js"></script>
    <script src="/web_project/script/script.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="/web_project/script/datepicker.js" type="text/javascript"></script>
    <script src="/web_project/script/gnb.js" type="text/javascript"></script>
    <script src="/web_project/script/popular.js" type="text/javascript"></script>
    <script src="/web_project/script/top_menu.js" type="text/javascript"></script>
    <script></script>
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
                                    <li><a href="ad_reg.html">구인광고 등록</a></li>
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
                    <?php if(!$idx){ ?>
                    <button  class='login'>로그인</button>
                    <button class='signup' id='signup'>회원가입</button>
                    <?php }else{ ?>
                <span class='print_name'><?php echo "$name"?>님, 안녕하세요</span>
                    <button class='logout' id='logout' onclick="location.href = '/web_project/login/logout.php'">로그아웃</button>
                    <button class='mypage' id='mypage'>마이페이지</button>
                    <?php }; ?>
                    <button class="customer_center" id="customer_center">고객센터</button>
                </div>
            </div>

        </header>
        <main>
            <form action="ad_table.php" name="reg.form" method="post" enctype="multipart/form-data" id="ad_reg">
                <fieldset>
                    <legend class="ad_reg_title">구인광고등록</legend>
                    <div class="company_info">
                        <h3>기업정보입력</h3>
                        <div class="company_info_box1">
                            <p><label for="c_name">회사명</label><input type="text" name="c_name" id="c_name"></p>
                            <p><label for="c_dmn">홈페이지</label><input type="text" name="c_dmn" id="c_dmn"></p>
                            <p><label for="c_num">전화번호</label><input type="text" name="c_num" id="c_num"></p>
                            <p><label for="c_fax">팩스</label><input type="text" name="c_fax" id="c_fax"></p>
                            <p><label for="c_pic">담당자</label><input type="text" name="c_pic" id="c_pic"></p>
                            <p><label for="c_email">담당자 이메일</label><input type="text" name="c_email" id="c_email"></p>
                        </div>
                        <div class="company_info_box2">
                            <p class="c_addr"><label for="c_addr" id="c_addr_label">주소</label><input type="text"
                                    name="c_addr" id="c_addr">
                            </p>
                            <p class="c_pr"><label for="c_pr" id="c_pr_label">사업내용</label><input type="text" name="c_pr"
                                    id="c_pr"></p>
                        </div>
                        <div class="filebox">
                            <label for="c_logo" class="c_logo">회사로고</label>
                            <input name="c_logo" class="upload-name" value="이미지 크기 : 120 * 80 pixels"
                                placeholder="이미지 크기 : 120 * 80 pixels">
                            <label class="file_search" for="file">파일찾기</label>
                            <input type="file" id="file" name="file">
                        </div>
                    </div>
                    <div class="ad_info">
                        <h3>구인정보입력</h3>
                        <div class="ad_info_sel">
                            <p><label for="ad_info_work">직무
                                </label>
                                <select name="ad_info_work">
                                    <option value="">직무 선택</option>
                                    <option value="해기사">해기사</option>
                                    <option value="조선, 수리">조선, 수리</option>
                                    <option value="용선, 중개">용선, 중개</option>
                                    <option value="원양, 수산">원양, 수산</option>
                                    <option value="공무감독">공무감독</option>
                                    <option value="해양레저관광">해양레저관광</option>
                                    <option value="항해, 통신">항해, 통신</option>
                                    <option value="해양연구">해양연구</option>
                                    <option value="해운, 항만">해운, 항만</option>
                                    <option value="공공">공공</option>
                                    <option value="운항, 관리">운항, 관리</option>
                                    <option value="해양행정기관">해양행정기관</option>
                                    <option value="IT개발, 데이터">IT개발, 데이터</option>
                                    <option value="기타">기타</option>
                                </select>
                            </p>
                            <p><label for="ad_info_location">근무지역
                                </label>
                                <select name="ad_info_location">
                                    <option value="">지역 선택</option>
                                    <option value="서울">서울</option>
                                    <option value="인천">인천</option>
                                    <option value="대전">대전</option>
                                    <option value="대구">대구</option>
                                    <option value="부산">부산</option>
                                    <option value="광주">광주</option>
                                    <option value="울산">울산</option>
                                    <option value="세종">세종</option>
                                    <option value="강원">강원</option>
                                    <option value="충북">충북</option>
                                    <option value="충남">충남</option>
                                    <option value="전북">전북</option>
                                    <option value="전남">전남</option>
                                    <option value="경북">경북</option>
                                    <option value="경남">경남</option>
                                    <option value="국내전역">국내전역</option>
                                    <option value="해외전역">해외전역</option>
                                </select>
                            </p>
                            <p><label for="ad_info_salary">급여
                                </label>
                                <select name="ad_info_salary">
                                    <option value="">급여 선택</option>
                                    <option value="220 만원 이하">220 만원 이하</option>
                                    <option value="220 - 250 만원">220 - 250 만원</option>
                                    <option value="250 - 300 만원">250 - 300 만원</option>
                                    <option value="300 - 350 만원">300 - 350 만원</option>
                                    <option value="350 - 400 만원">350 - 400 만원</option>
                                    <option value="400 - 500 만원">400 - 500 만원</option>
                                    <option value="500 - 600 만원">500 - 600 만원</option>
                                    <option value="600 - 700 만원">600 - 700 만원</option>
                                    <option value="700 - 800 만원">700 - 800 만원</option>
                                    <option value="800 - 900 만원">800 - 900 만원</option>
                                    <option value="900 만원 이상">900 만원 이상</option>
                                    <option value="내규">내규</option>
                                    <option value="협의">협의</option>
                                </select>
                            </p>
                            <p><label for="ad_info_school">학력
                                </label>
                                <select name="ad_info_school">
                                    <option value="">학력 선택</option>
                                    <option value="초등학교 졸업">초등학교 졸업</option>
                                    <option value="중학교졸업">중학교졸업</option>
                                    <option value="고등학교 졸업">고등학교 졸업</option>
                                    <option value="전문 학사">전문 학사</option>
                                    <option value="일반 학사">일반 학사</option>
                                    <option value="석사, 박사">석사, 박사</option>
                                </select>
                            </p>
                            <p><label for="ad_info_worktype">근무형태
                                </label>
                                <select name="ad_info_worktype">
                                    <option value="">근무 형태 선택</option>
                                    <option value="정규직">정규직</option>
                                    <option value="계약직">계약직</option>
                                    <option value="파견직">파견직</option>
                                    <option value="인턴">인턴</option>
                                    <option value="병역특례">병역특례</option>
                                    <option value="아르바이트">아르바이트</option>
                                    <option value="전임">전임</option>
                                    <option value="교육생">교육생</option>
                                    <option value="프리랜서">프리랜서</option>
                                    <option value="해외취업">해외취업</option>
                                    <option value="파트">파트</option>
                                    <option value="위촉직">위촉직</option>
                                    <option value="기타">기타</option>
                                </select>
                            </p>
                            <p><label for="ad_info_ctype">기업형태
                                </label>
                                <select name="ad_info_ctype">
                                    <option value="">기업 형태 선택</option>
                                    <option value="대기업">대기업</option>
                                    <option value="외국계">외국계</option>
                                    <option value="코스닥">코스닥</option>
                                    <option value="주식회사">주식회사</option>
                                    <option value="병역특례 인증 업체">병역특례 인증 업체</option>
                                    <option value="중견기업">중견기업</option>
                                    <option value="중소기업">중소기업</option>
                                    <option value="기타">기타</option>
                                </select>
                            </p>
                        </div>
                        <div class="ad_info_wrap">
                            <p><label for="ad_info_career">경력</label><input type="text" name="ad_info_career"
                                    id="ad_info_career"></p>
                            <p><label for="ad_info_date">근무일시</label><input type="text" name="ad_info_date"
                                    id="ad_info_date"></p>
                            <p><label for="ad_info_essential">필수사항</label><input type="text" name="ad_info_essential"
                                    id="ad_info_essential"></p>
                            <p><label for="ad_info_preferential">우대사항</label><input type="text"
                                    name="ad_info_preferential" id="ad_info_preferential"></p>
                            <p><label for="ad_info_gender">성별</label><input type="text" name="ad_info_gender"
                                    id="ad_info_gender"></p>
                        </div>
                        <div class="ad_info_desc">
                            <p id="ad_info_titlebox"><label for="ad_info_title">광고 제목</label><input type="text"
                                    name="ad_info_title" id="ad_info_title"></p>
                            <label for="ad_info_detail">모집 부문 및 상세 정보</label><input type="text" name="ad_info_detail"
                                id="ad_info_detail">
                        </div>
                        <div class="ad_info_date">
                            <h3>접수기간</h3>
                            <p class="start_date"><label for="ad_start_date">시작일: </label> <input type="text"
                                    value="클릭해주세요" id="datepicker1" name="ad_start_date"></p>
                            <p class="end_date"><label for="ad_end_date">마감일: </label> <input type="text" value="클릭해주세요"
                                    id="datepicker2" name="ad_end_date"></p>
                        </div>
                    </div>
                    <button type="submit" id="ad_reg_btn">등록하기</button>
                </fieldset>
            </form>
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