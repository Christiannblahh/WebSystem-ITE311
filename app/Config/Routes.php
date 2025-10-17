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

$routes->get('announcements', 'Announcement::index');

$routes->get('teacher/dashboard', 'Teacher::dashboard');

$routes->get('admin/dashboard', 'Admin::dashboard');

// admin routes (protected)
$routes->group('admin', ['filter' => 'roleauth'], function($routes) {
    $routes->get('dashboard', 'Admin::dashboard');
    // add more admin-only routes here
});

// teacher routes (protected)
$routes->group('teacher', ['filter' => 'roleauth'], function($routes) {
    $routes->get('dashboard', 'Teacher::dashboard');
    // add more teacher-only routes here
});

// student routes (optional, if you want to protect them too)
$routes->group('student', ['filter' => 'roleauth'], function($routes) {
    $routes->get('dashboard', 'Student::dashboard');
});

