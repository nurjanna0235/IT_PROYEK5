<?= $this->extend('template/template-admin') ?>
<?= $this->section('content') ?>
<form action='/admin/peminjaman/simpan' method='post'>
    <div class="container-fluid">
        <div class=mb-3 text-end>
            <label for="nama_guru" class="form-label">Nama Peminjam</label>
            <input type="text" class="form-control" id="nama_guru" name="nama_peminjam">
        </div>
        <div class="mb-3">
            <label for="tanggal_peminjaman" class="form-label">Tanggal peminjaman</label>
            <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman">
        </div>
        <div class="mb-3">
            <label for="tenggat_peminjaman" class="form-label">Tenggat peminjaman</label>
            <input type="date" class="form-control" id="tenggat_peminjaman" name="tenggat_peminjaman">
        </div>
      
        <div class="input-group mb-3">
            <label class="input-group-text" for="barang">barang</label>
            <select class="form-select" id="barang" name="id_barang">
                <option value="">Pilih Barang...</option>
                <?php foreach ($barang as $item): ?>
                    <option value="<?php echo $item['id_barang'] ?>"><?php echo $item['nama_barang'] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="kelas">Kelas</label>
            <select class="form-select" id="kelas" name="id_kelas">
                <option value="">Pilih Kelas...</option>
                <?php foreach ($kelas as $item): ?>
                    <option value="<?php echo $item['id_kelas'] ?>"><?php echo $item['nama_kelas'] ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

<?= $this->endSection() ?>