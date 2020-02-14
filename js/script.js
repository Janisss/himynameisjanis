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
        // options...
        itemSelector: '.grid-item',
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress(function () {
        $grid.masonry('layout');
    });
});