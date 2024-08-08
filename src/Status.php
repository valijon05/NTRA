<?php

namespace App;
use App\Status;
use PDO;

class Status{
    private PDO  $pdo;
    public function __construct(){
        $this->pdo = DB::connect();
    }

    public function create(string  $name){
        $query = "INSERT INTO status(name) VALUES (:name)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        
    }

    public function getStatus(int $id){
        $query = "SELECT * FROM status WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateStatus(int $id, string  $name){
        $query = "UPDATE status SET name = :name WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }

    public function deleteStatus(int $id):void{
        $query = "DELETE FROM status WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }



    

}
