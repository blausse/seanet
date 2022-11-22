<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEANET</title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css">
    <link rel="stylesheet" href="../css/ir.css" type="text/css">
    <link rel="stylesheet" href="../css/footer.css" type="text/css">
    <link href="../css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/vip_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
    <link rel="stylesheet" href="../css/mainbanner.css" type="text/css">
    <link rel="stylesheet" href="../css/voice.css" type="text/css">
    <link rel="stylesheet" href="../css/provision.css" type="text/css">
    <link rel="stylesheet" href="../css/normal_ad.css" type="text/css">
    <link rel="stylesheet" href="../css/rank.css" type="text/css">
    <link rel="stylesheet" href="../css/gnb.css" type="text/css">
    <link rel="stylesheet" href="../css/topmenu.css" type="text/css">
    <link rel="stylesheet" href="../css/header_search.css" type="text/css">
    <link rel="stylesheet" href="../css/popular_rank.css" type="text/css">
    <link rel="stylesheet" href="../css/provision_check.css" type="text/css">
    <script src="../script/jquery.js"></script>
    <script src="../script/jquery.nice-select.js"></script>
    <script src="../script/script.js" type="text/javascript"></script>
    <script></script>
</head>

<body>
    <section class="provision_check">
        <form action="http://info.sweettracker.co.kr/tracking/4" method="post">
            <fieldset>
                <legend>배송조회</legend>
                <div class="form-group hide">
                    <label for="t_key">API key</label>
                    <input type="hidden" class="form-control" id="t_key" name="t_key" placeholder="제공받은 APIKEY"
                        value="8rC8VcHEmE7WoiBR5v9IAA">
                </div>
                <div class="form-group">
                    <label for="t_code" class="hide">택배사 코드</label>
                    <input type="text" class="form-control" name="t_code" id="t_code" placeholder="택배사 코드">
                    <select name="" id="code_sel">
                        <option value="" selected>택배사 선택</option>
                        <option value="04">CJ대한통운</option>
                        <option value="05">한진택배</option>
                        <option value="08">롯데택배</option>
                        <option value="01">우체국택배</option>
                        <option value="06">로젠택배</option>
                        <option value="11">일양로지스</option>
                        <option value="20">한덱스</option>
                        <option value="22">대신택배</option>
                        <option value="23">경동택배</option>
                        <option value="32">합동택배</option>
                        <option value="46">CU 편의점택배</option>
                        <option value="24">GS Post 택배</option>
                        <option value="16">한의사랑택배</option>
                        <option value="17">천일택배</option>
                        <option value="18">건영택배</option>
                        <option value="40">굿투럭</option>
                        <option value="43">애니트랙</option>
                        <option value="44">SLX택배</option>
                        <option value="45">우리택배(구호남택배)</option>
                        <option value="47">우리한방택배</option>
                        <option value="53">농협택배</option>
                        <option value="54">홈픽택배</option>
                        <option value="71">IK물류</option>
                        <option value="72">성훈물류</option>
                        <option value="74">용마로지스</option>
                        <option value="75">원더스퀵</option>
                        <option value="79">로지스밸리택배</option>
                        <option value="82">컬리로지스</option>
                        <option value="85">풀앳홈</option>
                        <option value="86">삼성전자물류</option>
                        <option value="88">큐런택배</option>
                        <option value="89">두발히어로</option>
                        <option value="90">위니아딤채</option>
                        <option value="92">지니고 당일배송</option>
                        <option value="94">오늘의픽업</option>
                        <option value="79">로지스밸리</option>
                        <option value="101">한샘서비스원 택배</option>
                        <option value="103">NDEX KOREA</option>
                        <option value="104">도도(dodoflex)</option>
                        <option value="107">LG전자(판토스)</option>
                        <option value="110">부릉</option>
                        <option value="112">1004 홈</option>
                        <option value="113">썬더히어로</option>
                        <option value="116">(주)팀프레시</option>
                        <option value="118">롯데칠성</option>
                        <option value="119">핑퐁</option>
                        <option value="120">발렉스 특수물류</option>
                        <option value="123">엔티엘피스</option>
                        <option value="125">GTS로지스</option>
                        <option value="127">로지스팟</option>
                        <option value="129">홈픽 오늘도착</option>
                        <option value="130">UFO로지스</option>
                        <option value="131">딜리래빗</option>
                        <option value="132">지오피</option>
                        <option value="134">에이치케이홀딩스</option>
                        <option value="135">HTNS</option>
                        <option value="136">케이제이티</option>
                        <option value="137">더바오</option>
                        <option value="138">라스트</option>
                        <option value="139">러쉬</option>
                        <option value="142">탱고앤고</option>
                        <option value="143">투데이</option>
                        <option value="145">현대글로비스</option>
                        <option value="148">ARGO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="t_invoice" class="hide">운송장 번호</label>
                    <input type="text" class="form-control" name="t_invoice" id="t_invoice"
                        placeholder="운송장 번호를 입력해주세요">
                </div>
                <button type="submit" class="check_btn">조회하기</button>
            </fieldset>
        </form>
    </section>
</body>

</html>