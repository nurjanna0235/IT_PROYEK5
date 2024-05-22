<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BarangModel;

class BarangController extends BaseController
{
        // Membuat model untuk tiap data
        private $BarangModel;

        public function __construct(){
            $this->BarangModel = new BarangModel();
        }
    public function index()
    {
        $data = [
            'page' => 'Barang',
                // Mengambil data dan dimasukkan ke dala barang
                'barang' => $this->BarangModel->findAll()
            ];


        return view('pages/admin/barang/barang',$data);
    }

    public function simpan()
    {
        
        // Mengambil inputan dari pengguna
        $inputbarang
         = $this->request->getVar();
       

        // Simpan inputan pengguna ke database
        $this->BarangModel->insert($inputbarang);

        return redirect()->to('/admin/barang'); 
    }
    public function tambah()
    {
        $data = [
            'page' => 'Barang'
        ];

        return view('pages/admin/barang/tambah',$data);
    }
    public function edit($id_barang)
    {
        $data = [
            'page' => 'Barang',
            'barang' => $this->BarangModel->find($id_barang),
        ];

        return view('pages/admin/barang/edit',$data);
    }
    public function hapus($id_barang)
    {
        $this->BarangModel->delete($id_barang);
        
        return redirect()->to('admin/barang')->with('pesan','Data berhasil dihapus');
    }
    public function update($id_barang)
    {
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'detail_barang' => $this->request->getPost('detail_barang'),
            'kategori_barang' => $this->request->getPost('kategori_barang'),
            'kondisi_barang' => $this->request->getPost('kondisi_barang'),
            'stok_barang' => $this->request->getPost('stok_barang'),
        ];


        $this->BarangModel->update($id_barang,$data);

        return redirect()->to('admin/barang')->with('pesan','Data berhasil diupdate');
    }
}
