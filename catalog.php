<?php
    $genres = ["Adventure", "Action", "Shooter", "Fantasy", "Role-playing", "Stratergy"];
    $gameData = json_decode(file_get_contents("gameData.json"), true);
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/catalog.css">
    <link rel="stylesheet" href="style/dropdown.css">
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

    <div>
        <button id="dropdown">Genre dropdown</button>
        <div id="dropdownContent">
            <?php foreach ($genres as $genre) {
                echo "<input type='checkbox' id='check$genre' name='$genre'>";
                echo "<label for='$genre'>$genre</label><br>";
            } ?>
        </div>
        <button id="price">Prijs input field</button>
        <button>Ok knop</button>
    </div>

    <div id="catalogDiv">
        <h1>CATALOG</h1>
        <?php for($x = 0; $x < sizeof($gameData); $x++){
            echo '<a href="game.php?id='.$x.'" class="games"><img class="gameCover" src="img/'.$x.'/cover.png" alt="cover"></a>';
        } ?>
    </div>

    <script src="scripts/catalog.js"></script>
</body>
</html>