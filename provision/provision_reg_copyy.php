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
    <link rel="stylesheet" href="../css/provision_reg.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script></script>
</head>

<body>
    <div class="wrap">
    <?php include("../html_inc/header.inc"); ?>
        <main>
        <?php include("../html_inc/provision_box.inc"); ?>
            <section class="provision_reg">
                <h2>업체등록</h2>
                <div class="reg_wrap">
                    <dl>
                        <dt>지역</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>회사명</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>서비스 항구</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>서비스 ITEM</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>사업자 등록 번호</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>주소</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>대표</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>담당자</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>전화번호</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>FAX</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>Email</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>홈페이지</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <dl>
                        <dt>비고</dt>
                        <dd><input type="text"></dd>
                    </dl>
                    <button type="button" class="reg_btn">등록하기</button>
                </div>
            </section>
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>

</html>