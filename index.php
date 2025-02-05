<?php

session_start();



require_once("./controlers/homePageControler.php");
require_once("./controlers/signUpControler.php");
require_once("./controlers/signInControler.php");
require_once("./controlers/bloquedUserControler.php");
require_once("./controlers/addSongControler.php");


if(isset($_GET["action"])){
    
    if($_GET["action"] == "signUpForm"){

        signUpForm();

    }else if($_GET["action"] == "signInForm"){

        signInForm();

    }else if($_GET["action"] == "signUpFormSubmit"){

        require_once("./models/userModel.php");
        $user = new User();

        if($_POST["signUpTypeAccount"] == "user"){

            $user->userSignUp($_POST["usernameSignUp"], $_POST["emailSignUp"], $_POST["passwordSignUp"]);

        }else if($_POST["signUpTypeAccount"] == "artist"){

            $user->artistSignUp($_POST["usernameSignUp"], $_POST["emailSignUp"], $_POST["passwordSignUp"]);

        }
        signInForm();
        
    }else if($_GET["action"] == "signInFormSubmit"){
        require_once("./models/userModel.php");
        $userObj = new User();
        $user = $userObj->authentification($_POST["emailSignIn"], $_POST["passwordSignIn"]);
        if(!empty($user)){

            $_SESSION["userId"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["userStatus"] = $user["status"];
            $_SESSION["userRule"] = $user["idRule"];
            if($user["status"] == 0){
                $userObj->logOut();
                bloquedUser();
            }else{

                header("Location: ./index.php");
            }
        }else{
            signInForm();
        }
    }else if($_GET["action"] == "logOut"){

        require_once("./models/userModel.php");
        $user = new User();
        $user->logOut();
        homePage();

    }else if($_GET["action"] == "addSongForm"){

        displayAddSongForm();

    }else if($_GET["action"] == "addSongFormSubmit"){
        require_once("./controlers/addSongFormSubmitControler.php");
    }

}else{
    homePage();
    
}