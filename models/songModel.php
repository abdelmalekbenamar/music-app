<?php

class Song{
    
    private $connection;

    public function __construct(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=spotify;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //la méthode qui permet de ajouter une chanson
    public function addSong($name, $file, $idCategory, $idUser){
        $stmt = $this->connection->prepare("INSERT INTO chansons (name, file, idUser, idCategory) VALUES (:name, :file, :idUser, :idCategory);");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":file", $file);
        $stmt->bindParam(":idCategory", $idCategory);
        $stmt->bindParam(":idUser", $idUser);
        $stmt->execute();
    }

    //la méthode qui permet de retourner toutes les chansons
    public function getAllSongs(){
        $stmt = $this->connection->prepare("SELECT * FROM chansons;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //la méthode qui permet de retourner une chanson
    public function getSong($id){
        $stmt = $this->connection->prepare("SELECT * FROM chansons WHERE id = :id;");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //la méthode qui permet de retourner toutes les chansons d'un utilisateur donnée
    public function getArtisteSongs($id){
        $stmt = $this->connection->prepare("SELECT * FROM chansons WHERE idUser = :id;");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    //la méthode qui permet de supprimer une chanson d'un utilisateur
    public function deleteSong($id){
        $stmt = $this->connection->prepare("DELETE FROM chansons WHERE id = :id;");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    //la méthode qui permet de modifier le titre et la catégorie d'une chanson
    public function updateSong($id, $name, $category){
        $stmt = $this->connection->prepare("UPDATE chansons SET name = :name, idCategory = :category WHERE id = :id;");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

    }


}