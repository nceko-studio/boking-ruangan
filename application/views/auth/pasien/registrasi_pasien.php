<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi Pasien</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('assets_lte'); ?>/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('assets_lte'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets_lte'); ?>/dist/css/adminlte.min.css?v=3.2.0">

    <style>
        .form-label {
            text-align: right;
            padding-right: 10px;
            white-space: nowrap;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="card-body mt-5">
        <div class="text-center">
            <h2><img src="<?= base_url('assets_lte'); ?>/img/logo.png" alt="" width="50px"><span class="ml-5">Sistem Informasi Manajemen Ruang Rawat Inap RSIA Siti Khadijah</span></h2>
        </div>
        <div class="jumbotron mx-auto bg-white">

            <div class="w-60 mx-auto text-center">
                <h2 class="login-box-msg">Registrasi Pasien</h2>
                <form action="#" method="post">
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label form-label">Nama Lengkap</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nik" class="col-sm-3 col-form-label form-label">Nik</label>
                        <div class="col-sm-3">
                            <input type="nik" class="form-control" id="nik" name="nik">
                        </div>
                        <label for="foto" class="col-sm-1 col-form-label form-label">Foto</label>

                        <div class="col-sm-2">
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label form-label">alamat</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="alamat" name="alamat">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telp" class="col-sm-3 col-form-label form-label">No. Telp/HP</label>
                        <div class="col-sm-6">
                            <input type="no_telp" class="form-control" id="no_telp" name="no_telp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="diagnosa" class="col-sm-3 col-form-label form-label">Diagnosa/Keluhan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="diagnosa" name="diagnosa">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_daftar" class="col-sm-3 col-form-label form-label">Tanggal Registrasi</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_pembayaran" class="col-sm-3 col-form-label form-label">Jenis Pembayaran</label>
                        <div class="col-sm-3">
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Jenis Pembayaran</option>
                                <option value="">a</option>
                                <option value="">a</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ruangan" class="col-sm-3 col-form-label form-label">Ruangan</label>
                        <div class="col-sm-3">
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Lantai</option>
                                <option value="">a</option>
                                <option value="">a</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Kelas</option>
                                <option value="">a</option>
                                <option value="">a</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label form-label">Username</label>
                        <div class="col-sm-6">
                            <input type="username" class="form-control" id="username" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-2">
                            <button type="submit" class="btn btn-warning btn-block">Regis</button>
                        </div>
                        <div class="col-2">
                            <a href="<?= base_url('auth'); ?>" type="button" class="btn btn-dark btn-block">Batal</a>
                        </div>
                    </div>

                </form>


                </p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets_lte'); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets_lte'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets_lte'); ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>