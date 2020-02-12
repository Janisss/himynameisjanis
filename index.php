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
                Tvorba videí ma baví zo všetkého najviac. Pozrite si videá ktoré som natáčal a strihal, alebo minimálne
                sa podielal na ich výrobe.
            </span>
        </div>

        <div class="container aniview" data-av-animation="fadeIn">
            <div class="video-slider">
                <div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/aXS94zHrRhs" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/EJ9BBC72liw" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/YgGA-Cb2hPk" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/DMRzkQWn1u8" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/1Gi2k3cPBrA" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/CmoD1rlGtsU" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-5">
            <h1>foto</h1>
            <span class="subtitle">
                K videu patrí neodlúčíteľne aj fotka. Fotenie je pre mňa strašne zaujímavá a zábavná vec ktorá dokáže
                uschovať moment naveky.
            </span>
        </div>

        <div class="container-fluid">
            <div class="grid">
            <div class="grid-sizer"></div>
                <img src="img/gallery/1.jpg" alt="image" class="grid-item">
                <img src="img/gallery/2.jpg" alt="image" class="grid-item">
                <img src="img/gallery/3.jpg" alt="image" class="grid-item">
                <img src="img/gallery/4.jpg" alt="image" class="grid-item">
                <img src="img/gallery/5.jpg" alt="image" class="grid-item">
                <img src="img/gallery/6.jpg" alt="image" class="grid-item">
                <img src="img/gallery/7.jpg" alt="image" class="grid-item">
                <img src="img/gallery/8.jpg" alt="image" class="grid-item">
                <img src="img/gallery/9.jpg" alt="image" class="grid-item">
                <img src="img/gallery/10.jpg" alt="image" class="grid-item">
                <img src="img/gallery/11.jpg" alt="image" class="grid-item">
                <img src="img/gallery/12.jpg" alt="image" class="grid-item">
                <img src="img/gallery/13.jpg" alt="image" class="grid-item">
                <img src="img/gallery/14.jpg" alt="image" class="grid-item">
                <img src="img/gallery/15.jpg" alt="image" class="grid-item grid-item--width2">
                <img src="img/gallery/16.jpg" alt="image" class="grid-item">
                <img src="img/gallery/17.jpg" alt="image" class="grid-item">
            </div>
        </div>
    </main>


    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>


    <script src="node_modules/slick-carousel/slick/slick.min.js"></script>
    <script>
        $('.aniview').AniView();

        $('.video-slider').slick({
            dots: true,
            speed: 500,
            centerMode: true,
            slidesToShow: 1,
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
    </script>
</body>

</html>