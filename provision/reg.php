<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wilabelh=device-wilabelh, initial-scale=1.0">
    <title>SEANET</title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/ir.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link href="../css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/rank.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script></script>
    <style>
        
    </style>
</head>

<body>
    <div class="wrap">
    <?php include("../html_inc/header.inc"); ?>
        <main>
                <form action="insert.php" name="provision_list.form" method="post" onsubmit="">
                    <fieldset class="reg_wrap">
                        <legend>업체 등록</legend>
                        <label for="p_location">지역</label>
                        <input type="text" name="p_location">
                        <label for="p_company_name">회사명</label>
                        <input type="text" name="p_company_name">
                        <label for="p_port">서비스 항구</label>
                        <input type="text" name="p_port">
                        <div class="p_item">
                        <input type="checkbox" name="provision" value="y"><label for="provision">주부식</label>
                        <input type="checkbox" name="spare" value="y"><label for="spare">기부속</label>
                        <input type="checkbox" name="store" value="y"><label for="store">선용품</label>
                        <input type="checkbox" name="bilge" value="y"><label for="bilge">빌지처리</label>
                        <input type="checkbox" name="cleaning" value="y"><label for="cleaning">선창클리닝</label>
                        <input type="checkbox" name="repair" value="y"><label for="repair">선박수리</label>
                        <input type="checkbox" name="sludge" value="y"><label for="sludge">슬러지</label>
                        <input type="checkbox" name="agency" value="y"><label for="agency">대리점</label>
                        <input type="checkbox" name="spro" value="y"><label for="spro">SPRO 계약</label>
                        <input type="checkbox" name="garbage" value="y"><label for="garbage">쓰레기</label>
                        <input type="checkbox" name="fw" value="y"><label for="fw">청수</label>
                        <input type="checkbox" name="onboard_pay" value="y"><label for="onboard_pay">선용금</label>
                        <input type="checkbox" name="tex_free" value="y"><label for="tex_free">면세품</label>
                        <input type="checkbox" name="private" value="y"><label for="private">개인물품</label>
                        <input type="checkbox" name="laundry" value="y"><label for="laundry">세탁물</label>
                        <input type="checkbox" name="etc" value="y"><label for="etc">기타</label>
                        </div>
                        <label for="p_addr">주소</label>
                        <input type="text" name="p_addr">
                        <label for="p_ceo">대표</label>
                        <input type="text" name="p_ceo">
                        <label for="p_pic">담당자</label>
                        <input type="text" name="p_pic">
                        <label for="p_num">전화번호</label>
                        <input type="text" name="p_num">
                        <label for="p_fax">FAX</label>
                        <input type="text" name="p_fax">
                        <label for="p_email">Email</label>
                        <input type="text" name="p_email">
                        <label for="p_web">홈페이지</label>
                        <input type="text" name="p_web">
                        <label for="p_note">비고</label>
                        <textarea name="p_note"></textarea>
                    <button type="submit" class="reg_btn">등록하기</button>
                </fieldset>
                </form>
            
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>

</html>