<?php

// declare(strict_types=1);

namespace App;

use PDO;

class Image
{
    private PDO $pdo;

    const  DEFAULT_IMAGE = 'default.jpg';
    const  DEFAULT_PATH = '/assets/images/ads/';

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function addImage(int $adsId, string $name): bool
    {
        $query = "INSERT INTO ads_image (ads_id, name)
                 VALUES (:ads_id, :name)";

        $statement = $this->pdo->prepare($query);
        $statement->bindParam(':ads_id', $adsId);
        $statement->bindParam(':name', $name);
        return $statement->execute();
    }

    public function getImagesById(int $adsId){
        $stmt = $this->pdo->prepare("SELECT * FROM ads_image WHERE ads_id = :ads_id");
        $stmt->bindParam(':ads_id', $adsId);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(int $adsId, string $name): bool{
        $stmt = $this->pdo->prepare("UPDATE ads_image SET name = :name WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        return $stmt->execute();
    }

    public function handleUpload(): string
    {
        // Check if file uploaded
        if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            return 'default.jpg';
        }


        // Extract file name and path
        $name       = $_FILES['image']['name'];
        $path       = $_FILES['image']['tmp_name'];
        $uploadPath = basePath("/public/assets/images/ads");

        // Check if upload directory exists
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath);
        }

        // Rename filename
        $fileName     = uniqid().'___'.$name;
        $fullFilePath = "$uploadPath/$fileName";

        // Upload file
        $fileUploaded = move_uploaded_file($path, $fullFilePath);

        if (!$fileUploaded) {
            exit('Fayl yuklanmadi');
        }

        return $fileName;
    }

    public function show(string|null $file=null):string{
        return $file
            ? self::DEFAULT_PATH.$file
            : self::DEFAULT_PATH.self::DEFAULT_IMAGE;
    }
}