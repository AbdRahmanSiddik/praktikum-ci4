<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/profile', function () {
  return view('admin/profile/profile');
});

$routes->get('/users', 'UserController::index');
$routes->get('/users-add', 'UserController::create');
$routes->post('/users-add', 'UserController::store');
