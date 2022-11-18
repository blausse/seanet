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
<link href="../css/nice-select.css" rel="stylesheet">
<link rel="stylesheet" href="../css/header.css" type="text/css">
<link rel="stylesheet" href="../css/gnb.css" type="text/css">
<link rel="stylesheet" href="../css/topmenu.css" type="text/css">
<link rel="stylesheet" href="../css/header_search.css" type="text/css">
<link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
<link rel="stylesheet" href="../css/list.css" type="text/css">
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
    </script>
    <style>
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