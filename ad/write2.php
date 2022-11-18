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
    <link rel="stylesheet" href="/web_project/css/gnb.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/header_search.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/ad_reg.css" type="text/css">
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
    <script src="/web_project/script/file_btn.js" type="text/javascript"></script>
    <script>
    </script>
</head>

<body>
    <div class="wrap">
<?php include "../html_inc/header.inc";?>
        <main>
            <form action="insert.php" name="reg.form" method="post" enctype="multipart/form-data" id="ad_reg">
                <fieldset>
                    <legend class="ad_reg_title">구인광고등록</legend>
                    <div class="company_info">
                        <h3>기업정보입력</h3>
                        <div class="company_info_box1">
                            <p><label for="c_name">회사명</label><input type="text" name="c_name" id="c_name"></p>
                            <p><label for="c_web">홈페이지</label><input type="text" name="c_web" id="c_dmn"></p>
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
                        <label for="c_logo_name" class="c_logo">회사로고</label>
                        <div class="filebox">
                            <input name="c_logo_name" class="upload-name" value="이미지 크기 : 120 * 80 pixels"
                                placeholder="이미지 크기 : 120 * 80 pixels">
                            <label class="file_search" for="file">파일찾기</label>
                            <input type="file" id="file" name="file">
                        </div>
                    </div>
                    <div class="ad_info">
                        <h3>구인정보입력</h3>
                        <!-- <div class="ad_info_sel"></div> -->
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
        <?php include "../html_inc/footer.inc";?>
    </div>
</body>

</html>