<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UsuarioController;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('usuarios', 'UsuarioController::index');

