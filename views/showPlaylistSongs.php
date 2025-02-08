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


    <main class="containerSongCards">
        
    <?php foreach($songs as $song){ ?>
        <div class="songCard">
            <div class="songImage">
                <img src="./assets/images/music-thumbnail.jpg" alt="">
            </div>
            <h3 class="songTitle"><?php echo $song["songName"]; ?></h3>
            <audio src="./music/<?php echo $song["file"] ?>" controls></audio>
        </div>
    <?php } ?>


    </main>


    <script src="./assets/js/menuScript.js"></script>
</body>
</html>