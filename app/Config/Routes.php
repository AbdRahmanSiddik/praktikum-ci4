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
$routes->get('/users-view/(:num)', 'UserController::show/$1');
$routes->get('/users-edit/(:num)', 'UserController::edit/$1');
$routes->post('/users-edit/(:num)', 'UserController::update/$1');
$routes->get('/users-remove/(:num)', 'UserController::destroy/$1');
