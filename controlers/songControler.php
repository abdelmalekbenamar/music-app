<?php


function showSong($id){
    require_once("./models/songModel.php");
    
    $songObj = new Song();
    $song = $songObj->getSong($id);
    
    require_once("./views/songView.php");

}