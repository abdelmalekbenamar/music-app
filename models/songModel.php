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
}