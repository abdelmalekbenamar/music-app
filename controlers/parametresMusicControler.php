<?php

require_once("./models/songModel.php");

function displaySongsForParametresPageArtiste($id){
    
    $songObj = new Song();
    $songs = $songObj->getArtisteSongs($id);
    
    require_once("./views/parametresMusicView.php");

}

function displaySongsForParametresPageAdmin(){
    $songObj = new Song();
    $songs = $songObj->getAllSongs();

    require_once("./views/parametresMusicView.php");
    
}