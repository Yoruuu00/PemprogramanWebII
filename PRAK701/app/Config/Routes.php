<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/utama', 'Utama::index', ['filter' => 'auth']);

// Rute CRUD Buku
$routes->get('/buku', 'Buku::index');
$routes->get('/buku/create', 'Buku::create');
$routes->post('/buku/store', 'Buku::store');
$routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
$routes->post('/buku/update/(:num)', 'Buku::update/$1');
$routes->get('/buku/delete/(:num)', 'Buku::delete/$1');

// Rute CRUD Member
$routes->get('/member', 'Member::index');
$routes->get('/member/create', 'Member::create');
$routes->post('/member/store', 'Member::store');
$routes->get('/member/edit/(:num)', 'Member::edit/$1');
$routes->post('/member/update/(:num)', 'Member::update/$1');
$routes->get('/member/delete/(:num)', 'Member::delete/$1');

// Rute CRUD Peminjaman
$routes->get('/peminjaman', 'Peminjaman::index');
$routes->get('/peminjaman/create', 'Peminjaman::create');
$routes->post('/peminjaman/store', 'Peminjaman::store');
$routes->get('/peminjaman/edit/(:num)', 'Peminjaman::edit/$1');
$routes->post('/peminjaman/update/(:num)', 'Peminjaman::update/$1');
$routes->get('/peminjaman/delete/(:num)', 'Peminjaman::delete/$1');

