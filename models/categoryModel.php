<?php

class Category{

    private $connection;

    public function __construct(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=spotify;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //la méthode qui retourne toutes les catégories
    public function getAllCategories(){
        $stmt = $this->connection->prepare("SELECT * FROM categories;");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}