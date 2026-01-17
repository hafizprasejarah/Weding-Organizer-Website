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
$routes->post('/contact/tambah', 'PublicController::submit');
$routes->post('/book/tambah', 'PublicController::submitbooking');
$routes->get('/book/transaction', 'PublicController::book_now');

// admin routes
$routes->get('/admin/login', 'LoginController::Index');
$routes->post('/admin/login/user', 'LoginController::login');

$routes->group('admin', ['filter' => 'AdminAuth'], function ($routes) {
    $routes->get('logout', 'LoginController::logout');
    $routes->get('dashboard', 'AdminDashboardController::index');

    // packages route
    $routes->get('package', 'PackageController::index');
    $routes->get('packages/tambah', 'PackageController::tambhaview');
    $routes->post('package/store', 'PackageController::tambahlogic');
    $routes->get('package/edit/(:num)', 'PackageController::edit/$1');
    $routes->post('package/update/(:num)', 'PackageController::update/$1');
    $routes->post('package/delete/(:num)', 'PackageController::delete/$1');
    // kelola gallery
    $routes->get('gallery', 'GalleryController::index');
    $routes->get('gallery/tambah', 'GalleryController::tambhaview');
    $routes->post('gallery/store', 'GalleryController::save');
    $routes->get('gallery/edit/(:num)', 'GalleryController::edit/$1');
    $routes->post('gallery/update/(:num)', 'GalleryController::update/$1');
    $routes->get('gallery/delete/(:num)', 'GalleryController::delete/$1');

    $routes->get('booking', 'BookingController::index');

    //kelola contact
    $routes->get('contact', 'ContactController::index');

    $routes->get('contact/(:num)', 'ContactController::show/$1');
    $routes->get('contact/delete/(:num)', 'ContactController::delete/$1');
});
