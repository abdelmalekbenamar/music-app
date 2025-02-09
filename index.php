<?php

session_start();



require_once("./controlers/homePageControler.php");
require_once("./controlers/signUpControler.php");
require_once("./controlers/signInControler.php");
require_once("./controlers/bloquedUserControler.php");
require_once("./controlers/addSongControler.php");
require_once("./controlers/addSongFormSubmitControler.php");
require_once("./controlers/addPlaylistControler.php");
require_once("./controlers/addPlaylistFormSubmitControler.php");
require_once("./controlers/playlistControler.php");
require_once("./controlers/songControler.php");
require_once("./controlers/PlaylistSongsControler.php");
require_once("./controlers/parametresControler.php");
require_once("./controlers/parametresMusicControler.php");
require_once("./controlers/deleteSongControler.php");
require_once("./controlers/editSongControler.php");
require_once("./controlers/editSongFormSubmitControler.php");



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

        ajouterChanson($_POST["songName"], $_POST["category"], $_SESSION["userId"]);
    
    }else if($_GET["action"] == "addPlaylistForm"){

        displayAddPlaylistForm();
    }else if($_GET["action"] == "addPlaylistFormSubmit"){

        $idPlaylist = createPlaylist($_POST["playlistName"], $_SESSION["userId"]);
        $arraykey = array_keys($_POST);
        for($i = 1; $i < count($arraykey); $i++){
            
            addSongToPlaylist($arraykey[$i], $idPlaylist);
        }
        header("Location: ./index.php");
        
    }else if($_GET["action"] == "displayAllPlaylists"){
        displayAllPlaylists();
    }else if($_GET["action"] == "displaySong"){
        showSong($_GET["id"]);
    }else if($_GET["action"] == "displayPlaylist"){
        getSongsOfPlaylist($_GET["id"]);
    }else if($_GET["action"] == "parametresMenu"){
        displayParametresPage();
    }else if($_GET["action"] == "parametresMusic"){
        if($_SESSION["userRule"] == 2) {

            displaySongsForParametresPageArtiste($_SESSION["userId"]);
        }else if($_SESSION["userRule"] == 1){
            displaySongsForParametresPageAdmin();
        }

    }else if($_GET["action"] == "deleteSong"){
        deleteSong($_GET["id"]);
    }else if($_GET["action"] == "editSong"){
        showEditSongForm();
    }else if($_GET["action"] == "editSongFormSubmit"){
        editSongFormSubmit($_GET["id"], $_POST["songName"], $_POST["category"]);
    }

}else{
    homePage();
    
}