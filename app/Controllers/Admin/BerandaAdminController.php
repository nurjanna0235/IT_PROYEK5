<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BerandaAdminController extends BaseController
{
    public function index()
    {
        $data = [
            'page' => 'Beranda'
        ];

        return view('pages/admin/beranda/beranda_admin', $data);
    }

}
