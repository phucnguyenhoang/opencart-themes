$(function() {
    $("#main_carousel").owlCarousel({
        items: 1,
        autoPlay: 5000,
        navigation: false,
        navigationText: ['<span class="glyphicon glyphicon-chevron-left"></span>', '<span class="glyphicon glyphicon-chevron-right"></span>'],
        pagination: true,
        beforeMove: function() {

        },
        afterMove: function(e) {
            console.log($(e).attr('class'));
        }
    });

    $(window).resize(function() {
        var menuBg = $('#menu_bg');
        if (menuBg.width() == 0) {
            $('#top_menu').find('.menu-item').removeAttr('style');
            menuBg.fadeOut();
            $('.pan-menu').css('right', '-280px');
            $('.btn-show-sub-menu').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        }
    });

    $('.btn-show-menu').click(function() {
        $('#menu_bg').fadeIn();
        $('.pan-menu').animate({
            right: '0px'
        }, 300);
    });
    $('#menu_bg').click(function() {
        $(this).fadeOut();
        $('.pan-menu').animate({
            right: '-280px'
        }, 200);
    });
    $('.btn-show-sub-menu').click(function(e) {
        e.stopPropagation();
        var btn = $(this),
            menuItem = btn.closest('.menu-item');

        if (btn.hasClass('glyphicon-chevron-down')) {
            btn.removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            menuItem.css({
                overflow: 'visible',
                height: 'auto'
            });
        } else {
            btn.removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            menuItem.css({
                overflow: 'hidden',
                height: '36px'
            });
        }
    });
});