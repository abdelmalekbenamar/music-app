<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>


    <?php require_once("./src/menu.php"); ?>


    <main class="containerSong">

    <div class="imgSong">
        <img src="./assets/images/music-thumbnail.jpg" alt="">
    </div>
    <h3><?php echo $song["name"]; ?></h3>
    <div class="songPlay">
        <audio src="./music/<?php echo $song["file"] ?>" controls></audio>
    </div>



    </main>


    <script src="./assets/js/menuScript.js"></script>
</body>
</html>