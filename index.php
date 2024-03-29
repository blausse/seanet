<?php
// error_reporting(E_ALL);

// ini_set('display_errors', '1');
include "inc/session.php";
include "inc/dbcon.php";
$sql = "select * from ad_company join ad_info on ad_company.idx = ad_info.idx and ad_company.vip=1 order by ad_company.idx desc;";
$sqli = "select * from ad_company join ad_info on ad_company.idx = ad_info.idx order by ad_company.idx desc;";
$sqlc = "select * from ad_company join ad_info on ad_company.idx = ad_info.idx order by ad_info.cnt desc limit 10;";
// $sqlp = "select c_name from ad_company join ad_info on ad_company.idx = ad_info.idx order by ad_info.cnt desc limit 10;";
$result = mysqli_query($dbcon,$sql);
$iresult = mysqli_query($dbcon,$sqli);
$cresult = mysqli_query($dbcon,$sqlc);
// $presult = mysqli_query($dbcon,$sqlp);
$list_num = 20;
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
    <link rel="stylesheet" href="css/prov_box.css" type="text/css">
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
    <script>
            function locationChange(){
                 $cate = $('.location_box option:selected').val();
                if ($cate == "korea") {
                  $('.list').eq(1).html(
                    "<li class='option selected focus'>세부 지역</li><li class='option'>서해</li><li class='option'>동해</li><li class='option'>남해</li><li class='option'>국내 전역</li><li class='option'>기타</li>"
                  );
                } else if ($cate == "asia") {
                  $('.list').eq(1).html(
                    "<li class='option selected focus'>세부 지역</li><li class='option'>중국</li><li class='option'>인도</li><li class='option'>일본</li><li class='option'>러시아</li><li class='option'>싱가폴</li><li class='option'>필리핀</li><li class='option'>인도네시아</li><li class='option'>중동</li><li class='option'>아시아 전역</li><li class='option'>기타</li>"
                  );
                } else if ($cate == "america") {
                  $('.list').eq(1).html(
                    "<li class='option selected focus'>세부 지역</li><li class='option'>북미 서안</li><li class='option'>북미 동안</li><li class='option'>북미 전역</li><li class='option'>파나마-발보아</li><li class='option'>파나마-크리스토발</li><li class='option'>중남미 전역</li><li class='option'>남미 서안</li><li class='option'>남미 동안</li><li class='option'>남미 전역</li><li class='option'>기타</li>"
                  );
                } else if ($cate == "europe") {
                  $('.list').eq(1).html(
                    "<li class='option selected focus'>세부 지역</li><li class='option'>서유럽</li><li class='option'>동유럽</li><li class='option'>북유럽</li><li class='option'>지중해</li><li class='option'>유럽 전역</li><li class='option'>기타</li>"
                  );
                } else if ($cate == "africa") {
                  $('.list').eq(1).html(
                    "<li class='option selected focus'>세부 지역</li><li class='option'>아프리카 서안</li><li class='option'>아프리카 동안</li><li class='option'>남아프리카공화국</li><li class='option'>아프리카 전역</li><li class='option'>기타</li>"
                  );
                } else if ($cate == "oseania") {
                  $('.list').eq(1).html(
                    "<li class='option selected focus'>세부 지역</li><li class='option'>호주</li><li class='option'>뉴질랜드</li><li class='option'>오세아니아 전역</li><li class='option'>기타</li>"
                  );
                } else if (!$cate) {
                  $('.list').eq(1).html(
                    "<li class='option selected focus'>세부 지역</li>"
                  );
                }

                $current = $('.current').eq(1);
                $current.text('세부 지역');
            };
$(function(){
    var slide = $('.slide');
    var firstCopy = slide[0].cloneNode(true);
    var secondCopy = slide[1].cloneNode(true);
    var lastCopy = slide[9].cloneNode(true);
    var beforeLast= slide[8].cloneNode(true);
    slide[9].after(secondCopy);
    slide[9].after(firstCopy);
    slide[0].before(beforeLast); 
    slide[0].before(lastCopy); 
});
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
                        <?php while($carray = mysqli_fetch_array($cresult)){?>
                            <a href="/web_project/ad/list.php?n_idx=<?php echo $carray['idx'];?>">
                                <li class="slide">
                                    <img src="./data/<?php echo $carray['c_main_logo'];?>" alt="" class="main1" id="main1">
                                    <div class="main_txt">
                                        <p class="txt_title"><?php echo $carray['c_name'];?></p>
                                        <p class="txt_desc"><?php echo $carray['ai_title'];?></p>
                                    </div>
                                </li>
                            </a>
                        <?php }?>
                    </ul>
                    <div class="controller">
                        <svg class="prev" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                                d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                        <svg class="pause" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM224 192V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7 14.3-32 32-32s32 14.3 32 32zm128 0V320c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                        </svg>
                        <svg class="play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                        </svg>
                        <svg class="next" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
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
            <?php include("./html_inc/provision_box.inc");?>
            <h2 class="vip_title">VIP 구인광고</h2>
            <div class="box_vip">
<div class="vip_ad">
<?php while($array = mysqli_fetch_array($result)){?>
        <?php
            $nDate = date("Y-m-d");
            $valDate = $array['ai_endDate'];
            $leftDate = intval((strtotime($nDate)-strtotime($valDate)) / 86400) + 1; 
            // $i = $i + 1;
            // $page = ceil($i / $list_num);
        ?>
        <a href="/web_project/ad/list.php?n_idx=<?php echo $array['idx'];?>">
            <div class="vip_adbox">
                <img class="vip_img" src="./data/<?php echo $array['c_vip_logo'];?>" alt="">
                    <dl class="ad_txt">
                        <dt><?php echo $array['c_name'];?></dt>
                        <dd class="ad1_desc"><?php echo $array['ai_title'];?></dd>
                        <dd class="day1">D<?php echo $leftDate;?></dd>
                    </dl>
            </div>
        </a>
        <!-- <input type="hidden" value="<?php echo $i;?>"> -->
        <?php };?>
</div>
<p class="vip_more">펼치기></p>
</div>
            <section class="basic_ad">
                <h2>일반 구인광고</h2>
                <div class="ad">
                    <?php while($iarray = mysqli_fetch_array($iresult)){?>
                        <?php
                        $nDate = date("Y-m-d");
                        $valDate = $iarray['ai_endDate'];
                        $leftDate = intval((strtotime($nDate)-strtotime($valDate)) / 86400) + 1;
                        $a = $a + 1;
                        $page = ceil($a / $list_num);
                    ?>
                    <a href="/web_project/ad/list.php?page=<?php echo $page;?>&n_idx=<?php echo $iarray['idx'];?>#bl<?php echo $iarray['idx'];?>">
                        <div class="ad<?php echo $iarray['idx'];?>" id="ad_box">
                            <img class="ad_img" src="./data/<?php echo $iarray['c_logo_name'];?>" alt="">
                            <div class="ad<?php echo $iarray['idx'];?>_bg" id="ad_text">
                                <span><?php echo $iarray['c_name'];?></span>
                                <span class="dd"><?php echo $iarray['ai_title'];?></span>
                                <span class="day">D<?php echo $leftDate;?></span>
                            </div>
                        </div>
                    </a>
                    <input type="hidden" value="<?php echo $a;?>">
                    <?php };?>
                </div>
                <p class="ad_more">펼치기></p>
            </section>
        </main>
        <?php include("./html_inc/footer.inc"); ?>
    </div>
</body>
</html>