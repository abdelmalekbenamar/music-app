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


    <main class="containerPlaylistCards">

    <?php foreach($playlists as $playlist){ ?>
        
        <div class="playlistCard">
            <div class="playlistImage">
                <img src="./assets/images/music-thumbnail.jpg" alt="">
            </div>
            <h3 class="playlistTitle"><a href="./index.php?action=displayPlaylist&id=<?php echo $playlist["id"]; ?>"><?php echo $playlist["name"]; ?></a></h3>
        </div>
    
    <?php } ?>

        <div class="songCard">
            <div class="songImage">
                <img src="./assets/images/music-thumbnail.jpg" alt="">
            </div>
            <h3 class="songTitle">Title de chanson</h3>
        </div>

        <div class="songCard">
            <div class="songImage">
                <img src="./assets/images/music-thumbnail.jpg" alt="">
            </div>
            <h3 class="songTitle">Title de chanson</h3>
        </div>

        <div class="songCard">
            <div class="songImage">
                <img src="./assets/images/music-thumbnail.jpg" alt="">
            </div>
            <h3 class="songTitle">Title de chanson</h3>
        </div>

        <div class="songCard">
            <div class="songImage">
                <img src="./assets/images/music-thumbnail.jpg" alt="">
            </div>
            <h3 class="songTitle">Title de chanson</h3>
        </div>

    </main>


    <script src="./assets/js/menuScript.js"></script>
</body>
</html>