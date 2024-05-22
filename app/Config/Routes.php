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
$routes->post('admin/pengguna/simpan','Admin\PenggunaController::simpan');
$routes->get('admin/pengguna/edit/(:num)','Admin\PenggunaController::edit/$1');
$routes->get('admin/pengguna/hapus/(:num)','Admin\PenggunaController::hapus/$1');
$routes->post('admin/pengguna/update/(:num)','Admin\PenggunaController::update/$1');

// Routes Kelas
$routes->get('admin/kelas','Admin\KelasController::index');
$routes->get('admin/kelas/tambah','Admin\KelasController::tambah');
$routes->post('admin/kelas/simpan','Admin\KelasController::simpan');
$routes->get('admin/kelas/edit/(:num)','Admin\KelasController::edit/$1');
$routes->get('admin/kelas/hapus/(:num)','Admin\kelasController::hapus/$1');
$routes->post('admin/kelas/update/(:num)','Admin\kelasController::update/$1');

// Routes Peminjaman
$routes->get('admin/peminjaman','Admin\PeminjamanController::index');
$routes->get('admin/peminjaman/tambah','Admin\PeminjamanController::tambah');
$routes->post('admin/peminjaman/simpan','Admin\PeminjamanController::simpan');
$routes->get('admin/peminjaman/edit/(:num)','Admin\PeminjamanController::edit/$1');
$routes->get('admin/peminjaman/hapus/(:num)','Admin\PeminjamanController::hapus/$1');
$routes->post('admin/peminjaman/update/(:num)','Admin\peminjamanController::update/$1');


// Routes Barang
$routes->get('admin/barang','Admin\BarangController::index');
$routes->get('admin/barang/tambah','Admin\BarangController::tambah');
$routes->post('admin/barang/simpan','Admin\BarangController::simpan');
$routes->get('admin/barang/edit/(:num)','Admin\BarangController::edit/$1');
$routes->get('admin/barang/hapus/(:num)','Admin\BarangController::hapus/$1');
$routes->post('admin/barang/update/(:num)','Admin\BarangController::update/$1');




