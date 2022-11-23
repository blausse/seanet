<?php
include '../inc/session.php';
include '../inc/dbcon.php';
$n_idx = $_GET['n_idx'];
// include '../inc/login_check.php';
$sql = "select * from ad_company join ad_info on ad_company.idx = ad_info.idx where ad_company.idx = $n_idx;";
$result = mysqli_query($dbcon,$sql);
$array = mysqli_fetch_array($result);
mysqli_close($dbcon);
?>

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
if(!$('#file').val()){
alert("이미지를 첨부해주세요.");
return false;
};
        };
        function emailChange(){
var domain = $('#c_email_sel option:selected').val();
$(".c_email_dmn").val(domain);

if(!domain){
    $(".c_email_dmn").css({color:"#222"})
}else{
    $(".c_email_dmn").css({color:"#a7a7a7"})
};
        };
$(function(){
$('.ai_item').not($('.ai_item').eq(0)).hide();
$('.ai_item_title button').click(function(){
var title = $('.ai_item_title button');
var idx = $(this).index();
var ai_item = $('.ai_item').eq(idx);
$(this).css({color:"##0080ff",background:"#fff"});
$(title).not($(this)).css({color:"#222",background:"#dadada"});
ai_item.show();
$('.ai_item').not(ai_item).hide();
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
.ai_item{width: 100%;display:flex;flex-wrap:wrap;justify-content:flex-start;overflow-y:scroll;height:260px;border:1px solid #dadada;box-sizing:border-box}
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
.c_email_dmn{color:#a7a7a7;}
.reg_btn{border:none;background: #0080ff;color:white;font-size:24px;height: 50px;border-radius:30px;margin:30px 0 0}
.location{margin:0 10px 10px 0;display:flex;justify-content:space-between;width: 100%;}
.sub_title{color:#a7a7a7}
.filebox{width:100%;display:flex;flex-direction:row;justify-content:space-between;margin-bottom:30px;}
#email_box{display:flex;justify-content:space-between}
.ai_item_title{width:100%;display:flex;flex-direction:row;justify-content:space-between;margin-bottom:10px;}
.ai_item_title button{cursor:pointer;background:#dadada;border:none;padding:2px 10px;box-sizing:border-box;border-radius:20px;font-size:14px;}
    </style>
</head>
<body>
    <div class="wrap">
    <?php include("../html_inc/header.inc"); ?>
        <main>
                <form action="edit.php?n_idx=<?php echo $n_idx;?>" name="ad_edit.form" method="post" enctype="multipart/form-data" onsubmit="return regCheck()">
                    <fieldset class="reg_wrap">
                        <legend>구인광고 등록</legend>
                        <p class="sub_title">기업정보 입력</p>
                        <label for="c_name">회사명</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="c_name" id="c_name" value="<?php echo $array['c_name'];?>"></span>
                        <label for="c_web">홈페이지</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="c_web" id="c_web" value="<?php echo $array['c_web'];?>"></span>
                        <label for="c_num">전화번호</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="c_num" id="c_num" value="<?php echo $array['c_num'];?>"></span>
                        <label for="c_fax">팩스</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="c_fax" id="c_fax" value="<?php echo $array['c_fax'];?>"></span>
                        <label for="c_pic">담당자</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="c_pic" id="c_pic" value="<?php echo $array['c_pic'];?>"></span>
                        <label for="c_email_id">담당자 이메일</label><span class="err_text"></span>
                        <?php $email = explode('@',$array['c_email']);?>
                        <span class="text_box" id="email_box"><input type="text" name="c_email_id" id="c_email_id" value="<?php echo $email[0];?>"><span class="email_mark">@</span></span>
                        <span class="email_box"><input type="text" name="c_email_dmn" class="c_email_dmn" id="c_email_dmn" value="<?php echo $email[1];?>"><select name="c_email_sel" id="c_email_sel" onchange="emailChange()">
                        <option value="">직접 입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="hanmail.net">다음</option>
                            <option value="gmail.com">구글</option>
                            <option value="nate.com">네이트</option>
                            <option value="twitter.com">트위터</option>
                            <option value="facebook.com">페이스북</option>
                        </select></span>
                        <label for="c_addr">주소</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="c_addr" id="c_addr" value="<?php echo $array['c_addr'];?>"></span>
                        <label for="c_info">사업내용</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="c_info" id="c_info" value="<?php echo $array['c_info'];?>"></span>
                        <label for="c_logo_name" class="c_logo">회사로고</label>
                        <label for="vipcheck">VIP 여부</label>
                        <span class="text_box"><input type="radio" name="vip" id="yes" value="1">예<input type="radio" name="vip" id="no" value="0">아니오</span>
                        <div class="filebox">
                            <input name="c_logo_name" class="upload-name" value="이미지 크기 : 120 * 80 pixels"
                                placeholder="이미지 크기 : 120 * 80 pixels">
                            <label class="file_search" for="file">파일찾기</label>
                            <input type="file" id="file" name="file">
                        </div>
                        <label for="c_logo_name" class="c_logo">VIP 로고</label>
                        <div class="filebox">
                            <input name="c_vip_logo" class="upload-name" value="이미지 크기 : 233 * 175 pixels"
                                placeholder="이미지 크기 : 233 * 175 pixels">
                            <label class="file_search" for="vip_file">파일찾기</label>
                            <input type="file" id="vip_file" name="vip_file">
                        </div>
                        <label for="c_main_logo" class="c_logo">메인 배너 로고</label>
                        <div class="filebox" id="filebox">
                            <input name="c_main_logo" class="upload-name" value="이미지 크기 : 1200 * 440 pixels"
                                placeholder="이미지 크기 : 1200 * 440 pixels">
                            <label class="file_search" for="main_file">파일찾기</label>
                            <input type="file" id="main_file" name="main_file">
                        </div>
                        <p class="sub_title">구인정보 입력</p>
                        <p class="ai_item_title"><button type="button">직무</button><button type="button">지역</button><button type="button">급여</button><button type="button">학력</button><button type="button">근무형태</button><button type="button">기업형태</button></p>
                        <span class="err_text"></span>
                        <?php $work = $array['ai_work'];?>
                        <div class="ai_item">
                        <span class="check_box"><label for="ai_work1"><input type="checkbox" name="ai_work[]" id="ai_work1" value="해기사" <?php if(strpos($work,"해기사") !== false){echo "checked";}?>>해기사</label></span>
                        <span class="check_box"><label for="ai_work2"><input type="checkbox" name="ai_work[]" id="ai_work2" value="조선,수리" <?php if(strpos($work,"조선") !== false){echo "checked";}?>>조선, 수리</label></span>
                        <span class="check_box"><label for="ai_work3"><input type="checkbox" name="ai_work[]" id="ai_work3" value="용선,중개" <?php if(strpos($work,"용선") !== false){echo "checked";}?>>용선, 중개</label></span>
                        <span class="check_box"><label for="ai_work4"><input type="checkbox" name="ai_work[]" id="ai_work4" value="원양,수산" <?php if(strpos($work,"원양") !== false){echo "checked";}?>>원양, 수산</label></span>
                        <span class="check_box"><label for="ai_work5"><input type="checkbox" name="ai_work[]" id="ai_work5" value="공무감독" <?php if(strpos($work,"공무감독") !== false){echo "checked";}?>>공무감독</label></span>
                        <span class="check_box"><label for="ai_work6"><input type="checkbox" name="ai_work[]" id="ai_work6" value="해양레저관광" <?php if(strpos($work,"해양레저관광") !== false){echo "checked";}?>>해양레저관광</label></span>
                        <span class="check_box"><label for="ai_work7"><input type="checkbox" name="ai_work[]" id="ai_work7" value="항해,통신" <?php if(strpos($work,"항해") !== false){echo "checked";}?>>항해, 통신</label></span>
                        <span class="check_box"><label for="ai_work8"><input type="checkbox" name="ai_work[]" id="ai_work8" value="해양연구" <?php if(strpos($work,"해양연구") !== false){echo "checked";}?>>해양연구</label></span>
                        <span class="check_box"><label for="ai_work9"><input type="checkbox" name="ai_work[]" id="ai_work9" value="해운,항만" <?php if(strpos($work,"해운") !== false){echo "checked";}?>>해운, 항만</label></span>
                        <span class="check_box"><label for="ai_work10"><input type="checkbox" name="ai_work[]" id="ai_work10" value="공공" <?php if(strpos($work,"공공") !== false){echo "checked";}?>>공공</label></span>
                        <span class="check_box"><label for="ai_work11"><input type="checkbox" name="ai_work[]" id="ai_work11" value="운항,관리" <?php if(strpos($work,"운항") !== false){echo "checked";}?>>운항, 관리</label></span>
                        <span class="check_box"><label for="ai_work12"><input type="checkbox" name="ai_work[]" id="ai_work12" value="해양행정기관" <?php if(strpos($work,"해양행정기관") !== false){echo "checked";}?>>해양행정기관</label></span>
                        <span class="check_box"><label for="ai_work13"><input type="checkbox" name="ai_work[]" id="ai_work13" value="IT개발,데이터" <?php if(strpos($work,"IT개발") !== false){echo "checked";}?>>IT개발, 데이터</label></span>
                        <span class="check_box"><label for="ai_work14"><input type="checkbox" name="ai_work[]" id="ai_work14" value="기타" <?php if(strpos($work,"기타") !== false){echo "checked";}?>>기타</label></span>
                        </div>
                        <?php $location = $array['ai_location'];?>
                        
                        <div class="ai_item">
                        <span class="check_box"><label for="ai_location1"><input type="checkbox" name="ai_location[]" id="ai_location1" value="서울" <?php if(strpos($location,"서울") !== false){echo "checked";}?>>서울</label></span>
                        <span class="check_box"><label for="ai_location2"><input type="checkbox" name="ai_location[]" id="ai_location2" value="인천" <?php if(strpos($location,"인천") !== false){echo "checked";}?>>인천</label></span>
                        <span class="check_box"><label for="ai_location3"><input type="checkbox" name="ai_location[]" id="ai_location3" value="대전" <?php if(strpos($location,"대전") !== false){echo "checked";}?>>대전</label></span>
                        <span class="check_box"><label for="ai_location4"><input type="checkbox" name="ai_location[]" id="ai_location4" value="대구" <?php if(strpos($location,"대구") !== false){echo "checked";}?>>대구</label></span>
                        <span class="check_box"><label for="ai_location5"><input type="checkbox" name="ai_location[]" id="ai_location5" value="부산" <?php if(strpos($location,"부산") !== false){echo "checked";}?>>부산</label></span>
                        <span class="check_box"><label for="ai_location6"><input type="checkbox" name="ai_location[]" id="ai_location6" value="광주" <?php if(strpos($location,"광주") !== false){echo "checked";}?>>광주</label></span>
                        <span class="check_box"><label for="ai_location7"><input type="checkbox" name="ai_location[]" id="ai_location7" value="울산" <?php if(strpos($location,"울산") !== false){echo "checked";}?>>울산</label></span>
                        <span class="check_box"><label for="ai_location8"><input type="checkbox" name="ai_location[]" id="ai_location8" value="세종" <?php if(strpos($location,"세종") !== false){echo "checked";}?>>세종</label></span>
                        <span class="check_box"><label for="ai_location9"><input type="checkbox" name="ai_location[]" id="ai_location9" value="강원" <?php if(strpos($location,"강원") !== false){echo "checked";}?>>강원</label></span>
                        <span class="check_box"><label for="ai_location10"><input type="checkbox" name="ai_location[]" id="ai_locatio10" value="충북" <?php if(strpos($location,"충북") !== false){echo "checked";}?>>충북</label></span>
                        <span class="check_box"><label for="ai_location11"><input type="checkbox" name="ai_location[]" id="ai_location11" value="충남" <?php if(strpos($location,"충남") !== false){echo "checked";}?>>충남</label></span>
                        <span class="check_box"><label for="ai_location12"><input type="checkbox" name="ai_location[]" id="ai_location12" value="전북" <?php if(strpos($location,"전북") !== false){echo "checked";}?>>전북</label></span>
                        <span class="check_box"><label for="ai_location13"><input type="checkbox" name="ai_location[]" id="ai_location13" value="전남" <?php if(strpos($location,"전남") !== false){echo "checked";}?>>전남</label></span>
                        <span class="check_box"><label for="ai_location14"><input type="checkbox" name="ai_location[]" id="ai_location14" value="경북" <?php if(strpos($location,"경북") !== false){echo "checked";}?>>경북</label></span>
                        <span class="check_box"><label for="ai_location15"><input type="checkbox" name="ai_location[]" id="ai_location15" value="경남" <?php if(strpos($location,"경남") !== false){echo "checked";}?>>경남</label></span>
                        <span class="check_box"><label for="ai_location16"><input type="checkbox" name="ai_location[]" id="ai_location16" value="국내전역" <?php if(strpos($location,"국내전역") !== false){echo "checked";}?>>국내전역</label></span>
                        <span class="check_box"><label for="ai_location17"><input type="checkbox" name="ai_location[]" id="ai_location17" value="해외전역" <?php if(strpos($location,"해외전역") !== false){echo "checked";}?>>해외전역</label></span>
                        </div>
                        <?php $salary = $array['ai_salary'];?>
                        <div class="ai_item">
                        <span class="check_box"><label for="ai_salary1"><input type="checkbox" name="ai_salary[]" id="ai_salary1" value="220만원 이하" <?php if(strpos($salary,"220만원 이하") !== false){echo "checked";}?>>220 만원 이하</label></span>
                        <span class="check_box"><label for="ai_salary2"><input type="checkbox" name="ai_salary[]" id="ai_salary2" value="220-250만원" <?php if(strpos($salary,"220-250만원") !== false){echo "checked";}?>>220 - 250만원</label></span>
                        <span class="check_box"><label for="ai_salary3"><input type="checkbox" name="ai_salary[]" id="ai_salary3" value="250-300만원" <?php if(strpos($salary,"250-300만원") !== false){echo "checked";}?>>250 - 300만원</label></span>
                        <span class="check_box"><label for="ai_salary4"><input type="checkbox" name="ai_salary[]" id="ai_salary4" value="300-350만원" <?php if(strpos($salary,"300-350만원") !== false){echo "checked";}?>>300 - 350만원</label></span>
                        <span class="check_box"><label for="ai_salary5"><input type="checkbox" name="ai_salary[]" id="ai_salary5" value="350-400만원" <?php if(strpos($salary,"350-400만원") !== false){echo "checked";}?>>350 - 400만원</label></span>
                        <span class="check_box"><label for="ai_salary6"><input type="checkbox" name="ai_salary[]" id="ai_salary6" value="400-500만원" <?php if(strpos($salary,"400-500만원") !== false){echo "checked";}?>>400 - 500만원</label></span>
                        <span class="check_box"><label for="ai_salary7"><input type="checkbox" name="ai_salary[]" id="ai_salary7" value="500-600만원" <?php if(strpos($salary,"500-600만원") !== false){echo "checked";}?>>500 - 600만원</label></span>
                        <span class="check_box"><label for="ai_salary8"><input type="checkbox" name="ai_salary[]" id="ai_salary8" value="600-700만원" <?php if(strpos($salary,"600-700만원") !== false){echo "checked";}?>>600 - 700만원</label></span>
                        <span class="check_box"><label for="ai_salary9"><input type="checkbox" name="ai_salary[]" id="ai_salary9" value="700-800만원" <?php if(strpos($salary,"700-800만원") !== false){echo "checked";}?>>700 - 800만원</label></span>
                        <span class="check_box"><label for="ai_salary10"><input type="checkbox" name="ai_salary[]" id="ai_salary10" value="800-900만원" <?php if(strpos($salary,"800-900만원") !== false){echo "checked";}?>>800 - 900만원</label></span>
                        <span class="check_box"><label for="ai_salary11"><input type="checkbox" name="ai_salary[]" id="ai_salary11" value="900만원 이상" <?php if(strpos($salary,"900만원 이상") !== false){echo "checked";}?>>900 만원 이상</label></span>
                        <span class="check_box"><label for="ai_salary12"><input type="checkbox" name="ai_salary[]" id="ai_salary12" value="내규" <?php if(strpos($salary,"내규") !== false){echo "checked";}?>>내규</label></span>
                        <span class="check_box"><label for="ai_salary13"><input type="checkbox" name="ai_salary[]" id="ai_salary13" value="협의" <?php if(strpos($salary,"협의") !== false){echo "checked";}?>>협의</label></span>
                        </div>
                        <?php $school = $array['ai_school'];?>
                        
                        <div class="ai_item">
                        <span class="check_box"><label for="ai_school1"><input type="checkbox" name="ai_school[]" id="ai_school1" value="초등학교 졸업" <?php if(strpos($school,"초등학교 졸업") !== false){echo "checked";}?>>초등학교 졸업</label></span>
                        <span class="check_box"><label for="ai_school2"><input type="checkbox" name="ai_school[]" id="ai_school2" value="중학교 졸업" <?php if(strpos($school,"중학교 졸업") !== false){echo "checked";}?>>중학교 졸업</label></span>
                        <span class="check_box"><label for="ai_school3"><input type="checkbox" name="ai_school[]" id="ai_school3" value="고등학교 졸업" <?php if(strpos($school,"고등학교 졸업") !== false){echo "checked";}?>>고등학교 졸업</label></span>
                        <span class="check_box"><label for="ai_school4"><input type="checkbox" name="ai_school[]" id="ai_school4" value="전문 학사" <?php if(strpos($school,"전문 학사") !== false){echo "checked";}?>>전문 학사</label></span>
                        <span class="check_box"><label for="ai_school5"><input type="checkbox" name="ai_school[]" id="ai_school5" value="일반 학사" <?php if(strpos($school,"일반 학사") !== false){echo "checked";}?>>일반 학사</label></span>
                        <span class="check_box"><label for="ai_school6"><input type="checkbox" name="ai_school[]" id="ai_school6" value="석사,박사" <?php if(strpos($school,"석사,박사") !== false){echo "checked";}?>>석사, 박사</label></span>
                        </div>
                        <?php $worktype = $array['ai_worktype'];?>
        
                        <div class="ai_item">
                        <span class="check_box"><label for="ai_worktype1"><input type="checkbox" name="ai_worktype[]" id="ai_worktype1" value="정규직" <?php if(strpos($worktype,"정규직") !== false){echo "checked";}?>>정규직</label></span>
                        <span class="check_box"><label for="ai_worktype2"><input type="checkbox" name="ai_worktype[]" id="ai_worktype2" value="계약직" <?php if(strpos($worktype,"계약직") !== false){echo "checked";}?>>계약직</label></span>
                        <span class="check_box"><label for="ai_worktype3"><input type="checkbox" name="ai_worktype[]" id="ai_worktype3" value="파견직" <?php if(strpos($worktype,"파견직") !== false){echo "checked";}?>>파견직</label></span>
                        <span class="check_box"><label for="ai_worktype4"><input type="checkbox" name="ai_worktype[]" id="ai_worktype4" value="인턴" <?php if(strpos($worktype,"인턴") !== false) {echo "checked";}?>>인턴</label></span>
                        <span class="check_box"><label for="ai_worktype5"><input type="checkbox" name="ai_worktype[]" id="ai_worktype5" value="병역특례" <?php if(strpos($worktype,"병역특례") !== false){echo "checked";}?>>병역특례</label></span>
                        <span class="check_box"><label for="ai_worktype6"><input type="checkbox" name="ai_worktype[]" id="ai_worktype6" value="아르바이트" <?php if(strpos($worktype,"아르바이트") !== false){echo "checked";}?>>아르바이트</label></span>
                        <span class="check_box"><label for="ai_worktype7"><input type="checkbox" name="ai_worktype[]" id="ai_worktype7" value="전임" <?php if(strpos($worktype,"전임") !== false){echo "checked";}?>>전임</label></span>
                        <span class="check_box"><label for="ai_worktype8"><input type="checkbox" name="ai_worktype[]" id="ai_worktype8" value="교육생" <?php if(strpos($worktype,"교육생") !== false){echo "checked";}?>>교육생</label></span>
                        <span class="check_box"><label for="ai_worktype9"><input type="checkbox" name="ai_worktype[]" id="ai_worktype9" value="프리랜서" <?php if(strpos($worktype,"프리랜서") !== false){echo "checked";}?>>프리랜서</label></span>
                        <span class="check_box"><label for="ai_worktype10"><input type="checkbox" name="ai_worktype[]" id="ai_worktype10" value="해외취업" <?php if(strpos($worktype,"해외취업") !== false){echo "checked";}?>>해외취업</label></span>
                        <span class="check_box"><label for="ai_worktype11"><input type="checkbox" name="ai_worktype[]" id="ai_worktype11" value="파트" <?php if(strpos($worktype,"파트") !== false){echo "checked";}?>>파트</label></span>
                        <span class="check_box"><label for="ai_worktype12"><input type="checkbox" name="ai_worktype[]" id="ai_worktype12" value="위촉직" <?php if(strpos($worktype,"위촉직") !== false){echo "checked";}?>>위촉직</label></span>
                        <span class="check_box"><label for="ai_worktype13"><input type="checkbox" name="ai_worktype[]" id="ai_worktype13" value="기타" <?php if(strpos($worktype,"기타") !== false){echo "checked";}?>>기타</label></span>
                        </div>
                        <?php $ctype = $array['ai_ctype'];?>
                        <div class="ai_item">
                        <span class="check_box"><label for="ai_ctype1"><input type="checkbox" name="ai_ctype[]" id="ai_ctype1" value="대기업" <?php if(strpos($ctype,"대기업") !== false){echo "checked";}?>>대기업</label></span>
                        <span class="check_box"><label for="ai_ctype2"><input type="checkbox" name="ai_ctype[]" id="ai_ctype2" value="외국계" <?php if(strpos($ctype,"외국계") !== false){echo "checked";}?>>외국계</label></span>
                        <span class="check_box"><label for="ai_ctype3"><input type="checkbox" name="ai_ctype[]" id="ai_ctype3" value="코스닥" <?php if(strpos($ctype,"코스닥") !== false){echo "checked";}?>>코스닥</label></span>
                        <span class="check_box"><label for="ai_ctype4"><input type="checkbox" name="ai_ctype[]" id="ai_ctype4" value="주식회사" <?php if(strpos($ctype,"주식회사") !== false){echo "checked";}?>>주식회사</label></span>
                        <span class="check_box"><label for="ai_ctype5"><input type="checkbox" name="ai_ctype[]" id="ai_ctype5" value="병역특례 인증 업체" <?php if(strpos($ctype,"병역특례 인증 업체") !== false){echo "checked";}?>>병역특례 인증 업체</label></span>
                        <span class="check_box"><label for="ai_ctype6"><input type="checkbox" name="ai_ctype[]" id="ai_ctype6" value="중견기업" <?php if(strpos($ctype,"중견기업") !== false){echo "checked";}?>>중견기업</label></span>
                        <span class="check_box"><label for="ai_ctype7"><input type="checkbox" name="ai_ctype[]" id="ai_ctype7" value="중소기업" <?php if(strpos($ctype,"중소기업") !== false){echo "checked";}?>>중소기업</label></span>
                        <span class="check_box"><label for="ai_ctype8"><input type="checkbox" name="ai_ctype[]" id="ai_ctype8" value="기타" <?php if(strpos($ctype,"기타") !== false){echo "checked";}?>>기타</label></span>
                        </div>
                        <label for="ai_career">경력</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="ai_career" id="ai_career" value="<?php echo $array['ai_career'];?>"></span>
                        <label for="ai_date">근무일시</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="ai_date" id="ai_date" value="<?php echo $array['ai_date'];?>"></span>
                        <label for="ai_essential">필수사항</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="ai_essential" id="ai_essential" value="<?php echo $array['ai_essential'];?>"></span>
                        <label for="ai_preferential">우대사항</label><span class="err_text"></span>
                        <span class="text_box"><input type="text" name="ai_preferential" id="ai_preferential" value="<?php echo $array['ai_preferential'];?>"></span>
                        <label for="ai_gender">성별</label>
                        <span class="text_box"><input type="text" name="ai_gender" id="ai_gender" value="<?php echo $array['ai_gender'];?>"></span>
                        <label for="ai_title">광고 제목</label>
                        <span class="text_box"><input type="text" name="ai_title" id="ai_title" value="<?php echo $array['ai_title'];?>"></span>
                        <label for="ai_detail">모집 부문 및 상세 정보</label>
                        <span class="textarea_box"><textarea name="ai_detail" id="ai_detail" value=""><?php echo $array['ai_detail'];?></textarea></span>
                        <p class="sub_title">접수 기간</p>
                        <?php $syear = substr($array['ai_startDate'],0,4);?>
                        <?php $smonth = substr($array['ai_startDate'],5,2);?>
                        <?php $sdate = substr($array['ai_startDate'],8,2);?>
                        <?php $ai_startDate = $smonth."/".$sdate."/".$syear;?>
                        <?php $eyear = substr($array['ai_endDate'],0,4);?>
                        <?php $emonth = substr($array['ai_endDate'],5,2);?>
                        <?php $edate = substr($array['ai_endDate'],8,2);?>
                        <?php $ai_endDate = $emonth."/".$edate."/".$eyear;?>
                            <label for="ai_startDate">시작일: </label><span class="text_box"> <input type="text"
                                    value="<?php echo $ai_startDate;?>" id="ai_startDate" name="ai_startDate"></span></p>
                            <label for="ai_endDate">마감일: </label><span class="text_box"><input type="text" value="<?php echo $ai_endDate;?>"
                                    id="ai_endDate" name="ai_endDate"></span>
                    <button type="submit" class="reg_btn">등록하기</button>
                </fieldset>
                </form>
            
        </main>
        <?php include("../html_inc/footer.inc"); ?>
    </div>
</body>

</html>