<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

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

            <div class="w-40 mx-auto text-center">
                <h2 class="login-box-msg">Silahkan Login</h2>
                <form action="<?= base_url(); ?>auth/proseslogin" method="post">
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label form-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mx-auto">
                            <button type="submit" class="btn btn-warning btn-block">Login</button>
                        </div>
                    </div>
                </form>

                <p class="mb-0 mx-auto">
                <p>Belum punya akun?</p>
                <a href="<?= base_url(); ?>regist">Daftar Disini</a>

            </div>
        </div>
    </div>

    <script src="<?= base_url('assets_lte'); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets_lte'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets_lte'); ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>