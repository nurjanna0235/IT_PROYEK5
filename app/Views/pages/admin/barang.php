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
            <div class="row justify-content-end mb-3">
                <button type="button" class="btn btn-success justify-content-end">Tambah</button>
            </div>

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
                    <tr>
                        <th scope="row">1</th>
                        <td>Laptop</td>
                        <td>Laptopo</td>
                        <td>20/td>
                        <td>baik</td>
                        <td>hsgag</td>


                        <td>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </section>
    <!-- /.content -->
<?= $this->endSection() ?>