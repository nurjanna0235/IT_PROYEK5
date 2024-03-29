<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PenggunaController extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'Pengguna'
        ];

        return view('pages/admin/pengguna/pengguna',$data);
    }

    public function tambah()
    {
        $data = [
            'page' => 'Pengguna'
        ];

        return view('pages/admin/pengguna/tambah',$data);
    }
}
