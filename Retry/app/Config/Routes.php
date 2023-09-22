<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/try','MainController::try');
$routes->post('/save','MainController::save');
$routes->get('/delete/(:any)','MainController::delete/$1');
$routes->get('/update/(:any)','MainController::edit/$1');
