<?php


function editSongFormSubmit($id, $name, $category){
    require_once("./models/songModel.php");
    
    $song = new Song();
    $song->updateSong($id, $name, $category);
    header("Location: ./index.php?action=parametresMusic");

}