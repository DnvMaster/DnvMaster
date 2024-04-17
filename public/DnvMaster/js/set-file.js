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
    /*---Top Articles carousel ---*/
    $('#articles-services').owlCarousel({
        loop: false,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                margin: 30,
            },
            600: {
                items: 2,
                margin: 30,
            },
            1000: {
                items: 3,
                margin: 30,
            }
        }
    });
    /*--- Partners carousel ---*/
    $('#our-partners').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsiveClass: true,
        // margin: 100,
        responsive: {
            0: {
                items: 2,
                margin: 15,
            },
            600: {
                items: 3,
                margin: 15,
            },
            1000: {
                items: 5,
                margin: 15,
            }
        }
    });
    /*--- Count up ---*/
    $('.countup').counterUp({
        delay: 5,
        time: 2000
    });
    /*--- Hover Drop Down ---*/
    if ($(window).width() > 992) {
        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
        });
    }
    /*--- Tabs ---*/
    $('.tabs_animate').tabslet({
        mouseevent: 'click',
        attribute: 'href',
        animation: true
    });
    /*--- WOW ---*/
    new WOW().init();
});



