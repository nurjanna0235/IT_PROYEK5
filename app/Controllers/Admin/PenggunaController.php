<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PenggunaController extends BaseController
{
    public function index()
    {
        return view('pages/admin/pengguna');
    }
}
