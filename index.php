<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>himynameisjanis.com</title>

    <!-- METADATA -->
    <?php include "components/metadata.php" ?>

    <!-- LINKS -->
    <?php include "components/links.php" ?>

</head>

<body>

    <div id="dimmer">
        <span style="font-family: 'smooth';color: rgb(32, 32, 32);">loading...</span>
    </div>

    <div class="pt-3 pl-3 pr-3 pt-md-5 pl-md-5 pr-md-5">
        <div data-av-animation="zoomIn" class="aniview introimage">
            <div class="namecenter">
                <img src="img/himynameisjanis.svg" alt="himynameisjanis" class="w-100">
            </div>
            <div class="overlay"></div>
        </div>
    </div>

    <main class="pt-5">

        <div class="container p-5">

            <h1>video</h1>

            <span class="subtitle">
                Natáčanie reklamných spotov, hudobných klipov, produktových videí a podobne. Tvorba videí ma baví zo
                všetkého najviac. Pozrite si videá ktoré som natáčal a strihal, alebo minimálne
                sa podielal na ich výrobe.
            </span>
        </div>

        <div class="container aniview" data-av-animation="fadeIn">
            <div class="video-slider">
                <div>
                    <a href="https://youtu.be/aXS94zHrRhs" target="_blank">
                        <img src="img/video/thumb_okhamoro.jpg" alt="Video" class="video-thumbs">
                    </a>
                </div>
                <div>
                    <a href="https://youtu.be/YgGA-Cb2hPk" target="_blank">
                        <img src="img/video/thumb_vwzraz.jpg" alt="Video" class="video-thumbs">
                    </a>
                </div>
                <div>
                    <a href="https://youtu.be/DMRzkQWn1u8" target="_blank">
                        <img src="img/video/thumb_splitboard.jpg" alt="Video" class="video-thumbs">
                    </a>
                </div>
                <div>
                    <a href="https://youtu.be/1Gi2k3cPBrA" target="_blank">
                        <img src="img/video/thumb_andrejcova.jpg" alt="Video" class="video-thumbs">
                    </a>
                </div>
                <div>
                    <a href="https://youtu.be/EJ9BBC72liw" target="_blank">
                        <img src="img/video/thumb_freshisland.jpg" alt="Video" class="video-thumbs">
                    </a>
                </div>
                <div>
                    <a href="https://youtu.be/CmoD1rlGtsU" target="_blank">
                        <img src="img/video/thumb_rbfriend.jpg" alt="Video" class="video-thumbs">
                    </a>
                </div>
            </div>
        </div>

        <div class="container p-5">
            <h1>foto</h1>
            <span class="subtitle">
                Príroda, produkty, ľudia alebo služby. K videu patrí neodlúčíteľne aj fotka. Fotenie je pre mňa strašne
                zaujímavá a zábavná vec ktorá dokáže
                uschovať moment naveky.
            </span>
        </div>

        <div class="container-fluid">
            <div class="grid">
                <div class="grid-sizer"></div>
                <img alt="image" class="grid-item lazy" data-src="img/gallery/1.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/2.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/3.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/4.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/5.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/6.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/7.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/8.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/9.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/10.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/11.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/12.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/13.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/14.jpg">
                <img alt="image" class="grid-item grid-item--width2 lazy" data-src="img/gallery/15.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/16.jpg">
                <img alt="image" class="grid-item lazy" data-src="img/gallery/17.jpg">
            </div>
        </div>
    </main>


    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>

    <div class="container">
        <p class="text-center"><a href="mailto:info@himynameisjanis.com">info@himynameisjanis.com</a></p>
        <p class="text-center"><a href="tel:+421902119544">0902 119 544</a></p>
    </div>


    <script src="node_modules/slick-carousel/slick/slick.min.js"></script>
    <script>
        $('.aniview').AniView();

        $('.video-slider').slick({
            dots: true,
            speed: 500,
            centerMode: true,
            slidesToShow: 1,
        });

        $(function () {
            $('.lazy').Lazy();
        });
    </script>
</body>

</html>