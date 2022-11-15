<?php
include './inc/session.php';
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("./html_inc/css.inc"); ?>
    <link rel="stylesheet" href="css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="css/voice.css" type="text/css">
    <link rel="stylesheet" href="css/provision copy.css" type="text/css">
    <link rel="stylesheet" href="css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="css/rank.css" type="text/css">
    <link rel="stylesheet" href="css/main_bg.css" type="text/css">
    <link rel="stylesheet" href="css/community_b.css" type="text/css">
    <script src="script/jquery.js"></script>
    <script src="script/jquery.nice-select.js"></script>
    <script src="script/script.js" type="text/javascript"></script>
    <script src="script/community_btn.js" type="text/javascript"></script>
    <script src="script/gnb.js" type="text/javascript"></script>
    <script src="script/main_banner.js" type="text/javascript"></script>
    <script src="script/mainpage_btn.js" type="text/javascript"></script>
    <script src="script/popular_rank.js" type="text/javascript"></script>
    <script src="script/top_menu.js" type="text/javascript"></script>
    <script></script>
</head>

<body>

    <div class="wrap">
        <?php include("./html_inc/header.inc"); ?>
        <main>
        <div class="board_search_wrap">
                    <svg class="board_glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                    </svg><input type="text" placeholder="찾고싶은 회사를 검색해보세요" id="board_search">
                </div>
<div class="board_wrap" id="board_wrap">
            <div class="best_topic" id="best_topic">
                <h2 class="best_topic_title">실시간 인기</h2>
                <div class="list_border">
                    <dl>
                        <dt><a href="#">category<?php echo $category;?></a></dt>
                        <dd><a href="#">title<?php echo $title;?></a></dd>
                        <dd class="good"><span class="good_img"></span>num<?php echo $like_cnt;?></dd>
                        <dd class="reply"><span class="reply_img"></span>num<?php echo $reply_cnt;?></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">category<?php echo $category;?></a></dt>
                        <dd><a href="#">title<?php echo $title;?></a></dd>
                        <dd class="good"><span class="good_img"></span>num<?php echo $like_cnt;?></dd>
                        <dd class="reply"><span class="reply_img"></span>num<?php echo $reply_cnt;?></dd>
                    </dl>
                    <dl>
                        <dt><a href="#">category<?php echo $category;?></a></dt>
                        <dd><a href="#">title<?php echo $title;?></a></dd>
                        <dd class="good"><span class="good_img"></span>num<?php echo $like_cnt;?></dd>
                        <dd class="reply"><span class="reply_img"></span>num<?php echo $reply_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="company_topic">
                <h2 class="company_topic_title">회사</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="onboard_topic">
                <h2 class="onboard_topic_title">승선생활</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="work_topic">
                <h2 class="work_topic_title">실무</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="boat_topic">
                <h2 class="boat_topic_title">소형선박</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="eng_topic">
                <h2 class="eng_topic_title">기관사</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="off_topic">
                <h2 class="off_topic_title">항해사</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="school_topic">
                <h2 class="school_topic_title">학교생활</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="marry_topic">
                <h2 class="marry_topic_title">연애, 결혼</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            <div class="interview_topic">
                <h2 class="interview_topic_title">면접</h2>
                <div class="topic">
                    <dl>
                        <dt><a href="#">title<?php echo $title;?></a></dt>
                        <dd class="view"><span class="view_img"></span>num<?php echo $view_cnt;?></dd>
                    </dl>
                </div>
                <div class="voice_more">더보기 ></div>
            </div>
            </div>
        </main>
        <?php include("./html_inc/footer.inc"); ?>
    </div>
</body>

</html>