<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PeminjamanController extends BaseController
{
    public function index()
    {
        return view('pages/admin/peminjaman');
    }
}
