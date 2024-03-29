<?= $this->extend('template/template-admin') ?>
<?= $this->section('content') ?>
<form>
    <div class="container-fluid">
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" >
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name ="kategori">
        </div>
        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi barang</label>
            <input type="text" class="form-control" id="kondisi" name= "kondisi">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name = "stok">
        </div>
        <div class="mb-3">
            <label for="detail_barang" class="form-label">Detail barang</label>
            <input type="text" class="form-control" id="detail_barang" name = "detail_barang">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

<?= $this->endSection() ?>