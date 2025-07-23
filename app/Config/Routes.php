<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('/', static function ($routes) {
    $routes->get('', 'Home::index');
    $routes->get('login', 'Home::login');
    $routes->post('login/validate-access', 'Home::singin');
    $routes->get('logout', 'Home::logout');
});

$routes->group('dashboard', static function ($routes) {
    $routes->get('', 'Dashboard::index');
});
