<?php

class User{
    private $connection;

    public function __construct(){
        try{
            $this->connection = new PDO('mysql:host=localhost;dbname=spotify;charset=utf8', 'root', 'azl,kkk!');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //la méthode qui permet d'inscrire un artiste
    public function artistSignUp($username, $email, $password){
        $stmt = $this->connection->prepare("INSERT INTO users (username, email, password, idRule, status) VALUES (:username, :email, :password, 2, 1);");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

    }

    //la méthode qui permet d'inscrire un utilisateur
    public function userSignUp($username, $email, $password){
        $stmt = $this->connection->prepare("INSERT INTO users (username, email, password, idRule, status) VALUES (:username, :email, :password, 3, 1);");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

    }

    //la méthode qui permet de se authentifier
    public function authentification($email, $password){
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE email = :email AND password = :password;");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    //la méthode qui permet de se déconnecter
    public function logOut(){
        session_unset();
        session_destroy();
    }
}