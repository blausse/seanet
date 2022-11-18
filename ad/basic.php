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
    <link rel="stylesheet" href="/web_project/css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/gnb.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/header_search.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/ad_search.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/main_rank.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/web_project/script/jquery.js"></script>
    <script src="/web_project/script/jquery.nice-select.js"></script>
    <script src="/web_project/script/script.js" type="text/javascript"></script>
    <script src="/web_project/script/gnb.js" type="text/javascript"></script>
    <script src="/web_project/script/top_menu.js" type="text/javascript"></script>
    <script src="/web_project/script/popular_rank.js" type="text/javascript"></script>
    <script></script>
</head>

<body>
    <div class="wrap">
            <?php include("../html_inc/header.inc"); ?>
        <main>
            <form class="search_rank">
                <fieldset class="ad_search">
                    <legend class="hide">광고 검색창</legend>
                    <div class="search_wrap">
                        <div class="search_title">
                            <ul>
                                <li class="work">직무</li>
                                <li class="location">지역</li>
                                <li class="salary">급여</li>
                                <li class="school">학력</li>
                                <li class="type">근무형태</li>
                                <li class="any">기업형태</li>
                            </ul>
                        </div>
                        <div class="search_tabs">
                            <ul class="ad_work">
                                <li><label for=""><input type="checkbox" name="" value="해기사">해기사</label></li>
                                <li><label for=""><input type="checkbox" name="" value="조선, 수리">조선, 수리</label></li>
                                <li><label for=""><input type="checkbox" name="" value="용선, 중개">용선, 중개</label></li>
                                <li><label for=""><input type="checkbox" name="" value="원양, 수산">원양, 수산</label></li>
                                <li><label for=""><input type="checkbox" name="" value="공무감독">공무감독</label></li>
                                <li><label for=""><input type="checkbox" name="" value="해양레저관광">해양레저관광</label></li>
                                <li><label for=""><input type="checkbox" name="" value="항해, 통신">항해, 통신</label></li>
                                <li><label for=""><input type="checkbox" name="" value="해양연구">해양연구</label></li>
                                <li><label for=""><input type="checkbox" name="" value="해운, 항만">해운, 항만</label></li>
                                <li><label for=""><input type="checkbox" name="" value="공공">공공</label></li>
                                <li><label for=""><input type="checkbox" name="" value="운항,관리">운항, 관리</label></li>
                                <li><label for=""><input type="checkbox" name="" value="해양행정기관">해양행정기관</label></li>
                                <li><label for=""><input type="checkbox" name="" value="IT개발, 데이터">IT개발, 데이터</label>
                                </li>
                                <li><label for=""><input type="checkbox" name="" value="기타">기타</label></li>
                            </ul>
                            <ul class="ad_location">
                                <li><label for=""><input type="checkbox" name="" value="서울">서울</label></li>
                                <li><label for=""><input type="checkbox" name="" value="인천">인천</label></li>
                                <li><label for=""><input type="checkbox" name="" value="대전">대전</label></li>
                                <li><label for=""><input type="checkbox" name="" value="대구">대구</label></li>
                                <li><label for=""><input type="checkbox" name="" value="부산">부산</label></li>
                                <li><label for=""><input type="checkbox" name="" value="광주">광주</label></li>
                                <li><label for=""><input type="checkbox" name="" value="울산">울산</label></li>
                                <li><label for=""><input type="checkbox" name="" value="세종">세종</label></li>
                                <li><label for=""><input type="checkbox" name="" value="강원">강원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="충북">충북</label></li>
                                <li><label for=""><input type="checkbox" name="" value="충남">충남</label></li>
                                <li><label for=""><input type="checkbox" name="" value="전북">전북</label></li>
                                <li><label for=""><input type="checkbox" name="" value="전남">전남</label></li>
                                <li><label for=""><input type="checkbox" name="" value="경북">경북</label></li>
                                <li><label for=""><input type="checkbox" name="" value="경남">경남</label></li>
                                <li><label for=""><input type="checkbox" name="" value="국내전역">국내전역</label></li>
                                <li><label for=""><input type="checkbox" name="" value="해외전역">해외전역</label></li>
                            </ul>
                            <ul class="ad_salary">
                                <li><label for=""><input type="checkbox" name="" value="220 만원 이하">220 만원 이하</label></li>
                                <li><label for=""><input type="checkbox" name="" value="220 - 250 만원">220 - 250만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="250 - 300 만원">250 - 300만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="300 - 350 만원">300 - 350만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="350 - 400 만원">350 - 400만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="400 - 500 만원">400 - 500만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="500 - 600 만원">500 - 600만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="600 - 700 만원">600 - 700만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="700 - 800 만원">700 - 800만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="800 - 900 만원">800 - 900만원</label></li>
                                <li><label for=""><input type="checkbox" name="" value="900 만원 이상">900 만원 이상</label></li>
                                <li><label for=""><input type="checkbox" name="" value="내규">내규</label></li>
                                <li><label for=""><input type="checkbox" name="" value="협의">협의</label></li>
                            </ul>
                            <ul class="ad_school">
                                <li><label for=""><input type="checkbox" name="" value="초등학교 졸업">초등학교 졸업</label></li>
                                <li><label for=""><input type="checkbox" name="" value="중학교 졸업">중학교 졸업</label></li>
                                <li><label for=""><input type="checkbox" name="" value="고등학교 졸업">고등학교 졸업</label></li>
                                <li><label for=""><input type="checkbox" name="" value="전문 학사">전문 학사</label></li>
                                <li><label for=""><input type="checkbox" name="" value="일반 학사">일반 학사</label></li>
                                <li><label for=""><input type="checkbox" name="" value="석사, 박사">석사, 박사</label></li>
                            </ul>
                            <ul class="work_type">
                                <li><label for=""><input type="checkbox" name="" value="정규직">정규직</label></li>
                                <li><label for=""><input type="checkbox" name="" value="계약직">계약직</label></li>
                                <li><label for=""><input type="checkbox" name="" value="파견직">파견직</label></li>
                                <li><label for=""><input type="checkbox" name="" value="인턴">인턴</label></li>
                                <li><label for=""><input type="checkbox" name="" value="병역특례">병역특례</label></li>
                                <li><label for=""><input type="checkbox" name="" value="아르바이트">아르바이트</label></li>
                                <li><label for=""><input type="checkbox" name="" value="전임">전임</label></li>
                                <li><label for=""><input type="checkbox" name="" value="교육생">교육생</label></li>
                                <li><label for=""><input type="checkbox" name="" value="프리랜서">프리랜서</label></li>
                                <li><label for=""><input type="checkbox" name="" value="해외취업">해외취업</label></li>
                                <li><label for=""><input type="checkbox" name="" value="파트">파트</label></li>
                                <li><label for=""><input type="checkbox" name="" value="위촉직">위촉직</label></li>
                                <li><label for=""><input type="checkbox" name="" value="기타">기타</label></li>
                            </ul>
                            <ul class="anything">
                                <li><label for=""><input type="checkbox" name="" value="대기업">대기업</label></li>
                                <li><label for=""><input type="checkbox" name="" value="외국계">외국계</label></li>
                                <li><label for=""><input type="checkbox" name="" value="코스닥">코스닥</label></li>
                                <li><label for=""><input type="checkbox" name="" value="주식회사">주식회사</label></li>
                                <li><label for=""><input type="checkbox" name="" value="병역특례 인증 업체">병역특례 인증 업체</label></li>
                                <li><label for=""><input type="checkbox" name="" value="중견기업">중견기업</label></li>
                                <li><label for=""><input type="checkbox" name="" value="중소기업">중소기업</label></li>
                                <li><label for=""><input type="checkbox" name="" value="기타">기타</label></li>
                            </ul>
                        </div>
                        <div class="checked_box">
                            <span class="checked_search"></span>
                        </div>
                        <button type="button" class="search_btn"><svg class="search_glass"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                            </svg></button>
                </fieldset>
            </form>
            <?php include("../html_inc/vip_ad.inc"); ?>
            <?php include("../html_inc/basic_ad.inc"); ?>
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>

</html>