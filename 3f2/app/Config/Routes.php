<?php

use App\Models\MainModel;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'MainController::test');
$routes->post('/save', 'MainController::save');