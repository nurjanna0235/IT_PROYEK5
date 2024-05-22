<?= $this->extend('template/template-admin') ?>
<?= $this->section('content') ?>
<form action="/admin/pengguna/simpan" method="post">
    <div class="container-fluid">
        <div class= mb-3 text-end>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama_pengguna" >
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name ="nip">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name= "email">
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">Nomor Handphone</label>
            <input type="text" class="form-control" id="no_hp" name = "no_hp">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name = "alamat">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="level">Level</label>
            <select class="form-select" id="level" name = "level">
                <option selected>Pilih Jabatan...</option>
                <option value="1">Guru</option>
                <option value="2">Staff</option>
                <option value="3">Kepala Sekolah</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

<?= $this->endSection() ?>