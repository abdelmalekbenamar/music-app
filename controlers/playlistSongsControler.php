<?php


function getSongsOfPlaylist($id){
    
    require_once("./models/playlistModel.php");
    
    $playlist = new Playlist();
    $songs = $playlist->getSongsOfPlaylist($id);

    require_once("./views/showPlaylistSongs.php");
}
