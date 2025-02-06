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


    <form class="addPlaylistForm" action="./index.php?action=addPlaylistFormSubmit" method="POST">


        <label for="playlistName">
            Nom playlist : <br>
            <input required type="text" name="playlistName" id="playlistName">
        </label>

        
        <br><br>

        <div class="songContainer">
            <?php foreach($songs as $song){ ?>

            <label for="chanson<?php echo $song["id"]; ?>">
                <input type="checkbox" id="chanson<?php echo $song["id"]; ?>" name="<?php echo $song["id"]; ?>">
                <?php echo $song["name"]; ?> <br>
            </label>

            <?php } ?>
            
            
        </div>
        <br>

        
        <button type="submit">Ajouter</button>



    </form>
    


    <script src="./assets/js/menuScript.js"></script>
</body>
</html>