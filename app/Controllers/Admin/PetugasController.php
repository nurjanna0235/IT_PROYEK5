<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PetugasController extends BaseController
{
    public function index()
    {
        return view('pages/admin/petugas');
    }
}
