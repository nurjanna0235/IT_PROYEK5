<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PenggunaModel;

class PenggunaController extends BaseController
{
    private $PenggunaModel;
    public function __construct(){
        $this->PenggunaModel = new PenggunaModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Pengguna',
            'pengguna' => $this->PenggunaModel->findAll()
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

    public function simpan()
    {
        // Mengambil inputan dari pengguna
        $inputPengguna = $this->request->getPost();

        // Simpan inputan pengguna ke database
        $this->PenggunaModel->insert($inputPengguna);


        return redirect()->to('/admin/pengguna');
    }

    public function edit($id_pengguna)
    {
        $data = [
            'page' => 'edit',
            'pengguna' => $this->PenggunaModel->find($id_pengguna)
        ];

        return view('pages/admin/pengguna/edit',$data);
    }

    public function hapus($id_pengguna)
    {
        $this->PenggunaModel->delete($id_pengguna);
        
        return redirect()->to('admin/pengguna')->with('pesan','Data berhasil dihapus');
    }

    public function update($id_pengguna)
    {
        $data = [
            'nama_pengguna' => $this->request->getPost('nama'),
            'nip' => $this->request->getPost('nip'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'alamat' => $this->request->getPost('alamat'),
            'level' => $this->request->getPost('level'),
        ];


        $this->PenggunaModel->update($id_pengguna,$data);

        return redirect()->to('admin/pengguna')->with('pesan','Data berhasil diupdate');
    }
}
