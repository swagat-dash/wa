function layoutDesktop(){
    $('body').removeClass();
    $(document).on({
        mouseenter: function () {
            $('body').removeClass();
        },
        mouseleave: function () {
            $('body').removeClass();
        }
    }, '.sidebar');
}

function layoutMobile(){
    $('.whatsapp').on('click', '.wa-reset-scrolll, .wa-open-content', function(evt) {
        setTimeout(function(){
            $(".nicescroll, .wa-scroll").getNiceScroll().remove();
        }, 1000);
    });
    $(".nicescroll, .wa-scroll").getNiceScroll().remove();
    $('.customscroll').mCustomScrollbar('destroy');
    $(".sidebar .logo > a").prependTo(".topbar");
}

$(function() {
    if($(window).width() > 768) {
        layoutDesktop();
    } else {
        layoutMobile();
    }
});