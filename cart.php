<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/cart.css">
    <title>Winkelwagen</title>
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
        <div id="wagentjeContent">
            <?php foreach ($_SESSION["wagentje"] as $currentItem){ ?>
                <div>
                    <p></p>
                    <p></p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>