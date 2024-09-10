<?php

declare(strict_types=1);

namespace Controller;

use App\Auth;
use JetBrains\PhpStorm\NoReturn;

class AuthController
{

    #[NoReturn] public static function login(): void
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        dd([$username, $password, "ishlamadi"]);
        (new Auth())->login($username, $password);
    }

}