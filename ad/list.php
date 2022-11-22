<?php
error_reporting(E_ALL);

ini_set('display_errors', '1');
include "../inc/session.php";
include "../inc/dbcon.php";
$n_idx = isset($_GET['n_idx'])? $_GET['n_idx'] : '';
$sql = "select * from ad_info;";
$timeSql = isset($_GET['n_idx'])? "select * from ad_info where ad_info.idx = $n_idx;" : '';
$result = mysqli_query($dbcon,$sql);
$timeResult = isset($_GET['n_idx'])? mysqli_query($dbcon,$timeSql) : '';
$total = mysqli_num_rows($result);
$array = mysqli_fetch_array($result);
$timeArray = isset($_GET['n_idx'])? mysqli_fetch_array($timeResult) : '';
$list_num = 3;
$page_num = 5;
$page = isset($_GET['page'])? $_GET['page'] : 1;
$total_page = ceil($total / $list_num);
$total_block = ceil($total_page / $page_num);
$now_block = ceil($page / $page_num);
$s_pageNum = ($now_block - 1) * $page_num + 1;
$pos = isset($_GET['pos'])? $_GET['pos'] : 1;

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
<link rel="stylesheet" href="../css/ad_list.css" type="text/css">
<script src="../script/jquery.js"></script>
<script src="../script/jquery.nice-select.js"></script>
<script src="../script/script.js" type="text/javascript"></script>
<script src="../script/gnb.js" type="text/javascript"></script>
<script src="../script/popular_rank.js" type="text/javascript"></script>
<script src="../script/top_menu.js" type="text/javascript"></script>
<script>
    function notice_detail(no_idx){
        var ContainerElement = document.getElementById("ContentContainer");
        let y = ContainerElement.scrollTop;
        location.href = "list.php?page="+<?php echo $page;?>+"&n_idx="+no_idx+"&pos="+y;
    };
    function notice_del(n_idx) {
        const admin_ck = confirm("정말 삭제하시겠습니까?");
        if (admin_ck) {
            location.href = "delete.php?n_idx="+n_idx+";";
        };
    };
    $(document).ready(function () {
        const remainTime = document.querySelector("#clock");

        function diffDay() {
            const masTime = new Date("<?php if($n_idx){echo $timeArray['ai_endDate'];}?>");
            const todayTime = new Date();

            const diff = masTime - todayTime;

            const diffDay = String(Math.floor(diff / (1000 * 60 * 60 * 24)));
            const diffHour = String(Math.floor((diff / (1000 * 60 * 60)) % 24)).padStart(2, "0");
            const diffMin = String(Math.floor((diff / (1000 * 60)) % 60)).padStart(2, "0");
            const diffSec = String(Math.floor(diff / 1000 % 60)).padStart(2, "0");

            remainTime.innerText = `${diffDay}일 ${diffHour} : ${diffMin} : ${diffSec}`;
            $('#detail_top .day').text('D-'+diffDay);
        };

        diffDay();
        setInterval(diffDay, 1000);

        $('.notice_list').scrollTop(<?php echo $pos;?>);
    })
    </script>
</head>
<body>
    <?php include '../html_inc/header.inc'?>
    <div class="notice">
        <div class="notice_left">
    <p class="total">전체 <?php echo $total;?>개</p>
        <div class="notice_list" id="ContentContainer">
            <?php 
        $start = ($page - 1)*$list_num;
        $sql = "select * from ad_company join ad_info on ad_company.idx = ad_info.idx order by ad_company.idx desc limit $start, $list_num;";
        $result = mysqli_query($dbcon,$sql);

        while($array = mysqli_fetch_array($result)){?>
            <?php
                $nDate = date("Y-m-d");
                $valDate = $array['ai_endDate'];
                $leftDate = intval((strtotime($nDate)-strtotime($valDate)) / 86400) + 1; 
            ?>
            <div id="bl<?php echo $array['idx'];?>" class="notice_card <?php if($array['idx'] == $n_idx){ echo "active_notice";}?>" onclick="notice_detail(<?php echo $array['idx'];?>)">
            <img src="../data/<?php echo $array['c_logo_name'];?>" alt="">
                <dl id="list">
                    <dt class="subtitle"><?php echo $array['c_name'];?></dt>
                    <dd class="ad_desc <?php if($array['idx'] == $n_idx){ echo "active_title";}?>"><?php echo $array['ai_title'];?></dd>
                    <dd class="day">D-<?php echo $leftDate;?></dd>
                </dl>
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
        $sql = "select * from ad_company join ad_info on ad_company.idx = ad_info.idx where ad_company.idx = $n_idx;";
        $result = mysqli_query($dbcon,$sql);
        $array = mysqli_fetch_array($result);
        mysqli_query($dbcon,$sql);
        ?>
            <div class="detail_header">
                <?php if($s_id == "admin" || $s_name == $array["c_name"]){ ?>
                    <div class="sidebox">
                    <a href="modify.php?n_idx=<?php echo $n_idx;?>"><button class="modify">수정</button></a>
                    <a href="#" onclick="notice_del(<?php echo $n_idx;?>)"><button class="delete">삭제</button></a>
                    </div>
                <?php };?>
                <div class="detail_card">
                    <img src="../data/<?php echo $array['c_logo_name'];?>" alt="">
                    <dl id="detail_top">
                        <dt class="c_name"><?php echo $array['c_name'];?></dt>
                        <dd class="ai_title"><?php echo $array['ai_title'];?></dd>
                        <dd class="day">D-<?php echo $leftDate;?></dd>
                    </dl>
                </div>
                <div class="detail_sub_box">
                    <p>경력<span><?php echo $array['ai_career'];?></span></p>
                    <p>학력<span><?php echo $array['ai_school'];?></span></p>
                    <p>근무형태<span><?php echo $array['ai_worktype'];?></span></p>
                    <p>필수사항<span><?php echo $array['ai_essential'];?></span></p>
                    <p>우대사항<span><?php echo $array['ai_preferential'];?></span></p>
                    <p>직종<span><?php echo $array['ai_work'];?></span></p>
                    <p>급여<span><?php echo $array['ai_salary'];?></span></p>
                    <p>성별<span><?php echo $array['ai_gender'];?></span></p>
                    <p>근무일시<span><?php echo $array['ai_date'];?></span></p>
                    <p>근무지역<span><?php echo $array['ai_location'];?></span></p>
                </div>
            </div>
            <h3>
                모집 부문 및 상세 정보
            </h3>
                <p class="detail_content">
                    <?php
                $ai_content = str_replace("\n","<br>",$array['ai_detail']);
        $ai_content = str_replace(" ","&nbsp;",$ai_content);
        ?>
                <?php echo $ai_content;?>
                </p>
                <h3>
                    모집 기간
                </h3>
                <div class="box1">
                    <h4 id="clock"></h4>
                </div>
                <h3>
                    기업 정보
                </h3>
                <div class="box2">
                <img src="../data/<?php echo $array['c_logo_name'];?>" alt="">
                    <dl id="detail_btm">
                    <dt><?php echo $array['c_name'];?></dt>
                    <dd class="c_web">홈페이지<span><a href="<?php echo $array['c_web'];?>"><?php echo $array['c_web'];?></a></span></dd>
                    <dd>전화<span><?php echo $array['c_num'];?></span></dd>
                    <dd>팩스<span><?php echo $array['c_fax'];?></span></dd>
                    <dd>담당자<span><?php echo $array['c_pic'];?></span></dd>
                    <dd>이메일<span><?php echo $array['c_email'];?></span></dd>
                    <dd>주소<span><?php echo $array['c_addr'];?></span></dd>
                    </dl>
                </div>
                <?php }?>
        </div>
    </div>
</body>

</html>