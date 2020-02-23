$(document).ready(function () {
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        var top = 80 - (scroll * 0.1);
        $('.namecenter').css({
            'top': +top + '%'
        });
    });
    $('#dimmer').delay(2000).fadeOut(1000);
    // make grid now
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
    });
    $grid.imagesLoaded().progress(function () {
        $grid.masonry('layout');
    });
});