$(document).ready(function () {
    // selectbox styling
    $('#p_email_sel,#c_email_sel, .location_box ,#location_box , #product_box, #code_sel,.ad_info_sel select,.location_detail').niceSelect();
});
$(document).ready(function () {
    //vip_more 클릭 시, 구인광고 펼치기 / 접기
    $('.vip_more').click(function () {
        var height = $('#vip_box').height()
        if (height == 960) {
            $('#vip_box').height("auto")
            $(this).html("감추기>")
        }
        else {
            $('#vip_box').height("960")
            $(this).html("펼치기>")
        }
    })
    //ad_more 클릭 시, 구인광고 펼치기 / 접기
    $('.ad_more').click(function () {
        var height = $('.ad').height()
        if (height == 700) {
            $('.ad').height("auto")
            $(this).html("감추기>")
        }
        else {
            $('.ad').height("700")
            $(this).html("펼치기>")
        }
    })

    //ad_detail에서 클릭 시, 이어져보이게 하기
    $('.company_list article').css({
        background: "",
        borderTop: "1px solid #ededed",
        borderRight: "1px solid #949494",
        borderBottom: "1px solid #949494",
        height: "120px"
    })

    $(".company_list article:last").css({ borderBottom: "" })

    $('.company_list article').click(function () {
        $(this).css({
            background: "white",
            borderTop: "1px solid white",
            borderRight: "1px solid white",
            borderBottom: "1px solid #949494"
        })
        $('.company_list article').not($(this)).css({
            background: "",
            borderTop: "1px solid #ededed",
            borderRight: "1px solid #949494",
            borderBottom: "1px solid #949494"
        })
        $(".company_list article:last").css({ borderBottom: "" })
    })

    //ad_detail 클릭 시, ad_description 발생
    $('.script_wrap').css({ display: "none" })
    $('article').click(function () {
        $('.script_wrap').css({ display: "" })
    })

    //ad_basic에서 ad_search tab menu 구현
    $('.ad_location, .ad_salary, .ad_school, .work_type,.anything').hide()
    $(".search_title li").click(function () {
        $(this).css({ background: "#4da4fe", color: "white" })
        $('.search_wrap li').not($(this)).css({ background: "white", color: "black" })
        var idx = $(this).index();
        $(".search_tabs ul").eq(idx).show();
        $(".search_tabs ul").not($(".search_tabs ul").eq(idx)).hide();
    })
    //ad_search tab menu 누르면 밑에 체크된 항목 나타남
    $("input[type=checkbox]").click(function () {

        var str = "";
        $("input[type=checkbox]").each(function () {
            if ($(this).is(":checked"))
                str += "<button>" + $(this).val() + "</button>";
        }
        );
        $(".checked_search").html(str);
    });

    //택배사 코드 바로 들어감
    $("#code_sel").change(function () {
        $("#t_code").val($("#code_sel option:selected").val())
    })
    //택배사 코드 숨기기
    $('#t_code').hide()
    //배송조회 시, 새로운 창에 조회하기
    $('.check_icon').click(function () {
        window.open("provision_check.html", "", "width=1000px,height=370px")
    })
    //provision list 눌렀을 때 border, bg color 변경 > 추후 인덱스로 게시글까지 같이 나오게 하기
    $('.provision_list').click(function () {
        $(this).css({
            background: "white",
            borderLeft: "none",
            borderTop: "none",
            borderRight: "none",
            borderBottom: "none",
            top: "1px",
            left: "1px"
        })
        $('.provision_list').not($(this)).css({
            background: "#ededed",
            borderLeft: "1px solid #949494",
            borderTop: "1px solid #949494",
            borderRight: "1px solid #949494",
            borderBottom: "1px solid #949494",
            top: "0",
            left: "0"
        })
    })
});