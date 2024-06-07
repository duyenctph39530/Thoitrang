<?php
use Fpt\ThoiTrang\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {
    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/create', UserController::class . '@create');
        $router->post('/store', UserController::class . '@store');
        $router->get('/{id}', UserController::class . '@show');
        $router->get('/{id}/edit', UserController::class . '@edit');
        $router->put('/{id}', UserController::class . '@update');
        $router->delete('/{id}', UserController::class . '@delete');

    });
});


