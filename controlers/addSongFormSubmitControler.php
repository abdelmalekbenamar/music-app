<?php


function ajouterChanson($name, $idCategory, $idUser){
    require_once("./models/songModel.php");
    $songFileName = date("YmdHis");
    $fileSongInfo = pathinfo($_FILES["songFile"]["name"]);
    $songFileName .= "." . $fileSongInfo["extension"];
    move_uploaded_file($_FILES["songFile"]["tmp_name"], "./music/" . $songFileName);
    $song = new Song();
    $song->addSong($name, $songFileName, $idCategory, $idUser);
    header("Location: ./index.php");

}