<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Document</title>
</head>
<body>

    <?php require_once("./src/menu.php"); ?>

    <form class="signUpForm" action="./index.php?action=signUpFormSubmit" method="POST">
        <label for="typeAccount">
            Type de compte :
            <select name="signUpTypeAccount" id="typeAccount">
                <option value="user">Utilisateur</option>
                <option value="artist">Artiste</option>
            </select>
            
        </label>
        <br>

        <label for="username">
            Username : <br>
            <input required type="text" name="usernameSignUp" id="username">
        </label>

        <label for="email">
            Email : <br>
            <input required type="email" name="emailSignUp" id="email">
        </label>

        <label for="password">
            Mot de passe : <br>
            <input required type="password" name="passwordSignUp" id="password">
        </label>

        <button type="submit">S'inscrire</button>



    </form>
    

    <script src="./assets/js/menuScript.js"></script>
</body>
</html>