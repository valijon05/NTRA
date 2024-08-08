<?php

declare(strict_types=1);

namespace App;
use App\Ads;
use PDO;

class Ads{
    private PDO  $pdo;
    public function __construct(){
        $this->pdo = DB::connect();
    }

    public function create(
        int     $user_id,
        string  $title,
        string  $describtion, 
        int     $status_id,
        int     $branch_id,
        string  $address,
        float   $price,
        int     $rooms,
        int     $branch
    ){
        $query = "INSERT INTO ads(user_id, title, describtion, status_id, branch_id, address, price, rooms, branch, created_at) 
                  VALUES (:user_id, :title, :describtion, :status_id, :branch_id, :address, :price, :rooms, :branch, NOW())";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':describtion', $describtion); // Corrected spelling
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->bindParam(':branch', $branch);
        $stmt->execute();
    }

    public function getAds(int $id){
        $query ="SELECT * FROM ads WHERE id = :id";
        $stms = $this->pdo->prepare($query);
        $stms->bindParam(':id', $id);
        $stms->execute();
        var_dump($stms->fetch(PDO::FETCH_ASSOC));
        
    }

    public function updateAds(
        int     $id,
        int     $user_id,
        string  $title,
        string  $describtion, 
        int     $status_id,
        int     $branch_id,
        string  $address,
        float   $price,
        int     $rooms,
        int     $branch
    ){
        $stmt = $this->pdo->prepare("UPDATE ads SET user_id = :user_id, title = :title, describtion = :describtion, status_id = :status_id, branch_id = :branch_id, address = :address, price = :price, rooms = :rooms, branch = :branch, update_at = NOW() WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':describtion', $describtion); // Corrected spelling
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->bindParam(':branch', $branch);
        $stmt->execute();
    }

    public function deleteAds(int $id):void{
        $query = "DELETE FROM ads WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    
}