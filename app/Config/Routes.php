<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/*ADMIN HOME UPDATE IKHTISAR*/
$routes->get('/adminDjawaateeth', 'homeAdmin::index');
$routes->post('/adminupdateikhtisar/(:num)', 'HomeAdmin::updateIkhtisar/$1');
/* ADMIN HERO */
$routes->get('/adminhero', 'heroAdmin::index');
$routes->post('/uploadxfotodashhome', 'heroAdmin::create');
$routes->post('/homepic/delete/(:num)', 'heroAdmin::drop/$1');
$routes->post('/homepic/update/(:num)', 'heroAdmin::update/$1');
$routes->get('/logouthero', 'heroAdmin::logout');
/* ADMIN Dashboard Laporan */
$routes->get('/adminlaporan', 'laporanAdmin::index');
/* ADMIN pengumuman */
$routes->get('/admin/pengumuman', 'pengumumanAdmin::index');
$routes->post('/admin/pengumuman/cr', 'pengumumanAdmin::create');
$routes->post('/admin/pengumuman/up/(:num)', 'pengumumanAdmin::edit/$1');
$routes->post('/admin/pengumuman/dl/(:num)', 'pengumumanAdmin::delete/$1');
/* ADMIN login */
$routes->get('/login', 'formLoginAdmin::login');
$routes->post('/logincek', 'formLoginAdmin::dologin');
$routes->post('/logout', 'formLoginAdmin::logout');
/* ADMIN crud card laporan */
$routes->get('/cards', 'cardIcon::index');
$routes->get('/cards/create', 'cardIcon::create');
$routes->post('/cards/create', 'cardIcon::create');
$routes->get('/cards/update/(:num)', 'cardIcon::update/$1');
$routes->post('/cards/update/(:num)', 'cardIcon::update/$1');
$routes->get('/cards/delete/(:num)', 'cardIcon::delete/$1');

