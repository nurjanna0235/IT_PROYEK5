<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PeminjamanModel;
use App\Models\KelasModel;
use App\Models\BarangModel;
class PeminjamanController extends BaseController
{
    private $PeminjamanModel;
    private $KelasModel;
    private $BarangModel;
    public function __construct(){
        $this->PeminjamanModel = new PeminjamanModel();
        $this->BarangModel = new BarangModel();
        $this->KelasModel = new KelasModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Peminjaman', 
            'peminjaman' => $this->PeminjamanModel->findAll()
        ];

        return view('pages/admin/peminjaman/peminjaman',$data);
    }

    public function tambah()
    {
        $data = [
            'page' => 'Peminjaman',
            'kelas' => $this->KelasModel->findAll(),
            'barang' => $this->BarangModel->where('stok_barang !=',0)->findAll(),
        ];

        return view('pages/admin/peminjaman/tambah',$data);
    }
    public function simpan()
    {
        // Mengambil inputan dari pengguna
        $inputpeminjaman = $this->request->getVar();

        // Mengambil barang yang dipilih
        $idBarang = $this->request->getVar('id_barang');

        $barang = $this->BarangModel->find($idBarang);
        $StokBarang = $barang['stok_barang'];
        

        // Simpan inputan pengguna ke database
        $this->PeminjamanModel->insert($inputpeminjaman);

        return redirect()->to('/admin/peminjaman'); 
    }

    public function edit($id_peminjaman) 
    {
        $data = [
            'page' => 'edit',
            'peminjaman' => $this->PeminjamanModel->find($id_peminjaman),
            'kelas' => $this->KelasModel->findAll(),
            'barang' => $this->BarangModel->where('stok_barang !=',0)->findAll(),
        ];

        return view('pages/admin/peminjaman/edit',$data);
    }

    public function hapus($id_peminjaman)
    {
        $this->PeminjamanModel->delete($id_peminjaman);
        
        return redirect()->to('admin/peminjaman')->with('pesan','Data berhasil dihapus');
    }
    public function update($id_peminjaman)
    {
        $data = [
            'nama_peminjam' => $this->request->getPost('nama_peminjam'),
            'tanggal_peminjaman' => $this->request->getPost('tanggal_peminjaman'),
            'tenggat_peminjaman' => $this->request->getPost('tenggat_peminjaman'),
            'status' => $this->request->getPost('status'),
        ];


        $this->PeminjamanModel->update($id_peminjaman,$data);

        return redirect()->to('admin/peminjaman')->with('pesan','Data berhasil diupdate');
    }
}
