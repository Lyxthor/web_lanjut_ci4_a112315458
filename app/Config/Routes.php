<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['filter'=>'auth'], static function($routes) {
    $routes->get('/', 'HomeController::index');
    $routes->get('/produk', 'ProdukController::index');
    $routes->get('/keranjang', 'TransaksiController::index');
});


$routes->get('/login', 'AuthController::index', ['filter'=>['guest']]);
$routes->post('/login', 'AuthController::login', ['filter'=>['guest']]);
$routes->get('/logout', 'AuthController::logout', ['filter'=>['auth']]);
