<?php

require_once("./models/playlistModel.php");


function createPlaylist($nomPlaylist, $idUser){
    $playlist = new Playlist();
    $id = $playlist->createPlaylist($nomPlaylist, $idUser);
    return $id;

}

function addSongToPlaylist($idChanson, $idPlaylist){
    $playlist = new Playlist();
    $playlist->addSongToPlaylist($idChanson, $idPlaylist);

}