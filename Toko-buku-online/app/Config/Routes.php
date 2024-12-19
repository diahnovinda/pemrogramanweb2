<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Chart', 'Home::Chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
$routes->post('submit', 'Home::submit');
$routes->get('images/(:segment)', 'Home::imege/$1');

service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => 'group:admin, superadmin, develover'], function($routes){

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('data_buku', 'AdminController::data_buku');
    $routes->post('data-buku', 'AdminController::create_buku');
    $routes->get('dat-buku/(:segment)/edit', 'AdminController::edit_buku/$1');
    $routes->get('dat-buku/(:segment)/edit', 'AdminController::update_buku/$1');

});
