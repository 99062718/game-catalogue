<?php
    $gameData = json_decode(file_get_contents("gameData.json"), true)[$_GET["id"]];
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
    <div id="contentDiv">
        <img src="img/<?php echo $_GET["id"] ?>/cover.png" alt="cover">
        <p>
            Description: <?php echo $gameData["description"] ?><br>
            Genre(s): <?php echo $gameData["genre"] ?><br>
            # of players: <?php echo $gameData["multi"] ?><br>
            Developer: <?php echo $gameData["developer"] ?><br>
            Publisher: <?php echo $gameData["publisher"] ?><br>
            Date of release: <?php echo $gameData["date"] ?>
        </p>
    </div>
</body>
</html>