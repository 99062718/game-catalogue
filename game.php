<?php
    $gameData = json_decode(file_get_contents("gameData.json"), true)[$_GET["id"]];
    $path = 'img/'.$_GET["id"].'/carousel';
    $carouselImgs = array_slice(scandir($path),2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/game.css">
    <title><?php echo $gameData["name"] ?></title>
</head>
<body>
    <header>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
    </header>
    
    <div id="mainDiv">
        <div class="sideDiv"></div>

        <div id="contentDiv" class="addBorder">
            <div id="textDiv" class="addBorder">
                <h1><?php echo $gameData["name"] ?></h1>
                <p>
                    Description: <?php echo $gameData["description"] ?><br><br>
                    Genre(s): <?php echo $gameData["genre"] ?><br>
                </p>
            </div>

            <div class="addBorder">
                <div id="score">
                    <h1><?php echo $gameData["score"] ?></h1>
                </div>
                <p>
                    # of players: <?php echo $gameData["multi"] ?><br>
                    Developer: <?php echo $gameData["developer"] ?><br>
                    Publisher: <?php echo $gameData["publisher"] ?><br>
                    Date of release: <?php echo $gameData["date"] ?>
                </p>
            </div>

            <div id="carousel" class="useFullColumn addBorder">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <div id="carouselImgs"></div>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>

        <div class="sideDiv"></div>
    </div>

    <script>
        gameId = <?php echo $_GET["id"] ?>;
        imgList = <?php echo json_encode($carouselImgs) ?>;
        score = <?php echo $gameData["score"] ?>;
    </script>
    <script type="text/javascript" src="scripts/gamePage.js"></script>
    <script type="text/javascript" src="scripts/carousel.js"></script>
</body>
</html>