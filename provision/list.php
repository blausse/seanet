<?php
include "../inc/session.php";
include "../inc/dbcon.php";

$sql = "select*from notice;";
$result = mysqli_query($dbcon,$sql);
$total = mysqli_num_rows($result);
$list_num = 20;
$page_num = 5;
$page = isset($_GET['page'])? $_GET['page'] : 1;
$total_page = ceil($total / $list_num);
$total_block = ceil($total_page / $page_num);
$now_block = ceil($page / $page_num);
$s_pageNum = ($now_block - 1) * $page_num + 1;
$n_idx = isset($_GET['n_idx'])? $_GET['n_idx'] : '';
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
<link rel="stylesheet" href="../css/provision_select.css" type="text/css">
<link rel="stylesheet" href="../css/header.css" type="text/css">
<link rel="stylesheet" href="../css/gnb.css" type="text/css">
<link rel="stylesheet" href="../css/topmenu.css" type="text/css">
<link rel="stylesheet" href="../css/header_search.css" type="text/css">
<link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
<link rel="stylesheet" href="../css/prov_list.css" type="text/css">
<script src="../script/jquery.js"></script>
<script src="../script/jquery.nice-select.js"></script>
<script src="../script/script.js" type="text/javascript"></script>
<script src="../script/gnb.js" type="text/javascript"></script>
<script src="../script/popular_rank.js" type="text/javascript"></script>
<script src="../script/top_menu.js" type="text/javascript"></script>
<!-- <script src="../script/notice_css.js" type="text/javascript"></script> -->
<script>
    function notice_detail(no_idx){
    location.href = "list.php?page="+<?php echo $page;?>+"&n_idx="+no_idx+"#bl"+no_idx;
};
function notice_del(n_idx) {
    const admin_ck = confirm("정말 삭제하시겠습니까?");
    if (admin_ck) {
        location.href = "delete.php?n_idx="+n_idx+";";
    };
};
function location_change(){
var korea = ["서해","남해","동해","국내 전역"];
var asia = ["중국","인도","중동","일본","인도네시아","싱가폴","극동아시아","동남아시아","기타","아시아 전역"];
var america = ["북미 서부","북미 동부","북미 전역","중남미","남미","남미 전역"];
var europe = ["북유럽","동유럽","지중해","서유럽","유럽 전역"];
var oseania = ["호주","뉴질랜드","오세아니아 전역"];
var target = document.getElementById("area");

if(e.value=="korea"){
    var area = good_korea;
}
};
    </script>
    <style>
.modify{border:none;background:#0080ff;color:white;padding: 5px 10px;border-radius:15px;margin-right:10px;cursor:pointer}
.delete{border:none;background:#0080ff;color:white;padding: 5px 10px;border-radius:15px;cursor:pointer}
.first_slogan{font-family:"bm dohyeon";font-size:30px;width: 750px;line-height: calc(95vh - 200px);text-align:center;color:#0080ff}
.search_box{height:30px;border:1px solid #0080ff;border-radius:20px;background: #fff;padding-left:30px;width: 350px;;box-sizing:border-box;margin-right:10px;}
.provision_glass{width: 16px;height: 16px;position: absolute;left: 10px;top: 7px;}
.provision_search_btn{height: 30px;width: 50px;border:none;box-sizing:border-box;background: #0080ff;color:white}
.txt_wrap{display:flex;flex-direction:row;flex-wrap:wrap;justify-content:flex-start;width: 450px;box-sizing:border-box;border-bottom: 1px solid #e0e0e0;padding: 10px 20px;}
.location{margin:0 10px 10px 0;}
.product{margin-bottom:10px;}
.search_wrap{position: relative;}
    </style>
</head>
<body>
    <?php include '../html_inc/header.inc'?>
    <div class="notice">
        <div class="notice_left">
    <p class="total">전체 <?php echo $total;?>개</p>
    <form action="search.php" name="select.form" method="post"  onsubmit="">
    <fieldset class="txt_wrap">
                            <div class="location">
                                <select name="location" id="location_box" onchange="location_change()">
                                    <option value="">지역선택</option>
                                    <option value="korea">국내</option>
                                    <option value="asia">아시아</option>
                                    <option value="america">아메리카</option>
                                    <option value="europe">유럽</option>
                                    <option value="africa">아프리카</option>
                                    <option value="oseania">오세아니아</option>
                                </select>
                            </div>
                            <div class="product">
                                <select name="product" id="product_box">
                                    <option value="">제품선택</option>
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
                            </div>
                            <label for="search_box" class="search_wrap">
                            <input type="text" placeholder="검색어를 입력해주세요" class="search_box" name="search_box"><svg class="provision_glass"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                            </svg></label>
                            <button type="submit" class="provision_search_btn">검색</button>
                            </fieldset>
    </form>
        <div class="notice_list">
            <?php 
        $start = ($page - 1)*$list_num;
        $sql = "select * from notice order by idx desc limit $start, $list_num;";
        $result = mysqli_query($dbcon,$sql);
        $cnt = $total - $start;
        while($array = mysqli_fetch_array($result)){?>
            <div id="bl<?php echo $array['idx'];?>" class="notice_card <?php if($array['idx'] == $n_idx){ echo "active_notice";}?>" onclick="notice_detail(<?php echo $array['idx'];?>)">
                <p class="writer">
                <svg class="writer_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/></svg><?php echo $array["writer"];?>
                </p>
                <p class="title <?php if($array['idx'] == $n_idx){ echo "active_title";}?>">
                <?php echo $array["n_title"];?>
                </p>
                <p class="date">
                <svg class="view_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 248H128V192H48V248zM48 296V360H128V296H48zM176 296V360H272V296H176zM320 296V360H400V296H320zM400 192H320V248H400V192zM400 408H320V464H384C392.8 464 400 456.8 400 448V408zM272 408H176V464H272V408zM128 408H48V448C48 456.8 55.16 464 64 464H128V408zM272 192H176V248H272V192z"/></svg><?php $w_date = substr($array['w_date'],0,10);?>
                <?php echo $w_date;?>
                </p>
                <p class="view">
                <svg class="view_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z"/></svg><?php echo $array["cnt"];?>
                </p>
            </div>
            <?php };?>
            <p class="pager">
                <?php
                    if($page <= 1){
                ?>
                    <a href="list.php?page=1&n_idx=<?php echo $n_idx;?>#bl<?php echo $n_idx;?>" class="pager_prev">이전</a>
                <?php } else{?>
                    <a href="list.php?page=<?php echo ($page-1);?>&n_idx=<?php echo $n_idx;?>#bl<?php echo $n_idx;?>" class="pager_prev">이전</a>
                <?php };?>
                <?php
                    for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
                ?>
                    <a href="list.php?page=<?php echo $print_page; ?>&n_idx=<?php echo $n_idx;?>#bl<?php echo $n_idx;?>"><button class="<?php if($page == $print_page){?>active_pager<?php }else{;?>pager_btn<?php };?>"><?php echo $print_page; ?></button></a>
                <?php };?>
                <?php
                    if($page >= $total_page){
                ?>
                    <a href="list.php?page=<?php echo $total_page; ?>&n_idx=<?php echo $n_idx;?>#bl<?php echo $n_idx;?>" class="pager_next">다음</a>
                <?php } else{ ?>
                    <a href="list.php?page=<?php echo ($page+1); ?>&n_idx=<?php echo $n_idx;?>#bl<?php echo $n_idx;?>" class="pager_next">다음</a>
                <?php };?>
            </p>
        </div>
        </div>
        <div class="notice_detail">
        <?php if($n_idx == ''){?>
            <p class="first_slogan">보고싶은 글을 클릭해주세요!</p>
            <?php }else{?>
        <?php 
        $sql = "select * from notice where idx=$n_idx;";
        $result = mysqli_query($dbcon,$sql);
        $array = mysqli_fetch_array($result);
        $cnt = $array['cnt'] + 1;
        $sql = "update notice set cnt = $cnt where idx = $n_idx;";
        mysqli_query($dbcon,$sql);
        ?>
            <div class="detail_header">
        <?php if($s_id == "admin" || $s_name == $array["writer"]){ ?>
            <div class="sidebox">
            <a href="modify.php?n_idx=<?php echo $n_idx;?>"><button class="modify">수정</button></a>
            <a href="#" onclick="notice_del(<?php echo $n_idx;?>)"><button class="delete">삭제</button></a>
        </div>
        <?php };?>
            <p class="detail_title">
                        <?php echo $array['n_title'];?>
                        </p>
                        <p class="detail_writer">
                        <svg class="writer_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/></svg><?php echo $array['writer'];?>
                        </p>
                        <div class="detail_sub_box">
                        <p class="detail_date">
                        <svg class="view_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 248H128V192H48V248zM48 296V360H128V296H48zM176 296V360H272V296H176zM320 296V360H400V296H320zM400 192H320V248H400V192zM400 408H320V464H384C392.8 464 400 456.8 400 448V408zM272 408H176V464H272V408zM128 408H48V448C48 456.8 55.16 464 64 464H128V408zM272 192H176V248H272V192z"/></svg><?php $w_date = substr($array['w_date'],0,10)?>
                            <?php echo $w_date;?>
                        </p>
                        <p class="detail_cnt">
                        <svg class="view_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z"/></svg> <?php echo $array['cnt'];?>
                        </p>
                        </div>
                        </div>
                        <p class="detail_content">
                        <?php echo $array['n_content'];?>
                        </p>
                        <?php }?>
        </div>
    </div>
</body>

</html>