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
            
        
        <table class="w-full border-spacing-0">
                <thead class="bg-[coral] font-[bolder]">
                    <td class="border p-2.5 border-solid border-[black]">Morceaux</td>
                    <td class="border p-2.5 border-solid border-[black]">Action</td>
                </thead>

                <?php foreach($songs as $song){ ?>
                <tr>
                    <td class="border p-2.5 border-solid border-[black]"><?php echo $song["name"]; ?></td>
                    
                    <td class="border p-2.5 border-solid border-[black] flex">
                        <form action="./index.php?action=editSong&id=<?php echo $song["id"]; ?>&name=<?php echo $song["name"]; ?>" method="POST">

                            <button class="editerCategorie bg-[green] text-[white] p-[5px] rounded-[5px] m-[5px]">Editer</button>
                        </form>

                        <form action="./index.php?action=deleteSong&id=<?php echo $song["id"]; ?>" method="POST">

                            <button class="supprimerCategorie bg-[red] text-[white] m-[5px] p-[5px] rounded-[5px]">Supprimer</button>
                        </form>
                    </td>
                </tr>

                <?php } ?>

                


            </table>

        </div>
    </main>
    
</body>
</html>