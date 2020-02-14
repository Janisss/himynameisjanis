$(document).ready(function () {
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        var top = 80 - (scroll * 0.1);
        $('.namecenter').css({
            'top': +top + '%'
        });
    });
    // init Masonry
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
    });

});