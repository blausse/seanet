$(document).ready(function () {
    /**실시간 인기 순위 슬라이드 */
    //첫번째 li를 끝으로 복사

    var list1 = $('.popular_list li').eq(0).clone();
    $(".popular_list").append(list1);

    var a = -1;
    function up() {
        a++;
        if (a < 10) {
            $('.popular_list').css({ transition: "all 0.5s" })
            $('.popular_list').css('marginTop', -20 * a + 'px')
        }
        else {
            $('.popular_list').css({ transition: "all 0.5s" })
            $('.popular_list').css('marginTop', -20 * a + 'px')
            setTimeout(function () {
                $('.popular_list').css({ transition: "" })
                a = 0
                $('.popular_list').css('marginTop', 0 + 'px')
            }, 500)
        }
    }
    /**timer 호이스팅 */
    let ranktimer
    function rankup() {
        up();
        /**timer 할당 >> 이중 setTimeout */
        ranktimer = setTimeout(rankup, 5000)
    }
    /*rankup()실행*/
    rankup()
})