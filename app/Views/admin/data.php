<?php echo $this->extend('layout/header'); ?>

<?php echo $this->section('content'); ?>

<div class="container-fluid p-5 bg-dark text-white" style="height: 100vh;">
    <div class="row">
        <div class="col">
            <br><br>
            <h3 class="text-center">DATA SISWA YANG TELAH TERDAFTAR</h3>
            <br><br>
            <a href="/admin/register"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <br><br>
            <?php if (session()->getFlashdata('pesan')) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo session()->getFlashdata('pesan'); ?>
                </div>
            <?php } ?>
            <table class="table table-bordered text-white text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Password</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($data as $dt) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $dt["Nama"]; ?></td>
                        <td><?php echo $dt["Email"]; ?></td>
                        <td><?php echo $dt["Telepon"]; ?></td>
                        <td><?php echo $dt["Password"]; ?></td>
                        <td><?php echo $dt["Prodi"]; ?></td>
                        <td><button type="button" class="btn btn-success">Edit</button> | <button type="button" class="btn btn-danger">Hapus</button></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>