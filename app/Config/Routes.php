<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Homepage
$routes->get('/about', 'Home::about');  // About page
$routes->get('/contact', 'Home::contact'); // Contact page

$routes->get('/register', 'Auth::register');

$routes->post('/register', 'Auth::register');

$routes->get('/login', 'Auth::login');

$routes->post('/login', 'Auth::login');

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Auth::dashboard');

$routes->get('student/dashboard', 'Student::dashboard');

$routes->get('teacher/dashboard', 'Teacher::dashboard');

$routes->get('admin/dashboard', 'Admin::dashboard');
