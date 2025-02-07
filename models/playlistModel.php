<?php

class Playlist{
    
    private $connection;

    public function __construct(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=spotify;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //la méthode qui permet de creer une nouvelle playlist et retourne le id de la derniere playlist creée
    public function createPlaylist($name, $idUser){
        $stmt = $this->connection->prepare("INSERT INTO playlists (name, idUser) VALUES (:name, :idUser);");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":idUser", $idUser);
        $stmt->execute();
        $result = $this->connection->lastInsertId();
        return $result;
    }

    //la méthode qui permet de ajouter une chanson dans une playlist
    public function addSongToPlaylist($idChanson, $idPlaylist){
        $stmt = $this->connection->prepare("INSERT INTO chansonsPlaylists (idChanson, idPlaylist) VALUES (:idChanson, :idPlaylist);");
        $stmt->bindParam(":idChanson", $idChanson);
        $stmt->bindParam(":idPlaylist", $idPlaylist);
        $stmt->execute();

    }

    //la méthode qui permet de retourner tous les playlists
    public function getAllPlaylists(){
        $stmt = $this->connection->prepare("SELECT * FROM playlists;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}