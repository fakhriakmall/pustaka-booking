<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Auth::showLogin'); // Tampilan form login

// Routes untuk masing-masing peran (siswa, guru, admin)
$routes->post('/auth/studentLogin', 'Auth::studentLogin'); // Login siswa
$routes->post('/auth/teacherLogin', 'Auth::teacherLogin'); // Login guru
$routes->post('/auth/adminLogin', 'Auth::adminLogin'); // Login admin

// Contoh route untuk halaman setelah login (misalnya dashboard)
$routes->get('/student/dashboard', 'StudentController::dashboard'); // Halaman dashboard siswa
$routes->get('/teacher/dashboard', 'TeacherController::dashboard'); // Halaman dashboard guru
$routes->get('/admin/dashboard', 'AdminController::dashboard'); // Halaman dashboard admin


$routes->get('/Siswa', 'FrontEnd::frontend'); // Halaman dashboard siswa
