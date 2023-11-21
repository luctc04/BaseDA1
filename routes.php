<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\DanhmucController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Models\Danhmuc;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/danhmucs', DanhmucController::class, 'index');
$router->addRoute('/admin/danhmucs/create', DanhmucController::class, 'create');
$router->addRoute('/admin/danhmucs/update', DanhmucController::class, 'update');
$router->addRoute('/admin/danhmucs/delete', DanhmucController::class, 'delete');