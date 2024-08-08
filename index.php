<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'bootstrap.php';

use App\User;
use App\Ads;

$user = new User();
$ads = new Ads();
// $user->create(2,"Azizbek","admin","male","+998910058110");
// $user->updateUser(1,"Valijon","admin","male","+998910058110");
// $user->deleteUser(1);
// $user->create(2);
// $ads->create('896','Bekzod','yigit qamaladi','65','800','chiqadi','1.4','7','55');

$ads->deleteAds(3);