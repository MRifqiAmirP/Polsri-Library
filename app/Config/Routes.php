<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');

// Admin Page
$routes->get('/login', 'Pages\Admin::login');
$routes->get('/admin', 'Pages\Admin::dashboard');


// Auth Controller
$routes->post('/login', 'Auth\Login::auth');
$routes->get('/logout', 'Auth\Login::logout');
