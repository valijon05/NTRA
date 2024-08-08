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
        $query = "INSERT INTO branches( name, address,created_at) VALUES ( :name, :address, NOW())";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
    }

    

}
