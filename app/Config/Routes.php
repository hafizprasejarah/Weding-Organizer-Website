<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PublicController::index');
$routes->get('/services', 'PublicController::service');
$routes->get('/gallery', 'PublicController::gallery');
$routes->get('/packages', 'PublicController::packages');
$routes->get('/contact', 'PublicController::contact');
$routes->get('/book/transaction', 'PublicController::book_now');

// admin routes
$routes->get('/admin/login', 'LoginController::Index');
$routes->post('/admin/login/user', 'LoginController::login');

$routes->group('admin', ['filter' => 'AdminAuth'], function ($routes) {
    $routes->get('logout', 'LoginController::logout');
    $routes->get('dashboard', 'AdminDashboardController::index');
    $routes->get('package', 'PackageController::index');

    $routes->get('packages/tambah', 'PackageController::tambhaview');
    $routes->post('package/store', 'PackageController::tambahlogic');
    $routes->get('package/edit/(:num)', 'PackageController::edit/$1');
    $routes->post('package/update/(:num)', 'PackageController::update/$1');
});
