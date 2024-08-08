<?php

namespace App;

class User
{
    public function __construct() {
        $this->pdo = DB::connect();
    }

    public function create(
        string $id,
        string $username,
        string $position,
        string $gender,
        string $phone,
    ){
        $query = "INSERT INTO users(id,username, position, gender, phone) VALUES (:id,:username, :position, :gender, :phone)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function getUser(int $id){
        $query ="SELECT * FROM users WHERE id = :id";
        $stms = $this->pdo->prepare($query);
        $stms->bindParam(':id', $id);
        $stms->execute();
        var_dump($stms->fetch(PDO::FETCH_ASSOC));
    }

    public function updateUser(
        int $id,
     string $username,
     string $position,
     string $gender,
     string $phone,
     ){
        $stmt = $this->pdo->prepare("UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function deleteUser(int $id):void{
        $query = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
