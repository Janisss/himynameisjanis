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
            <h1 data-av-animation="fadeInLeft" class="aniview">Video</h1>
            <span data-av-animation="fadeInRight" class="subtitle aniview">
                Tvorba videí ma baví zo všetkého najviac. Pozrite si videá ktoré som natáčal a strihal, alebo minimálne sa podielal na ich výrobe.
            </span>
        </div>

        <div class="container-fluid">
        <div class="video-slider">
            <div>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/aXS94zHrRhs" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/EJ9BBC72liw" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/YgGA-Cb2hPk" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/DMRzkQWn1u8" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            </div>
            <div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/1Gi2k3cPBrA" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            </div>
            <div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/CmoD1rlGtsU" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            </div>
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
            slidesToShow: 3,
            centerPadding: '60px',
        });
    </script>
</body>

</html>