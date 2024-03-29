<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KelasController extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'Kelas'
        ];

        return view('pages/admin/kelas/kelas',$data);
    }

    public function tambah()
    {
        $data = [
            'page' => 'Kelas'
        ];

        return view('pages/admin/kelas/tambah',$data);
    }
}

