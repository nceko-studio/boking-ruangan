<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Novena- Health & Care Medical template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/private/dist/img/logo.png'); ?>" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?= base_url('assets/public/plugins/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/private/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/private/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/private/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/private/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="<?= base_url('assets/public/plugins/icofont/icofont.min.css'); ?>">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/public/plugins/slick-carousel/slick/slick.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/public/plugins/slick-carousel/slick/slick-theme.css'); ?>">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/public/plugins/css/style.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/private/dist/css/adminlte.min.css">

</head>

<body id="top">

	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="<?= base_url('home') ?>">
                <div class="row">
                  <img src="<?= base_url('assets/private/dist/img/logo.png') ?>" alt="" class="img-fluid" width="75px" height="75px">
                  &ensp;
                  &ensp;
                  <h2 class="mt-4">SIMBOR</h2>
                </div>
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			   <li class="nav-item"><a class="nav-link" href="<?= base_url('regist') ?>">Sing Up</a></li>
			   <li class="nav-item"><a class="btn btn-primary" href="<?= base_url('login') ?>">Sign In</a></li>
			</ul>
		  </div>
		</div>
	</nav>\

<section class="section">
	<div class="container">
		<div class="row">
            <?php foreach ($lantai as $l): ?>
            <button class="btn btn-info ml-2"><?= $l->lantai; ?></button>
            <?php endforeach; ?>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">

                <div class="row col-md-12 mt-4">
                        <div class="card-body">
							<table id="tabel_ada" class="table table-bordered table-striped ">
								<thead>
									<tr>
										<th style="width: 5%;">NO</th>
										<th style="width: 90%;">Jenjang Pendidikan</th>
										<th style="width: 5%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
										<tr>
											<td>1</td>
											<td>apa</td>
											<td>
												<a href="<?= base_url('private/master_data/pendidikan/jenjang_hapus/') ?>">
													<button class="btn bg-danger btn-xs" title="Hapus Keting" style="width: 30px;">
														<i class="fas fa-user-minus"></i>
													</button>
												</a>
											</td>
										</tr>
								</tbody>
							</table>
						</div>
                </div>

            </div>
		</div>
	</div>
</section>
<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Novena</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- jQuery -->
    <script src="<?= base_url('assets/private/plugins/jquery/jquery.min.js')?>"></script>

    <script>
    $(function () {
        $("#table_ada").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false
        }).buttons().container().appendTo('#table_ada_wrapper .col-md-6:eq(0)');
    });
    </script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets/private/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/jszip/jszip.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/pdfmake/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('assets/private/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>

	<!-- Bootstrap -->
	<script src="<?= base_url('assets/private/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Slick Slider -->
    <script src="<?= base_url('assets/public/plugins/slick-carousel/slick/slick.min.js'); ?>"></script>
    <!-- Counterup -->
    <script src="<?= base_url('assets/public/plugins/counterup/jquery.waypoints.min.js'); ?>"></script>
    
    <script src="<?= base_url('assets/public/plugins/counterup/jquery.counterup.min.js'); ?>"></script>   
    
    <script src="<?= base_url('assets/public/plugins/js/script.js'); ?>"></script>
    <script src="<?= base_url('assets/public/plugins/js/contact.js'); ?>"></script>

  </body>
  </html>
   