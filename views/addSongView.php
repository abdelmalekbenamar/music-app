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


    <form class="addSongForm" action="./index.php?action=addSongFormSubmit" method="POST" enctype="multipart/form-data">


        <label for="songName">
            Nom chanson : <br>
            <input required type="text" name="songName" id="songName">
        </label>

        <label for="categories">
            Catégorie :
            <select name="category" id="categories">
                
                <?php foreach($categories as $category){ ?>
                    <option value="<?php echo $category["id"]; ?>"><?php echo $category["name"]; ?></option>
                <?php } ?>

            </select>
        </label>
        <br><br>

        <label for="chanson">
            Fichier chanson : <br>
            <input required type="file" id="chanson" name="songFile">
        </label>

        <button type="submit">Ajouter</button>



    </form>
    


    <script src="./assets/js/menuScript.js"></script>
</body>
</html>