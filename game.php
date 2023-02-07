<?php
    $gameData = json_decode(file_get_contents("gameData.json"), true)[$_GET["id"]];
    $path = 'img/$_GET["id"]/carousel';
    $carouselImgs = scandir($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div id="contentDiv">
        <img src="img/<?php echo $_GET["id"] ?>/cover.png" alt="cover">
        <div id="score">
            <h1><?php echo $gameData["score"] ?></h1>
        </div>
        <p>
            Description: <?php echo $gameData["description"] ?><br>
            Genre(s): <?php echo $gameData["genre"] ?><br>
            # of players: <?php echo $gameData["multi"] ?><br>
            Developer: <?php echo $gameData["developer"] ?><br>
            Publisher: <?php echo $gameData["publisher"] ?><br>
            Date of release: <?php echo $gameData["date"] ?>
        </p>
    </div>

    <hr>

    <div class="carousel">
        <?php foreach($carouselImgs as $currentImg){ ?>
            <div class="slide">
                <img src="img/<?php echo $_GET['id'] + '/' + $currentImg ?> alt="">
            </div>
        <?php } ?>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <script>
        score = <?php echo $gameData["score"] ?>;
        scoreDiv = document.getElementById("score");

        if(score < 50){
            scoreDiv.style.backgroundColor = "red";
        } else if(score < 80){
            scoreDiv.style.backgroundColor = "orange";
        }
    </script>
</body>
</html>