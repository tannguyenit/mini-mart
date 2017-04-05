 //responsive menu
 $("#menu-toggle, .body_overlay").click(function(e) {
    e.preventDefault();
    var $show_menu = $('#menu_xs, #menu-toggle, .body_overlay');
    $show_menu.toggleClass("toggled");
});
 $('#menu_xs ul a span').click(function(e) {
    e.preventDefault();
    $(this).parent().next().toggle(200);
    if ($(this).text() == '+') $(this).text('-');
    else $(this).text('+');
})

 $(window).load(function() {
    $(this).scroll(function() {
        if ($(window).scrollTop() >= 100) {
            $("#header").addClass("sticky-header");
        } else {
            $("#header").removeClass("sticky-header");
        }
    });
    var pathname = window.location.pathname;
    if (pathname == '/') {
        $(this).scroll(function() {
            var height = $(window).scrollTop();
            if (height >= 400) {
                $('.scroll_menu').addClass('visible');
                $("#gotoTop").css("display","block");
            } else {
                $('.scroll_menu').removeClass('visible');
                $("#gotoTop").css("display","none");
            }
        });
        //$(document).ready(function() {
            if ($(window).width() > 991) {
                $('.left_menu #collapse1').addClass('in');
            }
        //});
$('#collapse1').addClass('index_page')
    } else {
        if ($(window).width() > 991) {
            $(this).scroll(function() {
                var height = $(window).scrollTop();
                if (height >= 200) {
                    $('.left_menu').addClass('left_menu_sticker');
                    $('.left_menu #collapse1').addClass('in');
                    $('.left_menu .submenu').addClass('hidden');
                    $("#header").addClass("sticky-header");
                    $("#gotoTop").css("display","block");
                } else {
                    $('.left_menu').removeClass('left_menu_sticker');
                    $('.left_menu #collapse1').removeClass('in');
                    $('.left_menu .submenu').removeClass('hidden');
                    $("#gotoTop").css("display","none");
                }
            });
        }
    }
});