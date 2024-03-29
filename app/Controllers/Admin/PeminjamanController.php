<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PeminjamanController extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'Peminjaman'
        ];

        return view('pages/admin/peminjaman/peminjaman',$data);
    }

    public function tambah()
    {
        $data = [
            'page' => 'Peminjaman'
        ];

        return view('pages/admin/peminjaman/tambah',$data);
    }
}
