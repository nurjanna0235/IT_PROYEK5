<?= $this->extend('template/template-admin') ?>
<?= $this->section('content') ?>
<form action='/admin/barang/simpan' method='post'>
    <div class="container-fluid">
        <div class=mb-3 text-end>
            <label for="nama_barang" class="form-label">Nama barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" >
        </div>
        <div class="mb-3">
            <label for="kategori_barang" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori_barang" name ="kategori_barang">
        </div>
        <div class="mb-3">
            <label for="stok_barang" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok_barang" name = "stok_barang">
        </div>
        <div class="mb-3">
            <label for="detail_barang" class="form-label">Detail barang</label>
            <input type="text" class="form-control" id="detail_barang" name = "detail_barang">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="kondisi_barang">Kondisi barang</label>
            <select class="form-select" id="kondisi_barang" name="kondisi_barang">
                <option value="layak">Layak</option>
                <option value="tidak layak">Tidak Layak</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

<?= $this->endSection() ?>