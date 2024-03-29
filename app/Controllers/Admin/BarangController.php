<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BarangController extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'Barang'
        ];

        return view('pages/admin/barang/barang',$data);
    }

    public function tambah()
    {
        $data = [
            'page' => 'Barang'
        ];

        return view('pages/admin/barang/tambah',$data);
    }
}
