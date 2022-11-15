$(document).ready(function () {
    var i = 1;
    /**prev 클릭 시 기능*/
    $('.prev').click(function () {
        if (i < 12 && i > 2) {
            i--;
            $('.slides').css({ transition: 'all 0.5s' })
            $('.slides').css('marginLeft', -100 * i + '%');
        } else {
            i = 1
            $('.slides').css({ transition: 'all 0.5s' })
            $('.slides').css('marginLeft', -100 * i + '%')
            setTimeout(function () {
                $('.slides').css({ transition: "" })
                i = 11
                $('.slides').css('marginLeft', -100 * i + '%')
            }, 500)
        };
    });
    /*function next() 함수 선언 */
    function next() {
        i++;
        if (i < 12) {
            $('.slides').css({ transition: 'all 0.5s' })
            $('.slides').css('marginLeft', -100 * i + '%');
        } else {
            $('.slides').css({ transition: 'all 0.5s' })
            $('.slides').css('marginLeft', -100 * i + '%');
            setTimeout(function () {
                $('.slides').css({ transition: "" })
                i = 2
                $('.slides').css('marginLeft', -100 * i + '%')
            }, 500)
        }
    };
    /*next 클릭시 function next() 호출*/
    $('.next').on("click", next)
    /**timer 호이스팅 */
    let timer
    function func() {
        next();
        /**timer 할당 >> 이중 setTimeout */
        timer = setTimeout(func, 5000)
    }
    /*func()실행*/
    func()
    /*pause, play 버튼 기능*/
    $('.pause').click(function () {
        clearTimeout(timer)
        $(this).hide()
        $('.play').show()
    });
    $('.play').click(function () {
        func()
        $(this).hide()
        $('.pause').show()
    });

})