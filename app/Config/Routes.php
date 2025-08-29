<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Homepage
$routes->get('/about', 'Home::about');  // About page
$routes->get('/contact', 'Home::contact'); // Contact page