<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');

// Admin Page
$routes->get('/login', 'PageAdmin::login');
$routes->get('/admin', 'PageAdmin::dashboard');


// Login Controller
$routes->post('/login', 'Login::auth');
