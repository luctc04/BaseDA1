<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\SanphamController;
use Ductong\BaseMvc\Controllers\Admin\TaikhoanController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/sanphams', SanphamController::class, 'index');
$router->addRoute('/admin/sanphams/create', SanphamController::class, 'create');
$router->addRoute('/admin/sanphams/update', SanphamController::class, 'update');
$router->addRoute('/admin/sanphams/delete', SanphamController::class, 'delete');

$router->addRoute('/admin/taikhoans', TaikhoanController::class, 'index');
$router->addRoute('/admin/taikhoans/create', TaikhoanController::class, 'create');
$router->addRoute('/admin/taikhoans/update', TaikhoanController::class, 'update');
$router->addRoute('/admin/taikhoans/delete', TaikhoanController::class, 'delete');
