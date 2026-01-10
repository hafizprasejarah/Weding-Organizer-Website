<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PublicController::index');
$routes->get('/services', 'PublicController::service');
$routes->get('/gallery', 'PublicController::gallery');
$routes->get('/packages', 'PublicController::packages');