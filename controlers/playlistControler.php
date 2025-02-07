<?php

require_once("./models/playlistModel.php");

function displayAllPlaylists(){
    $playlistObj = new Playlist();
    $playlists = $playlistObj->getAllPlaylists();

    require_once("./views/playlistsView.php");
}