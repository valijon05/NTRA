<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'bootstrap.php';

use App\User;

$user = new User();
// $user->create(2,"Azizbek","admin","male","+998910058110");
// $user->updateUser(1,"Valijon","admin","male","+998910058110");
// $user->deleteUser(1);
$user->getUser(2);