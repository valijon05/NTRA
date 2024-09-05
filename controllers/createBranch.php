<?php
declare(strict_types=1);
use App\Branch;
$name = $_POST['name'];
$address = $_POST['address'];

if (isset($_POST['name']) && isset($_POST['address']) ) {
   $branch =  (new Branch())-> createBranch($_POST['name'],$_POST['address']);

    if ($branch) {
        header('Location: /admin');
        exit();
    }
}
