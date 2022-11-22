<?php
include "../inc/session.php";
include "../inc/dbcon.php";

$sql = "select * from provision_list;";
$result = mysqli_query($dbcon,$sql);
$total = mysqli_num_rows($result);
$list_num = 20;
$page_num = 5;
$page = isset($_GET['page'])? $_GET['page'] : 1;
$total_page = ceil($total / $list_num);
$total_block = ceil($total_page / $page_num);
$now_block = ceil($page / $page_num);
$s_pageNum = ($now_block - 1) * $page_num + 1;
$p_idx = isset($_GET['p_idx'])? $_GET['p_idx'] : '';
$pos = isset($_GET['pos'])? $_GET['pos'] : '';

if($s_pageNum <= 0){
$s_pageNum = 1;
};
$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../css/reset.css" type="text/css">
<link rel="stylesheet" href="../css/ir.css" type="text/css">
<link rel="stylesheet" href="../css/footer.css" type="text/css">
<link rel="stylesheet" href="../css/header.css" type="text/css">
<link rel="stylesheet" href="../css/gnb.css" type="text/css">
<link rel="stylesheet" href="../css/topmenu.css" type="text/css">
<link rel="stylesheet" href="../css/header_search.css" type="text/css">
<link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
<link rel="stylesheet" href="../css/prov_list.css" type="text/css">
<link href="../css/provision_select.css" rel="stylesheet">
<script src="../script/jquery.js"></script>
<script src="../script/prov_select.js"></script>
<script src="../script/gnb.js" type="text/javascript"></script>
<script src="../script/popular_rank.js" type="text/javascript"></script>
<script src="../script/top_menu.js" type="text/javascript"></script>
<script src="../script/script.js" type="text/javascript"></script>
<script>
    function notice_detail(no_idx){
        let ContainerElement = document.getElementById("ContentContainer");
        let y = ContainerElement.scrollTop;
        location.href = "list.php?page="+<?php echo $page;?>+"&p_idx="+no_idx+"&pos="+y;
    };
    function notice_del(p_idx) {
        const admin_ck = confirm("정말 삭제하시겠습니까?");
        if (admin_ck) {
            location.href = "delete.php?p_idx="+p_idx+";";
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
    $(function(){
        $('.notice_list').scrollTop(<?php echo $pos;?>);
    });
</script>

<style>
.modify{border:none;background:#0080ff;color:white;padding: 5px 10px;border-radius:15px;margin-right:10px;cursor:pointer}
.delete{border:none;background:#0080ff;color:white;padding: 5px 10px;border-radius:15px;cursor:pointer}
.first_slogan{font-family:"bm dohyeon";font-size:30px;width: 750px;line-height: calc(95vh - 200px);text-align:center;color:#0080ff}
.search_box{height:30px;border:1px solid #0080ff;border-radius:20px;background: #fff;padding-left:30px;width: 350px;;box-sizing:border-box;margin-right:10px;}
.provision_glass{width: 16px;height: 16px;position: absolute;left: 10px;top: 7px;}
.provision_search_btn{height: 30px;width: 50px;border:none;box-sizing:border-box;background: #0080ff;color:white}
.txt_wrap{display:flex;flex-direction:row;flex-wrap:wrap;justify-content:flex-start;width: 450px;box-sizing:border-box;border-bottom: 1px solid #e0e0e0;padding: 10px 20px;}
.location{margin:0 10px 10px 0;display:flex;justify-content:space-between;width: 270px;}
.product{margin-bottom:10px;}
.search_wrap{position: relative;}
.modify{border:none;background:#0080ff;color:white;padding: 5px 10px;border-radius:15px;margin-right:10px;cursor:pointer}
.delete{border:none;background:#0080ff;color:white;padding: 5px 10px;border-radius:15px;cursor:pointer}
.first_slogan{font-family:"bm dohyeon";font-size:30px;width: 750px;line-height: calc(95vh - 200px);text-align:center;color:#0080ff}
    
</style>
</head>
<body>
    <?php include '../html_inc/header.inc'?>
    <div class="notice">
        <div class="notice_left">
            <p class="total">전체 <?php echo $total;?>개</p>
                    <form action="search.php" name="select.form" method="post" onsubmit="">
                        <fieldset class="txt_wrap">
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
                                    <input
                                        type="hidden"
                                        value=""
                                        class="final_location_detail"
                                        name="final_location_detail"></div>
                                    <div class="product">
                                        <select name="product" id="product_box">
                                            <option value="">제품 선택</option>
                                            <option value="provision">주부식</option>
                                            <option value="spare">기부속</option>
                                            <option value="store">선용품</option>
                                            <option value="bilge">빌지처리</option>
                                            <option value="cleaning">선창클리닝</option>
                                            <option value="repair">선박수리</option>
                                            <option value="sludge">슬러지</option>
                                            <option value="agency">대리점</option>
                                            <option value="spro">SPRO 계약</option>
                                            <option value="garbage">쓰레기</option>
                                            <option value="fw">청수</option>
                                            <option value="onboard_pay">선용금</option>
                                            <option value="tex_free">면세품</option>
                                            <option value="private">개인물품</option>
                                            <option value="laundry">세탁물</option>
                                            <option value="etc">기타</option>
                                        </select>
                                        <input type="hidden" value="" class="final_product" name="final_product"></div>
                                        <label for="search_box" class="search_wrap">
                                            <input
                                                type="text"
                                                placeholder="회사 이름을 입력해주세요"
                                                class="search_box"
                                                name="search_box">
                                                <svg
                                                    class="provision_glass"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
                                                </svg>
                                            </label>
                                            <button type="submit" class="provision_search_btn">검색</button>
                                        </fieldset>
                                    </form>
        <div class="notice_list" id="ContentContainer">
            <?php 
        $start = ($page - 1)*$list_num;
        $sql = "select * from provision_list order by p_idx desc limit $start, $list_num;";
        $result = mysqli_query($dbcon,$sql);
        $cnt = $total - $start;
        while($array = mysqli_fetch_array($result)){?>
            <div id="bl<?php echo $array['p_idx'];?>" class="notice_card <?php if($array['p_idx'] == $p_idx){ echo "active_notice";}?>" onclick="notice_detail(<?php echo $array['p_idx'];?>)">
                <p class="writer">
                <svg class="writer_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M88 104C88 95.16 95.16 88 104 88H152C160.8 88 168 95.16 168 104V152C168 160.8 160.8 168 152 168H104C95.16 168 88 160.8 88 152V104zM280 88C288.8 88 296 95.16 296 104V152C296 160.8 288.8 168 280 168H232C223.2 168 216 160.8 216 152V104C216 95.16 223.2 88 232 88H280zM88 232C88 223.2 95.16 216 104 216H152C160.8 216 168 223.2 168 232V280C168 288.8 160.8 296 152 296H104C95.16 296 88 288.8 88 280V232zM280 216C288.8 216 296 223.2 296 232V280C296 288.8 288.8 296 280 296H232C223.2 296 216 288.8 216 280V232C216 223.2 223.2 216 232 216H280zM0 64C0 28.65 28.65 0 64 0H320C355.3 0 384 28.65 384 64V448C384 483.3 355.3 512 320 512H64C28.65 512 0 483.3 0 448V64zM48 64V448C48 456.8 55.16 464 64 464H144V400C144 373.5 165.5 352 192 352C218.5 352 240 373.5 240 400V464H320C328.8 464 336 456.8 336 448V64C336 55.16 328.8 48 320 48H64C55.16 48 48 55.16 48 64z"/></svg><?php echo $array["p_company_name"];?>
                </p>
                <p class="title <?php if($array['p_idx'] == $p_idx){ echo "active_title";}?>">
                <?php echo $array["p_port"];?>
                </p>
                <p class="date">
                <svg class="view_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M248 0H208c-26.5 0-48 21.5-48 48V160c0 35.3 28.7 64 64 64H352c35.3 0 64-28.7 64-64V48c0-26.5-21.5-48-48-48H328V80c0 8.8-7.2 16-16 16H264c-8.8 0-16-7.2-16-16V0zM64 256c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H184v80c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V256H64zM352 512H512c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H472v80c0 8.8-7.2 16-16 16H408c-8.8 0-16-7.2-16-16V256H352c-15 0-28.8 5.1-39.7 13.8c4.9 10.4 7.7 22 7.7 34.2V464c0 12.2-2.8 23.8-7.7 34.2C323.2 506.9 337 512 352 512z"/></svg>
                서비스 아이템
                </p>
            </div>
            <?php };?>
            <p class="pager">
                <?php
                    if($page <= 1){
                ?>
                    <a href="list.php?page=1&p_idx=<?php echo $p_idx;?>#bl<?php echo $p_idx;?>" class="pager_prev">이전</a>
                <?php } else{?>
                    <a href="list.php?page=<?php echo ($page-1);?>&p_idx=<?php echo $p_idx;?>#bl<?php echo $p_idx;?>" class="pager_prev">이전</a>
                <?php };?>
                <?php
                    for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
                ?>
                    <a href="list.php?page=<?php echo $print_page; ?>&p_idx=<?php echo $p_idx;?>#bl<?php echo $p_idx;?>"><button class="<?php if($page == $print_page){?>active_pager<?php }else{;?>pager_btn<?php };?>"><?php echo $print_page; ?></button></a>
                <?php };?>
                <?php
                    if($page >= $total_page){
                ?>
                    <a href="list.php?page=<?php echo $total_page; ?>&p_idx=<?php echo $p_idx;?>#bl<?php echo $p_idx;?>" class="pager_next">다음</a>
                <?php } else{ ?>
                    <a href="list.php?page=<?php echo ($page+1); ?>&p_idx=<?php echo $p_idx;?>#bl<?php echo $p_idx;?>" class="pager_next">다음</a>
                <?php };?>
            </p>
        </div>
        </div>
        <div class="notice_detail">
        <?php if($p_idx == ''){?>
            <p class="first_slogan">보고싶은 글을 클릭해주세요!</p>
            <?php }else{?>
        <?php 
        $sql = "select * from provision_list where p_idx=$p_idx;";
        $result = mysqli_query($dbcon,$sql);
        $array = mysqli_fetch_array($result);
        mysqli_query($dbcon,$sql);
        ?>
            <div class="detail_header">
        <?php if($s_id == "admin" || $s_name == $array["p_company_name"]){ ?>
            <div class="sidebox">
            <a href="modify.php?p_idx=<?php echo $p_idx;?>"><button class="modify">수정</button></a>
            <a href="#" onclick="notice_del(<?php echo $p_idx;?>)"><button class="delete">삭제</button></a>
        </div>
        <?php };?>
            <p class="detail_title">
                        <?php echo $array['p_company_name'];?>
                        </p>
                        <p class="detail_writer">
                        <svg class="writer_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 96c0-17.7 14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32s-32-14.3-32-32zm85.1 80C367 158.8 384 129.4 384 96c0-53-43-96-96-96s-96 43-96 96c0 33.4 17 62.8 42.9 80H224c-17.7 0-32 14.3-32 32s14.3 32 32 32h32V448H208c-53 0-96-43-96-96v-6.1l7 7c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97 263c-9.4-9.4-24.6-9.4-33.9 0L7 319c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l7-7V352c0 88.4 71.6 160 160 160h80 80c88.4 0 160-71.6 160-160v-6.1l7 7c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-56-56c-9.4-9.4-24.6-9.4-33.9 0l-56 56c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l7-7V352c0 53-43 96-96 96H320V240h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H341.1z"/></svg><?php echo $array['p_port'];?>
                        </p>
                        <div class="detail_sub_box">
                        <p class="detail_date">
                        <svg class="view_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M248 0H208c-26.5 0-48 21.5-48 48V160c0 35.3 28.7 64 64 64H352c35.3 0 64-28.7 64-64V48c0-26.5-21.5-48-48-48H328V80c0 8.8-7.2 16-16 16H264c-8.8 0-16-7.2-16-16V0zM64 256c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H224c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H184v80c0 8.8-7.2 16-16 16H120c-8.8 0-16-7.2-16-16V256H64zM352 512H512c35.3 0 64-28.7 64-64V320c0-35.3-28.7-64-64-64H472v80c0 8.8-7.2 16-16 16H408c-8.8 0-16-7.2-16-16V256H352c-15 0-28.8 5.1-39.7 13.8c4.9 10.4 7.7 22 7.7 34.2V464c0 12.2-2.8 23.8-7.7 34.2C323.2 506.9 337 512 352 512z"/></svg>
                        서비스 아이템    
                        </p>
                        </div>
                        </div>
                        <div class="detail_content">
                        <p><span>지역</span><?php echo $array['p_location'];?> > <?php echo $array['p_location_detail'];?></p>
                        <p><span>회사명</span><?php echo $array['p_company_name'];?></p>
                        <p><span>서비스 항구</span><?php echo $array['p_port'];?></p>
                        <p><span>서비스 ITEM</span>서비스 아이템</p>
                        <p><span>주소</span><?php echo $array['p_addr'];?></p>
                        <p><span>대표</span><?php echo $array['p_ceo'];?></p>
                        <p><span>담당자</span><?php echo $array['p_pic'];?></p>
                        <p><span>전화번호</span><?php echo $array['p_num'];?></p>
                        <p><span>FAX</span><?php echo $array['p_fax'];?></p>
                        <p><span>Email</span><?php echo $array['p_email'];?></p>
                        <p><span>홈페이지</span><?php echo $array['p_web'];?></p>
                        <p class="note_box"><span>비고</span><span class="note"><?php echo $array['p_note'];?></span></p>
                        </div>
                        <?php }?>
        </div>
    </div>

</body>

</html>