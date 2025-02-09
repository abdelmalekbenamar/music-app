<?php


function deleteSong($id){
    
    require_once("./models/songModel.php");
    $song = new Song();
    $song->deleteSong($id);
    header("Location: ./index.php?action=parametresMusic");

}