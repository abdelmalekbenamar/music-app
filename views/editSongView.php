<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/ParametresStyle.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

    <?php require_once("./src/menu.php"); ?>


    <main class="flex justify-between">
        <div class="menuDashboard w-[80px] md:w-[100px] h-[500px] bg-[brown] text-center flex flex-col justify-around text-xs rounded-[10px] md:mt-[50px]">
            <?php include_once("./src/dashboard.php"); ?>
        </div>

        <div class="partieDroite w-[calc(100vw_-_80px)] mt-[55px] p-[10px] overflow-y-auto h-[70vh]">
            

            <form class="addSongForm" action="./index.php?action=editSongFormSubmit&id=<?php echo $_GET["id"]; ?>" method="POST">


                <label for="songName">
                    Nom chanson : <br>
                    <input required type="text" name="songName" id="songName" value="<?php echo $_GET["name"]; ?>">
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
                        

                        
                <button type="submit">Enregistrer</button>
                        


            </form>

        </div>
    </main>
    
</body>
</html>