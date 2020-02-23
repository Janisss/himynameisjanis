$(function () {
    $(document).smartLoader({
        theControl: 'document',
        howManySeconds: 600,
        lengthOfLoop: 200,
        callback: function () {
            $('#dimmer').fadeOut(1000);
            // make grid now
            var $grid = $('.grid').masonry({
                itemSelector: '.grid-item',
            });
            $grid.imagesLoaded().progress( function() {
                $grid.masonry('layout');
            });
        },
        errorCallback: function () {
            $('#dimmer').fadeOut(1000);
            console.log('missing images');
        }
    });
});

$(document).ready(function () {
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        var top = 80 - (scroll * 0.1);
        $('.namecenter').css({
            'top': +top + '%'
        });
    });
});