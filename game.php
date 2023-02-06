<?php
    $gameData = json_decode(file_get_contents("gameData.json"), true)[$_GET["id"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $gameData["name"] ?></title>
</head>
<body>
    <div>
        <img src="img/<?php echo $_GET["id"] ?>/cover.png" alt="cover">
    </div>
</body>
</html>