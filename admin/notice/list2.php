<?php
include "../inc/session.php";
//db 연결
include "../inc/dbcon.php";
//쿼리 작성
// select*from members;
$sql = "select*from notice;";
//쿼리 전송
$result = mysqli_query($dbcon,$sql);

//전체 데이터 가져오기
$total = mysqli_num_rows($result);
//paging : 한 페이지 당 보여질 목록 수
$list_num = 5;
//paging : 한 블럭 당 페이지 수
$page_num = 3;
//paging : 현재 페이지
$page = isset($_GET['page'])? $_GET['page'] : 1;
//paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수, ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo $total_page;
//paging : 전체 블럭 수 = ceil(전체 페이지 수 / 한 블럭당 보여질 페이지 수)
$total_block = ceil($total_page / $page_num);
//paging : 현재 블럭 번호 = ceil(현재 페이지 번호 / 블럭 당 페이지 수)
$now_block = ceil($page / $page_num);
//paging : 블럭당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭당 페이지 수 + 1
//+1인데 처음에 -1로 잘못 적어놓고 계속 계산하면서 왜 안되지? 이러고 있었음...
$s_pageNum = ($now_block - 1) * $page_num + 1;
//데이터가 0개인 경우
if($s_pageNum <= 0){
$s_pageNum = 1;
};
//paging :  블럭당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
//db 종료
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자페이지</title>
    <link rel="stylesheet" href="/web_project/css/reset.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/ir.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/footer.css" type="text/css">
    <link href="/web_project/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="/web_project/css/header.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/gnb.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/header_search.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/voice.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/provision copy.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/rank.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/main_bg.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/community.css" type="text/css">
    <link rel="stylesheet" href="/web_project/css/pager.css" type="text/css">
    <script src="/web_project/script/jquery.js"></script>
    <script src="/web_project/script/jquery.nice-select.js"></script>
    <script src="/web_project/script/script.js" type="text/javascript"></script>
    <script src="/web_project/script/community_btn.js" type="text/javascript"></script>
    <script src="/web_project/script/gnb.js" type="text/javascript"></script>
    <script src="/web_project/script/main_banner.js" type="text/javascript"></script>
    <script src="/web_project/script/mainpage_btn.js" type="text/javascript"></script>
    <script src="/web_project/script/popular_rank.js" type="text/javascript"></script>
    <script src="/web_project/script/top_menu.js" type="text/javascript"></script>
    <script type="text/javascript">
        function notice_del(n_idx) {
    const admin_ck = confirm("정말 삭제하시겠습니까?");
    if (admin_ck) {
        location.href = "delete.php?n_idx="+n_idx+";";
    };
};
    </script>
    <style>
        table{margin:50px auto;text-align:center;}
        .notice_list_set, th{
            border-collapse:collapse;
        }
        th,td{padding:10px;font-size:16px;}
        .notice_list_title{border-top:2px solid #999;border-bottom:2px solid #999}
        .no{width:40px;}
        .notice_list_content{
            border-bottom:1px solid #e0e0e0;
        }
        .notice_wrap{position: relative;}
    </style>
</head>
<body>
<div class="wrap">
<?php include("../html_inc/header.inc"); ?>
<?php include("../html_inc/admin_index.inc"); ?><hr>
<!--콘텐트-->

<p>전체 <?php echo "$total"; ?>개</p>
<span><a href="write.php">글쓰기</a></span>
<table class="notice_list_set">
    <tr class="notice_list_title">
        <th class="no">번호</th>
        <th class="n_title">제목</th>
        <th class="writer">작성자</th>
        <th class="w_date">작성일자</th>
        <th class="cnt">조회수</th>
        <th class="manage"colspan="2">관리</th>
    </tr>
    <?php 
        //start : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 데이터 수
        $start = ($page - 1)*$list_num;
        //paging : 시작번호부터 페이지 당 보여질 목록 수 만큼 구하는 쿼리 작성
        $sql = "select * from notice order by idx desc limit $start, $list_num;";
        $result = mysqli_query($dbcon,$sql);
        //sql,result 변경...이거였구나
        $cnt = $total - $start;

        while($array = mysqli_fetch_array($result)){
        ?>
    <tr class="notice_list_content">
        <td><?php echo $cnt;?></td>
        <td><a href="view.php?n_idx=<?php echo $array['idx'];?>" class="underline"><?php echo $array["n_title"];?></a></td>
        <td><?php echo $array["writer"];?></td>
        <?php $w_date = substr($array['w_date'],0,10);?>
        <td><?php echo $w_date;?></td>
        <td><?php echo $array["cnt"];?></td>
        <td><a href="modify.php?n_idx=<?php echo $array["idx"];?>">수정</a></td>
        <td><a href="#" onclick="notice_del(<?php echo $array['idx'];?>)">삭제</a></td>
    </tr>
    <?php
    $cnt--; 
}; 
?>
</table>
<p class="pager">
    <?php
//pager: 이전 페이지
if($page <= 1){
    ?>
    <a href="list.php?page=1">이전</a>
    <?php } else{?>
        <a href="list.php?page=<?php echo ($page-1);?>">이전</a>
        <?php };?>
<?php
    /* pager : 페이지 번호 출력 */
    for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php };?>
    <?php
    /* paging : 다음 페이지 */
    if($page >= $total_page){
    ?>
    <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page+1); ?>">다음</a>
    <?php };?>
</p>
<?php include("../html_inc/footer.inc"); ?>
</div>
</body>
</html>