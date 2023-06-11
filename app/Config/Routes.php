<?php

namespace Config;

use App\Controllers\Pages;

$routes = Services::routes();

$routes->match(['get', 'post'], '/create', [Pages::class, 'create']);
$routes->get('/', [Pages::class, 'index']);
$routes->get('/about', [Pages::class, 'about']);
$routes->get('/create', [Pages::class, 'create']);
$routes->get('/edit/(:num)', [Pages::class, 'edit']);
$routes->match(['post', 'get'], '/delete', [Pages::class, 'delete']);
$routes->match(['post', 'get'], '/update', [Pages::class, 'update']);
