<?php


function displayAddPlaylistForm(){
    
    require_once("./models/songModel.php");
    
    $songObj = new Song();
    $songs = $songObj->getAllSongs();
    
    require_once("./views/addPlaylistView.php");

}