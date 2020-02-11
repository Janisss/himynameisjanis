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
            <h1 data-av-animation="fadeInLeft" class="aniview">Video a fotoslužby za priateľské ceny</h1>
        </div>
        <div class="container pt-5 pb-5">
            <div data-av-animation="fadeIn" class="video-container aniview">
                <iframe src="https://www.youtube.com/embed/YgGA-Cb2hPk" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%;height: 100%">
                </iframe>
            </div>
        </div>
        <div class="container pt-5 pb-5">
            <div data-av-animation="fadeIn" class="video-container aniview">
                <iframe src="https://www.youtube.com/embed/DMRzkQWn1u8" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%;height: 100%">
                </iframe>
            </div>
        </div>
    </main>


    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>


    <script>
        $('.aniview').AniView();
    </script>
</body>

</html>