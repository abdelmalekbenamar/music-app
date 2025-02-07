<?php

require_once("./models/songModel.php");

function homePage(){

    $songObj = new Song();
    $songs = $songObj->getAllSongs();

    require_once("./views/homePageView.php");

}