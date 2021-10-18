<?php echo $this->extend('layout/header'); ?>

<?php echo $this->section('content'); ?>

<div class="container-fluid p-5" style="background-color: #0E2044; height: 100vh;">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <img src="/img/gambarregister.png" alt="">
        </div>
        <div class="col-md-7 col-xs-12 text-white">
            <h3 style="padding-top: 15%;"> <strong> Form Pendaftaran <br> Online Calon Mahasiswa Baru </strong> </h3>
            <form style="padding-top: 20px;" action="/Admin/save" method="post">
                <input type="hidden" name="<?= csrf_token(); ?>" value="<?= csrf_hash(); ?>">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="Nama" aria-describedby="nameHelp" autofocus>

                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="Email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputTelepon1" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="exampleInputTelepon1" name="Telepon">

                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="Password" required>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Pilih Prodi</label>
                        <select class="form-select" aria-label="Default select example" name="Prodi">
                            <option selected>-- Pilih Prodi --</option>
                            <option value="S1-Sistem Informasi" name="Prodi">S1-Sistem Informasi</option>
                            <option value="S1-Sistem Komputer" name="Prodi">S1-Sistem Komputer</option>
                            <option value="S1-Teknologi Informasi" name="Prodi">S1-Teknologi Informasi</option>
                            <option value="D3-Manajemen Informatika" name="Prodi">D3-Manajemen Informatika</option>
                            <option value="Program 2 Gelar Manajemen Bisnis Digital, Sarjana Manajemen dan S.Kom" name="Prodi">Program 2 Gelar Manajemen Bisnis Digital, Sarjana Manajemen dan S.Kom</option>
                            <option value="Program Dual Degree Kelas International, B.IT. ,S.KOM" name="Prodi">Program Dual Degree Kelas International, B.IT. ,S.KOM</option>
                            <option value="S1-Bisnis Digital, S.Bis" name="Prodi">S1-Bisnis Digital, S.Bis</option>
                        </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary text-white"> <strong> Register </strong> </button>
            </form>
        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>