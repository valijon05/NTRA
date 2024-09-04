<?php

declare(strict_types=1);

use App\Router;
use Controller\AdController;

Router::get('/', fn() => loadController('home'));

Router::get('/ads/{id}', fn(int $id) => ( new AdController())->show($id));

Router::get('/ads/create', fn() => (new AdController())->create());
Router::post('/ads/create', fn() => (new AdController())->store());


Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->edit($id));
Router::patch('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));

// Statuses
Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));

Router::get('/login', fn() => loadView('auth/login'), 'guest');
Router::post('/login', fn() => (new \Controller\AuthController())->login());

Router::get('/admin', fn() => loadView('dashboard/home'), 'auth');
Router::get('/profile', fn() => (new \Controller\UserController())->loadProfile(), 'auth');

Router::errorResponse(404, 'Not Found');
