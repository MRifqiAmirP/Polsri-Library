<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');

// ROUTE ADMIN
$routes->group('admin', function ($routes) {
    $routes->get('', 'Pages\Admin::dashboard');
    $routes->get('bibliography', 'Biblio::index');
    $routes->get('bibliography/add', 'Biblio::create');
    $routes->post('bibliography/save', 'Biblio::store');
});

// Login Page
$routes->get('/login', 'Auth\Login::index');

// Auth Controller
$routes->post('/login', 'Auth\Login::auth');
$routes->get('/logout', 'Auth\Login::logout');
