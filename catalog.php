<?php
    $gameData = json_decode(file_get_contents("gameData.json"), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <?php for($x = 0; $x < sizeof($gameData); $x++){ ?>
            <div class="gameData">
                <img src="img/<?php echo $x?>/logo.png" alt="logo">
            </div>
        <?php } ?>
    </div>
</body>
</html>