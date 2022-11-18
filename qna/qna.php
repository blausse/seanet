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
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/ir.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link href="../css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="../css/main_bg.css" type="text/css">
    <link rel="stylesheet" href="../css/qna.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script src="../script/gnb.js" type="text/javascript"></script>
    <script src="../script/popular_rank.js" type="text/javascript"></script>
    <script src="../script/top_menu.js" type="text/javascript"></script>
    <script></script>
</head>

<body>
    <div class="wrap">
        <?php include("../html_inc/header.inc"); ?>

        <main>
            <div class="main_bg" id="main_bg">
                <form action="" class="main_bg_cont">
                    <fieldset class="customer_center">
                        <legend>SEANET 고객센터</legend>
                        <label for="qna_search">궁금한 점은 검색으로 쉽고 빠르게 확인하세요.</label><br><input type="text"
                            name="qna_search" id="qna_search" placeholder="궁금한 점을 검색해보세요.">
                    </fieldset>
                </form>
            </div>
            <div class="ref_search">
                <h2>추천 검색어</h2>
                <ul class="ref_search_list">
                    <li><a href="#"><button>씨넷 로그인</button></a></li>
                    <li><a href="#"><button>구인광고 등록</button></a></li>
                    <li><a href="#"><button>회원가입</button></a></li>
                    <li><a href="#"><button>선식/선용품 이용</button></a></li>
                    <li><a href="#"><button>선식/선용품 업체등록</button></a></li>
                    <li><a href="#"><button>게시판 이용</button></a></li>
                </ul>
            </div>
            <div class="notice">
                <ul class="notice_list">
                    <li>
                        <a>
                        <button>공지</button>
                            <div>title</div>
                        </a>
                    </li>
                </ul>
                <p class="notice_more">공지 전체보기 ></p>
            </div><hr class="a">
            <div class="main_qna">
                <h2>자주 찾는 도움말</h2>
                <ul class="qna_list">
                    <li><a href="#"><button type='button' id="qna_list_total">전체</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                    <li><a href="#"><button type='button'>도움말 목록</button></a></li>
                </ul>
                <ul class="qna_card">
                    <li><button type="button">
                            <div>가나다라마바사아자차카타파하</div>
                            <div># abcdefghijklmnopqrstuv</div>
                        </button></li>
                    <li><button type="button">
                            <div>title</div>
                            <div>tag</div>
                        </button></li>
                    <li><button type="button">
                            <div>title</div>
                            <div>tag</div>
                        </button></li>
                    <li><button type="button">
                            <div>title</div>
                            <div>tag</div>
                        </button></li>
                    <li><button type="button">
                            <div>title</div>
                            <div>tag</div>
                        </button></li>
                    <li><button type="button">
                            <div>title</div>
                            <div>tag</div>
                        </button></li>
                    <li><button type="button">
                            <div>title</div>
                            <div>tag</div>
                        </button></li>
                    <li><button type="button">
                            <div>title</div>
                            <div>tag</div>
                        </button></li>
                </ul>
                <button class="qna_more">+ 도움말 더보기</button>
            </div>
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>
</html>