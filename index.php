<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'bootstrap.php';

use App\User;
use App\Ads;
use App\Status;
use App\Branch;

$user = new User();
$ads = new Ads();
$status = new Status();
$branch = new Branch();
// $user->create(2,"Azizbek","admin","male","+998910058110");
// $user->updateUser(1,"Valijon","admin","male","+998910058110");
// $user->deleteUser(1);
// $user->create(2);
// $ads->create('896','Bekzod','yigit qamaladi','65','800','chiqadi','1.4','7','55');

//$ads->deleteAds(3);

//$status->deleteStatus(5);

$branch ->deleteBranch(3);