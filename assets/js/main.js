(function($) {
    "use strict"

    /* 1. Proloder */
    $(window).on('load', function() {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });

    /* 2. sticky And Scroll UP */
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $(".header-sticky").removeClass("sticky-bar");
            $('#back-top').fadeOut(600);
        } else {
            $(".header-sticky").addClass("sticky-bar");
            $('#back-top').fadeIn(800);
        }
    });

    // 3. Scroll Up
    $('#back-top a').on("click", function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    /* 4. data-background*/
    $("[data-background]").each(function() {
        $(this).css("background", "url(" + $(this).attr("data-background") + ")" + "0 / cover no-repeat")
    });

    // Modal Activation
    $('.search-switch').on('click', function() {
        $('.search-model-box').fadeIn(400);
    });

    $('.search-close-btn').on('click', function() {
        $('.search-model-box').fadeOut(400, function() {
            $('#search-input').val('');
        });
    });

})(jQuery);