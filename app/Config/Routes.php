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
$routes->get('student/dashboard', 'Auth::studentDashboard');
$routes->get('teacher/dashboard', 'Auth::teacherDashboard');
$routes->get('admin/dashboard', 'Auth::adminDashboard');
$routes->get('/admin/courses', 'Admin::coursesList');
$routes->get('/student/courses', 'Auth::studentCourses');

$routes->get('/admin/course/(:num)/upload', 'Materials::upload/$1');
$routes->post('/admin/course/(:num)/upload', 'Materials::upload/$1');
$routes->get('/admin/course/(:num)/materials', 'Materials::list/$1');
$routes->get('/materials/delete/(:num)', 'Materials::delete/$1');
$routes->get('/materials/download/(:num)', 'Materials::download/$1');

$routes->post('/course/enroll', 'Course::enroll');

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

