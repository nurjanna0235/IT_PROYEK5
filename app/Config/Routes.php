<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//$routes->get('', '::index');

// Routes Beranda
$routes->get('admin/beranda','Admin\BerandaAdminController::index');

// Routes Pengguna
$routes->get('admin/pengguna','Admin\PenggunaController::index');
$routes->get('admin/pengguna/tambah','Admin\PenggunaController::tambah');

// Routes Kelas
$routes->get('admin/kelas','Admin\KelasController::index');
$routes->get('admin/kelas/tambah','Admin\KelasController::tambah');

// Routes Peminjaman
$routes->get('admin/peminjaman','Admin\PeminjamanController::index');
$routes->get('admin/peminjaman/tambah','Admin\PeminjamanController::tambah');

// Routes Barang
$routes->get('admin/barang','Admin\BarangController::index');
$routes->get('admin/barang/tambah','Admin\BarangController::tambah');
