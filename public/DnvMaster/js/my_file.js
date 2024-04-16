$(document). ready(function (){
    /*--- Preloader ---*/
    $('#preloader').fadeOut('normal', function (){
        $(this).remove();
    });
    /*--- Scroll to top ---*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".scroll-to-top").fadeIn(400);
        } else {
            $(".scroll-to-top").fadeOut(400);
        }
    });
    $(".scroll-to-top").on('click', function (event) {
        event.preventDefault();
        $("html, body").animate({scrollTop: 0}, 600);
    });
});



