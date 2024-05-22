<?= $this->extend('template/template-admin') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Barang</h1>
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
            <a href="/admin/barang/tambah" type="button" class="btn btn-success justify-content-end">Tambah</a>
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
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori </th>
                    <th scope="col">Stok</th>
                    <th scope="col">Kondisi</th>
                    <th scope="col">Detail Barang</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
            <?php foreach($barang as $item) : ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $item['nama_barang'] ?></td>
                    <td><?php echo $item['kategori_barang'] ?></td>
                    <td><?php echo $item['stok_barang'] ?></td>
                    <td><?php echo $item['kondisi_barang'] ?></td>
                    <td><?php echo $item['detail_barang'] ?></td>
  
                    <td>
                    <a href="/admin/barang/edit/<?php echo $item['id_barang'] ?>"  type="button" class="btn btn-info justify-content-end text-white">Edit</a>
                        <a href="/admin/barang/hapus/<?php echo $item['id_barang'] ?>" class="btn 
                    btn-danger">Hapus</button>

                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>

</section>
<!-- /.content -->
<?= $this->endSection() ?>