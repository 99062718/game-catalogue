<?php
    $gameData = json_decode(file_get_contents("gameData.json"), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/catalog.css">
    <title>Catalog</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="catalog.php">Catalog</a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
    </header>

    <div id="catalogDiv">
        <h1>CATALOG</h1>
        <?php for($x = 0; $x < sizeof($gameData); $x++){
            echo '<a href="game.php?id='.$x.'" id="'.$x.'"><img class="gameCover" src="img/'.$x.'/cover.png" alt="cover"></a>';
        } ?>
    </div>
</body>
</html>