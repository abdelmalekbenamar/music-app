<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>

    <?php require_once("./src/menu.php"); ?>

    <form class="signInForm" action="./index.php?action=signInFormSubmit" method="POST">


        <label for="email">
            Email : <br>
            <input required type="email" name="emailSignIn" id="email">
        </label>

        <label for="password">
            Mot de passe : <br>
            <input required type="password" name="passwordSignIn" id="password">
        </label>

        <button type="submit">Se connecter</button>



    </form>
    

    <script src="./assets/js/menuScript.js"></script>
</body>
</html>