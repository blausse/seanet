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
    <link href="../css/ad_reg_select.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/rank.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="../css/ad_file.css" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="../script/jquery.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="../script/prov_select.js"></script>
    <script src="../script/gnb.js" type="text/javascript"></script>
<script src="../script/popular_rank.js" type="text/javascript"></script>
<script src="../script/top_menu.js" type="text/javascript"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script src="../script/file_btn.js" type="text/javascript"></script>
    <script src="/web_project/script/datepicker.js" type="text/javascript"></script>
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
$(function(){
$('.p_item').not($('.p_item').eq(0)).hide();
$('.p_item_title button').click(function(){
var title = $('.p_item_title button');
var idx = $(this).index();
var p_item = $('.p_item').eq(idx);
$(this).css({color:"##0080ff",background:"#fff"});
$(title).not($(this)).css({color:"#222",background:"#dadada"});
p_item.show();
$('.p_item').not(p_item).hide();
});
})  
    </script>
    <style>
*:focus { outline: 0; }
main{background: #f5f6f7;}
form{width: 400px;height: auto;padding:70px;margin: auto;}
.reg_wrap{display:flex;flex-direction:column;}
legend{text-align:center;font-size:18px;font-weight:bold;color:#0080ff;margin-bottom:30px;width: 100%;}
.reg_wrap>label{line-height:40px;font-size:14px;font-weight:700}
.reg_wrap input[type=text]{height: 29px;width: 100%;font-size:15px;line-height:29px;border:none;vertical-align:top;}
.p_item{width: 100%;display:flex;flex-wrap:wrap;justify-content:flex-start;overflow-y:scroll;height:260px;border:1px solid #dadada;box-sizing:border-box}
textarea{width: 100%;resize:none;height: 400px;border:none;font-family:"roboto,notosanskr";font-size:16px;}
.reg_wrap>p{line-height:40px;font-size:14px;font-weight:700;box-sizing:border-box;}
.text_box{padding:10px 10px 13px 10px;border:1px solid #dadada;width: 100%;height:52px;box-sizing:border-box;background: #fff;}
.textarea_box{padding:10px 10px 10px 9px;border:1px solid #dadada;width: 100%;height:auto;box-sizing:border-box;background: #fff;margin-bottom:30px;}
.check_box{padding:12px;border-bottom:1px solid #dadada;width: 100%;height:52px;box-sizing:border-box;background: #fff;}
.check_box:last-child{border:none;}
.check_box input[type=checkbox]{width: 20px;height: 20px;margin-right:10px;position: relative;top:4px;}
.check_box label{line-height:28px;vertical-align:center;position: relative;top:-4px;}
.email_box{padding:10px 10px 13px 10px;border:1px solid #dadada;width: 100%;;height:52px;;box-sizing:border-box;background: #fff;display:flex;justify-content:space-between;line-height:29px;margin:5px 0 10px;}
.email>.email_box>input[type=text]{height: 29px;width: 110px;font-size:15px;line-height:29px;border:none;vertical-align:top;}
.email_mark{margin:0 10px;line-height:26px;color:#a7a7a7}
.p_email_dmn{color:#a7a7a7;}
.reg_btn{border:none;background: #0080ff;color:white;font-size:24px;height: 50px;border-radius:30px;margin:30px 0 0}
.location{margin:0 10px 10px 0;display:flex;justify-content:space-between;width: 100%;}
.sub_title{color:#a7a7a7}
.filebox{width:100%;display:flex;flex-direction:row;justify-content:space-between;margin-bottom:30px;}
#email_box{display:flex;justify-content:space-between}
.p_item_title{width:100%;display:flex;flex-direction:row;justify-content:space-between;margin-bottom:10px;}
.p_item_title button{cursor:pointer;background:#dadada;border:none;padding:2px 10px;box-sizing:border-box;border-radius:20px;font-size:14px;}

    </style>
</head>
<body>
    <div class="wrap">
    <?php include("../html_inc/header.inc"); ?>
        <main>
                <form action="insert.php" name="provision_list.form" method="post" onsubmit="regCheck()">
                    <fieldset class="reg_wrap">
                        <legend>구인광고 등록</legend>
                        <p class="sub_title">기업정보 입력</p>
                        <label for="p_company_name">회사명</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_company_name"></span>
                        <label for="p_port">홈페이지</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_port"></span>
                        <label for="p_port">전화번호</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_port"></span>
                        <label for="p_port">팩스</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_port"></span>
                        <label for="p_port">담당자</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_port"></span>
                        <label for="p_port">담당자 이메일</label><span class="err_text"></span>
                        <span class="text_box" id="email_box"><input type="text" name="p_port"><span class="email_mark">@</span></span>
                        <span class="email_box"><input type="text" name="p_email_dmn" class="p_email_dmn"><select name="p_email_sel" id="p_email_sel" onchange="emailChange()">
                        <option value="">직접 입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="hanmail.net">다음</option>
                            <option value="gmail.com">구글</option>
                            <option value="nate.com">네이트</option>
                            <option value="twitter.com">트위터</option>
                            <option value="facebook.com">페이스북</option>
                        </select></span>
                        <label for="p_port">주소</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_port"></span>
                        <label for="p_port">사업내용</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_port"></span>
                        <label for="c_logo_name" class="c_logo">회사로고</label>
                        <div class="filebox">
                            <input name="c_logo_name" class="upload-name" value="이미지 크기 : 120 * 80 pixels"
                                placeholder="이미지 크기 : 120 * 80 pixels">
                            <label class="file_search" for="file">파일찾기</label>
                            <input type="file" id="file" name="file">
                        </div>
                        <p class="sub_title">구인정보 입력</p>
                        <p class="p_item_title"><button type="button">직무</button><button type="button">지역</button><button type="button">급여</button><button type="button">학력</button><button type="button">근무형태</button><button type="button">기업형태</button></p>
                        <span class="err_text"></span>
                        <div class="p_item">
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="해기사">해기사</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="조선, 수리">조선, 수리</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="용선, 중개">용선, 중개</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="원양, 수산">원양, 수산</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="공무감독">공무감독</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="해양레저관광">해양레저관광</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="항해, 통신">항해, 통신</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="해양연구">해양연구</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="해운, 항만">해운, 항만</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="공공">공공</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="운항,관리">운항, 관리</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="해양행정기관">해양행정기관</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="IT개발, 데이터">IT개발, 데이터</label></span>
                        </div>
                        <div class="p_item">
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="서울">서울</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="인천">인천</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="대전">대전</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="대구">대구</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="부산">부산</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="광주">광주</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="울산">울산</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="세종">세종</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="강원">강원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="충북">충북</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="충남">충남</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="전북">전북</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="전남">전남</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="경북">경북</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="경남">경남</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="국내전역">국내전역</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="해외전역">해외전역</label></span>
                        </div>
                        <div class="p_item">
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="220 만원 이하">220 만원 이하</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="220 - 250 만원">220 - 250만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="250 - 300 만원">250 - 300만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="300 - 350 만원">300 - 350만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="350 - 400 만원">350 - 400만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="400 - 500 만원">400 - 500만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="500 - 600 만원">500 - 600만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="600 - 700 만원">600 - 700만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="700 - 800 만원">700 - 800만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="800 - 900 만원">800 - 900만원</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="900 만원 이상">900 만원 이상</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="내규">내규</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="협의">협의</label></span>
                        </div>
                        <div class="p_item">
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="초등학교 졸업">초등학교 졸업</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="중학교 졸업">중학교 졸업</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="고등학교 졸업">고등학교 졸업</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="전문 학사">전문 학사</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="일반 학사">일반 학사</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="석사, 박사">석사, 박사</label></span>
                        </div>
                        <div class="p_item">
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="정규직">정규직</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="계약직">계약직</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="파견직">파견직</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="인턴">인턴</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="병역특례">병역특례</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="아르바이트">아르바이트</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="전임">전임</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="교육생">교육생</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="프리랜서">프리랜서</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="해외취업">해외취업</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="파트">파트</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="위촉직">위촉직</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="기타">기타</label></span>
                        </div>
                        <div class="p_item">
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="대기업">대기업</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="외국계">외국계</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="코스닥">코스닥</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="주식회사">주식회사</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="병역특례 인증 업체">병역특례 인증 업체</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="중견기업">중견기업</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="중소기업">중소기업</label></span>
                        <span class="check_box"><label for=""><input type="checkbox" name="" value="기타">기타</label></span>
                        </div>
                        <label for="p_addr">경력</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_addr"></span>
                        <label for="p_ceo">근무일시</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_ceo"></span>
                        <label for="p_pic">필수사항</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_pic"></span>
                        <label for="p_num">우대사항</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="p_num"></span>
                        <label for="p_fax">성별</label>
                        <span class="text_box"><input type="text" name="p_fax"></span>
                        <label for="p_web">광고 제목</label>
                        <span class="text_box"><input type="text" name="p_web"></span>
                        <label for="p_note">모집 부문 및 상세 정보</label>
                        <span class="textarea_box"><textarea name="p_note"></textarea></span>
                        <p class="sub_title">접수 기간</p>
                            <label for="ad_start_date">시작일: </label><span class="text_box"> <input type="text"
                                    value="클릭해주세요" id="datepicker1" name="ad_start_date"></span></p>
                            <label for="ad_end_date">마감일: </label><span class="text_box"><input type="text" value="클릭해주세요"
                                    id="datepicker2" name="ad_end_date"></span>
                    <button type="submit" class="reg_btn">등록하기</button>
                </fieldset>
                </form>
            
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>

</html>