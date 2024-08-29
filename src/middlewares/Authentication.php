<?php

declare(strict_types=1);

namespace App\middlewares;

class Authentication
{

    public function handle(string|null $middleware = null): void
    {
        if (!$middleware) {
            return;
        }

        if ($middleware === 'guest') {
            if (isset($_SESSION['user'])) {
                redirect('/');
            }
        } elseif ($middleware === 'auth') {
            if (!isset($_SESSION['user'])) {
                redirect('/login');
            }
        }
    }
}