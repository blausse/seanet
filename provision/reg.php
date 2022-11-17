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
    <link href="../css/prov_reg_select.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/rank.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/prov_select.js"></script>
    <script src="../script/gnb.js" type="text/javascript"></script>
<script src="../script/popular_rank.js" type="text/javascript"></script>
<script src="../script/top_menu.js" type="text/javascript"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script>
        function regCheck(){

        };
        function emailChange(){
var domain = $('#p_email_sel option:selected').val();
$(".p_email_dmn").val(domain);

if(!domain){
    $(".p_email_dmn").css({color:"#222"})
}else{
    $(".p_email_dmn").css({color:"#a7a7a7"})
};
        };
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
    </script>
    <style>
*:focus { outline: 0; }
main{background: #f5f6f7;}
form{width: 400px;height: auto;padding:70px;margin: auto;}
.reg_wrap{display:flex;flex-direction:column;}
legend{text-align:center;font-size:18px;font-weight:bold;color:#0080ff;margin-bottom:30px;width: 100%;}
.reg_wrap>label{line-height:40px;font-size:14px;font-weight:700}
.reg_wrap input[type=text]{height: 29px;width: 100%;font-size:15px;line-height:29px;border:none;vertical-align:top;}
.p_item{width: 100%;display:flex;flex-wrap:wrap;justify-content:flex-start;overflow-y:scroll;height:260px;border:1px solid #dadada;box-sizing:border-box;}
textarea{width: 100%;resize:none;height: 400px;border:none;font-family:"roboto,notosanskr";font-size:16px;}
.reg_wrap>p{line-height:40px;font-size:14px;font-weight:700;box-sizing:border-box;}
.text_box{padding:10px 10px 13px 10px;border:1px solid #dadada;width: 100%;height:52px;box-sizing:border-box;background: #fff;}
.textarea_box{padding:10px 10px 10px 9px;border:1px solid #dadada;width: 100%;height:auto;box-sizing:border-box;background: #fff;margin-bottom:30px;}
.check_box{padding:12px;border-bottom:1px solid #dadada;width: 100%;height:52px;box-sizing:border-box;background: #fff;}
.check_box:last-child{border:none;}
.check_box input[type=checkbox]{width: 20px;height: 20px;margin-right:10px;}
.check_box label{line-height:28px;vertical-align:center;position: relative;top:-4px;}
.email_box{padding:10px 10px 13px 10px;border:1px solid #dadada;width: 100%;;height:52px;;box-sizing:border-box;background: #fff;display:flex;justify-content:space-between;line-height:29px;color:#a7a7a7;margin-bottom:10px;}
.email>.email_box>input[type=text]{height: 29px;width: 110px;font-size:15px;line-height:29px;border:none;vertical-align:top;}
.email_mark{margin:0 10px;line-height:26px;}
.p_email_dmn{color:#a7a7a7}
button{border:none;background: #0080ff;color:white;font-size:24px;height: 50px;border-radius:30px;}
.location{margin:0 10px 10px 0;display:flex;justify-content:space-between;width: 100%;}
    </style>
</head>
<body>
    <div class="wrap">
    <?php include("../html_inc/header.inc"); ?>
        <main>
                <form action="insert.php" name="provision_list.form" method="post" onsubmit="regCheck()">
                    <fieldset class="reg_wrap">
                        <legend>업체 등록</legend>
                        <!-- <label for="p_location">지역</label><span class="err_text"></span> -->
                        <p>지역</p><span class="err_text"></span>
                        <div class="location">
                                <select name="location" class="location_box" onchange="locationChange()">
                                    <option value="">지역 선택</option>
                                    <option value="korea">국내</option>
                                    <option value="asia">아시아</option>
                                    <option value="america">아메리카</option>
                                    <option value="europe">유럽</option>
                                    <option value="africa">아프리카</option>
                                    <option value="oseania">오세아니아</option>
                                </select>
                                <select name="location_detail" class="location_detail">
                                    <option value="">세부 지역</option>
                                </select>
                                <input type="hidden" value="" class="final_location_box" name="final_location">
                                <input type="hidden" value="" class="final_location_detail" name="final_location_detail">
                            </div>
                        <label for="p_company_name">회사명</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_company_name"></span>
                        <label for="p_port">서비스 항구</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_port"></span>
                        <p>서비스 아이템</p><span class="err_text"></span>
                        <div class="p_item">
                        <span class="check_box"><input type="checkbox" name="provision" value="y"><label for="provision">주부식</label></span>
                        <span class="check_box"><input type="checkbox" name="spare" value="y"><label for="spare">기부속</label></span>
                        <span class="check_box"><input type="checkbox" name="store" value="y"><label for="store">선용품</label></span>
                        <span class="check_box"><input type="checkbox" name="bilge" value="y"><label for="bilge">빌지처리</label></span>
                        <span class="check_box"><input type="checkbox" name="cleaning" value="y"><label for="cleaning">선창클리닝</label></span>
                        <span class="check_box"><input type="checkbox" name="repair" value="y"><label for="repair">선박수리</label></span>
                        <span class="check_box"><input type="checkbox" name="sludge" value="y"><label for="sludge">슬러지</label></span>
                        <span class="check_box"><input type="checkbox" name="agency" value="y"><label for="agency">대리점</label></span>
                        <span class="check_box"><input type="checkbox" name="spro" value="y"><label for="spro">SPRO 계약</label></span>
                        <span class="check_box"><input type="checkbox" name="garbage" value="y"><label for="garbage">쓰레기</label></span>
                        <span class="check_box"><input type="checkbox" name="fw" value="y"><label for="fw">청수</label></span>
                        <span class="check_box"><input type="checkbox" name="onboard_pay" value="y"><label for="onboard_pay">선용금</label></span>
                        <span class="check_box"><input type="checkbox" name="tex_free" value="y"><label for="tex_free">면세품</label></span>
                        <span class="check_box"><input type="checkbox" name="private" value="y"><label for="private">개인물품</label></span>
                        <span class="check_box"><input type="checkbox" name="laundry" value="y"><label for="laundry">세탁물</label></span>
                        <span class="check_box"><input type="checkbox" name="etc" value="y"><label for="etc">기타</label></span>
                        </div>
                        <label for="p_addr">주소</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_addr"></span>
                        <label for="p_ceo">대표</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_ceo"></span>
                        <label for="p_pic">담당자</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_pic"></span>
                        <label for="p_num">전화번호</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_num"></span>
                        <label for="p_fax">FAX</label>
                        <span class="text_box"><input type="text" name="p_fax"></span>
                        <label for="p_email_id">E-mail</label><span class="err_text"></span>
                        <span class="email_box"><input type="text" name="p_email_id" class="p_email_id"><label for="p_email_dmn" class="email_mark">@</label><input type="text" name="p_email_dmn" class="p_email_dmn"></span>
                        <select name="p_email_sel" id="p_email_sel" onchange="emailChange()">
                            <option value="">직접 입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="hanmail.net">다음</option>
                            <option value="gmail.com">구글</option>
                            <option value="nate.com">네이트</option>
                            <option value="twitter.com">트위터</option>
                            <option value="facebook.com">페이스북</option>
                        </select>
                        <!-- <span class="email_box"><input type="text" name="p_email_dmn" class="p_email_sel"></span> -->
                        <label for="p_web">홈페이지</label>
                        <span class="text_box"><input type="text" name="p_web"></span>
                        <label for="p_note">비고</label>
                        <span class="textarea_box"><textarea name="p_note"></textarea></span>
                    <button type="submit" class="reg_btn">등록하기</button>
                </fieldset>
                </form>
            
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>

</html>