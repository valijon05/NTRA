<?php

namespace App;
use App\Branch;
use PDO;

class Branch{
    private PDO  $pdo;
    public function __construct(){
        $this->pdo = DB::connect();
    }
    public function create(
        string  $name,
        string  $address,
    ){
        $query = "INSERT INTO branch( name, address,created_at) VALUES ( :name, :address, NOW())";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
    }

    public function getBranch(int $id){
        $query = "SELECT * FROM branch WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateBranch(
        int     $id,
        string  $name,
        string  $address,
    ){
        $query = "UPDATE branch SET name = :name, address = :address, update_at = NOW() WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
    }

    public function deleteBranch(int $id):void{
        $query = "DELETE FROM branch WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }



    

}
