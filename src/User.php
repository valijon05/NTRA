<?php

declare(srtict_type=1);
namespace App;


class User
{
    public function __construct() {
        $this->pdo = DB::connect();
    }

    public function create(
        string $username,
        string $position,
        string $gender,
        string $phone,
        string $created_at
    ){
        $query = "INSERT INTO users (username, position, gender, phone,) VALUES (:username, :position, :gender, :phone,)";
        $stmt = $this->pdo->prepare($quere);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        return $stmt->execute();

    }

    public function getUser(){
        $query ="SELECT * FROM users WHERE id = :id";
        $stms = $this->pdo->prepare($query);
        $stms->bindParam(':id', $id);
        $stms->execute();
        return $stms->fetch(PDO::FETCH_ASSOC);
        
    }

    public function updateUser(
    int $id,
     string $username,
     string $position,
     string $gender, int $age,
     string $phone,
     string $address
     ){
        $stmt = $this->pdo->prepare("UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone, address = :address WHERE id = :id");
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
