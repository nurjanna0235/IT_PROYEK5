<?= $this->extend('template/template-admin') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Peminjaman</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="mb-3 text-end">
            <a href="/admin/peminjaman/tambah" type="button" class="btn btn-success">Tambah</a>
        </div>
        <?php if (session('pesan')) : ?>
            <div class="card bg-gradient-primary">
                <!-- /.card-header -->
                <div class="card-body">
                    <?php echo session('pesan') ?>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Tanggal Peminjaman </th>
                    <th scope="col">Tenggat Peminjaman</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($peminjaman as $item) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $item['nama_peminjam'] ?></td>
                    <td><?php echo $item['tanggal_peminjaman'] ?></td>
                    <td><?php echo $item['tenggat_peminjaman'] ?></td>
                    <td><?php echo $item['status'] ?></td>


                    <td>
                    <a href="/admin/peminjaman/edit/<?php echo $item['id_peminjaman'] ?>" type="button" class="btn btn-info justify-content-end text-white">Edit</a>
                    <a href="/admin/peminjaman/hapus/<?php echo $item['id_peminjaman'] ?>" class="btn 
                    btn-danger">Hapus</button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>

    </div>

</section>
<?= $this->endSection() ?>