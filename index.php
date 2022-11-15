<?php
include "inc/session.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEANET</title>
    <?php include("./html_inc/css.inc"); ?>
    <link rel="stylesheet" href="css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="css/voice.css" type="text/css">
    <link rel="stylesheet" href="css/provision copy.css" type="text/css">
    <link rel="stylesheet" href="css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="css/rank.css" type="text/css">
    <link rel="stylesheet" href="css/main_bg.css" type="text/css">
    <link rel="stylesheet" href="css/community.css" type="text/css">
    <script src="script/jquery.js"></script>
    <script src="script/jquery.nice-select.js"></script>
    <script src="script/script.js" type="text/javascript"></script>
    <script src="script/community_btn.js" type="text/javascript"></script>
    <script src="script/gnb.js" type="text/javascript"></script>
    <script src="script/main_banner.js" type="text/javascript"></script>
    <script src="script/mainpage_btn.js" type="text/javascript"></script>
    <script src="script/popular_rank.js" type="text/javascript"></script>
    <script src="script/top_menu.js" type="text/javascript"></script>
    <script>
    </script>
</head>

<body>
    <div class="wrap">
        <?php include("./html_inc/header.inc"); ?>
        <main>
            <div class="main_bg">
                <div class="main_btn">
                    <button class="recruit_btn">인기 회사</button>
                    <button class="community_btn">커뮤니티</button>
                    <button class="provision_btn">선식, 선용품</button>
                </div>
            </div>
            <h2 class="hide">실시간 인기 광고</h2>
            <div class="main_banner_bg">
                <div class="" id="slideShow">
                    <ul class="slides">
                        <li class="slide">
                            <img src="images/hlngmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">현대LNG</p>
                                <p class="txt_desc">현대LNG해운 경력직 해기사 상시모집(선종 변경 가능)</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/smmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">SM Group 해운부문</p>
                                <p class="txt_desc">[SM그룹 해운부문] BULK선 해상직원 채용 !!급여인상완료!!</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/hmm_main.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">HMM</p>
                                <p class="txt_desc">해상직원(PCTC/BULK/CNTR/VLCC 선대 경력) 및 육상직원을 모집합니다.</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/skmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">SK shipping</p>
                                <p class="txt_desc">[SK해운] LNGC 프로젝트 신조감독 채용</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/hglovis.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">현대글로비스</p>
                                <p class="txt_desc">2022년 현대 글로비스 유통/해운부문 경력직 채용</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/sinokor.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">장금상선</p>
                                <p class="txt_desc">[장금상선, 흥아라인] 서울 본사 운항팀 채용</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/wil.main.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">윌헴슨쉽매니지먼트코리아(주)</p>
                                <p class="txt_desc">월급 10%인상 해상직 모집</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/kmtcmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">고려해운</p>
                                <p class="txt_desc">(주)고려해운 정규직 해상직원 채용 공고</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/panoceanmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">팬오션</p>
                                <p class="txt_desc">(팬오션) 선장, 기관장, 1항기사, 2항기사, 부원</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/hlinemain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">에이치라인</p>
                                <p class="txt_desc">에이치라인해운(주) PCTC선 공무감독 모집</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/hlngmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">현대LNG</p>
                                <p class="txt_desc">현대LNG해운 경력직 해기사 상시모집(선종 변경 가능)</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/smmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">SM Group 해운부문</p>
                                <p class="txt_desc">[SM그룹 해운부문] BULK선 해상직원 채용 !!급여인상완료!!</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/hmm_main.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">HMM</p>
                                <p class="txt_desc">해상직원(PCTC/BULK/CNTR/VLCC 선대 경력) 및 육상직원을 모집합니다.</p>
                            </div>
                        </li>
                        <li class="slide">
                            <img src="images/skmain.png" alt="" class="main1" id="main1">
                            <div class="main_txt">
                                <p class="txt_title">SK shipping</p>
                                <p class="txt_desc">[SK해운] LNGC 프로젝트 신조감독 채용</p>
                            </div>
                        </li>
                    </ul>
                    <div class="controller">
                        <svg class="prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                        <svg class="pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM224 192V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7 14.3-32 32-32s32 14.3 32 32zm128 0V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                        </svg>
                        <svg class="play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                        </svg>
                        <svg class="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </div>
                </div>
            </div>
            <section class="community">
                <form class="community_bg">
                    <h2>SEAMAN'S VOICE</h2>
                    <section class="voice_rank">
                        <section class="voice">
                            <div class="list_border">
                                <dl class="voice1">
                                    <dt><a href="#">소형선박</a></dt>
                                    <dd><a href="#">안녕하세요 소형선박 면허 따신 분들 도움 좀 부탁드립니다</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice2">
                                    <dt><a href="#">회사</a></dt>
                                    <dd><a href="#">KSS 해상 직원 처우 및 업무 강도 어떤가요?</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice3">
                                    <dt><a href="#">선상생활</a></dt>
                                    <dd><a href="#">밥도둑 선장을 방지하기 위한 방안</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice4">
                                    <dt><a href="#">기관사</a></dt>
                                    <dd><a href="#">ME엔진 오버홀할 때 MC엔진과 차이점?</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice5">
                                    <dt><a href="#">복지</a></dt>
                                    <dd><a href="#">이 정도면 육상에 비해서 다시 승선할 만 하다 싶은 조건</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice6">
                                    <dt><a href="#">면접</a></dt>
                                    <dd><a href="#">투묘 시 안전 속력 도출에 관한 질문</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice7">
                                    <dt><a href="#">연애/결혼</a></dt>
                                    <dd><a href="#">결혼준비 고민...</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice8">
                                    <dt><a href="#">학교생활</a></dt>
                                    <dd><a href="#">실습 종료 후</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice9">
                                    <dt><a href="#">실무</a></dt>
                                    <dd><a href="#">벙커링(bunkering) 관련해서 고수님들 질문 있습니다.</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                                <dl class="voice10">
                                    <dt><a href="#">항해사</a></dt>
                                    <dd><a href="#">Furuno Ecdis 차트 업데이트 관련</a></dd>
                                    <dd class="good">좋아요</dd>
                                    <dd class="reply">댓글</dd>
                                </dl>
                            </div>
                        </section>
                        <section class="voice_sub">
                            <button class="">회사</button>
                            <button class="">선상생활</button>
                            <button class="">실무</button>
                            <button class="">소형선박</button>
                            <button class="">기관사</button>
                            <button class="">항해사</button>
                            <button class="">학교생활</button>
                            <button class="">연애/결혼</button>
                            <button class="">면접</button>
                        </section>
                    </section>
                </form>
            </section>
            <section class="provision_box">
                <form class="provision_bg">
                    <fieldset class="provision_wrap">
                        <h2 class="provision_txt">PROVISION <br>&<br> SPARE/STORE</h2>
                        <div class="txt_wrap">
                            <div class="location">
                                <select name="" id="location_box">
                                    <option>지역선택</option>
                                    <option>국내</option>
                                    <option>미주서안</option>
                                    <option>미주동안</option>
                                    <option>아시아</option>
                                    <option>아프리카,중동</option>
                                    <option>유럽</option>
                                    <option>중남미</option>
                                    <option>호주,뉴질랜드</option>
                                </select>
                            </div>
                            <div class="product">
                                <select name="" id="product_box">
                                    <option>제품선택</option>
                                    <option>선식</option>
                                    <option>빌지처리</option>
                                    <option>선창클리닝</option>
                                    <option>선박부품</option>
                                    <option>선박수리</option>
                                    <option>주부식</option>
                                    <option>면세품</option>
                                    <option>선용품</option>
                                    <option>슬러지 양륙</option>
                                    <option>기부속</option>
                                    <option>청수</option>
                                    <option>쓰레기, 폐유처리</option>
                                    <option>선용금</option>
                                    <option>SPRO계약</option>
                                    <option>개인물품</option>
                                    <option>세탁물</option>
                                    <option>대리점 업무</option>
                                    <option>기타</option>
                                </select>
                            </div>
                            <input type="text" placeholder="검색어를 입력해주세요" class="search_box"><svg class="provision_glass"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                            </svg>
                            <button class="provision_search_btn">검색</button>
                        </div>
                        <ul class="bg_icon">
                            <li class="company"><a href="#" class="company_icon">
                                    <figure class="fig1"><img src="images/company.png" alt="업체조회">
                                        <figcaption class="figcap1">업체조회</figcaption>
                                    </figure>
                                </a></li>
                            <li class="check"><a href="#" class="check_icon">
                                    <figure class="fig2"><img src="images/check.png" alt="배송조회">
                                        <figcaption class="figcap2">배송조회</figcaption>
                                    </figure>
                                </a></li>
                            <li class="reg"><a href="provision_reg.html" class="reg_icon">
                                    <figure class="fig3"><img src="images/reg.png" alt="배송조회">
                                        <figcaption class="figcap3">업체등록</figcaption>
                                    </figure>
                                </a></li>
                            <li class="guide"><a href="provision_guide.html" class="guide_icon">
                                    <figure class="fig4"><img src="images/guide.png" alt="이용안내">
                                        <figcaption class="figcap4">이용안내</figcaption>
                                    </figure>
                                </a></li>
                        </ul>
                    </fieldset>
                </form>
            </section>
            <?php include("./html_inc/vip_ad.inc"); ?>
            <?php include("./html_inc/basic_ad.inc"); ?>
        </main>
        <?php include("./html_inc/footer.inc"); ?>
    </div>
</body>

</html>