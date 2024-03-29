<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//$routes->get('', '::index');

$routes->get('admin/beranda','Admin\BerandaAdminController::index');

$routes->get('admin/pengguna','Admin\PenggunaController::index');

$routes->get('admin/kelas','Admin\KelasController::index');

$routes->get('admin/peminjaman','Admin\PeminjamanController::index');

$routes->get('admin/barang','Admin\BarangController::index');