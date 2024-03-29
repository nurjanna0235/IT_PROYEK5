<?= $this->extend('template/template-admin') ?>
<?= $this->section('content') ?>
<form>
    <div class="container-fluid">
        <div class="mb-3">
            <label for="nama_guru" class="form-label">Nama guru</label>
            <input type="text" class="form-control" id="nama_guru" name="nama_guru" >
        </div>
        <div class="mb-3">
            <label for="tanggal_peminjaman" class="form-label">Tanggal peminjaman</label>
            <input type="date" class="form-control" id="tanggal_peminjaman" name ="tanggal_peminjaman">
        </div>
        <div class="mb-3">
            <label for="tenggat_peminjaman" class="form-label">Tenggat peminjaman</label>
            <input type="date" class="form-control" id="tenggat_peminjaman" name= "tenggat_peminjaman">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control" id="status" name = "status">
        </div>
       
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

<?= $this->endSection() ?>