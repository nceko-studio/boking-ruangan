<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('assets/auth'); ?>/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/auth'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/auth'); ?>/dist/css/adminlte.min.css?v=3.2.0">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/private/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/private/plugins/toastr/toastr.min.css">

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
            <h2><img src="<?= base_url('assets/auth'); ?>/img/logo.png" alt="" width="50px"><span class="ml-5">Sistem Informasi Manajemen Ruang Rawat Inap RSIA Siti Khadijah</span></h2>
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

    <script src="<?= base_url('assets/auth'); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/auth'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/auth'); ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
		  <!-- SweetAlert2 -->
		  <script src="<?= base_url('assets/private/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
		  <!-- Toastr -->
		  <script src="<?= base_url('assets/private/plugins/toastr/toastr.min.js') ?>"></script>



<?php if ($this->session->flashdata('error')) { ?>
	<script>
		$(function() {
			var Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});

			toastr.error('<?php echo $this->session->flashdata('error'); ?>')
		});
	</script>
<?php } else if ($this->session->flashdata('success')) { ?>
	<script>
		$(function() {
			var Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000
			});

			toastr.success('<?php echo $this->session->flashdata('success'); ?>')
		});
	</script>
<?php } ?>
</body>

</html>