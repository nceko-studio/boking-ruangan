<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>SIMBOR | <?= $title; ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/private/dist/img/logo.png'); ?>" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?= base_url('assets/public/plugins/bootstrap/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/private/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/private/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/private/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/private/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
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
			   <li class="nav-item"><a class="nav-link" href="<?= base_url('home') ?>">HOME</a></li>
			   <li class="nav-item"><a class="nav-link" href="<?= base_url('profile') ?>">PROFIL</a></li>
			   <li class="nav-item"><a class="nav-link" href="<?= base_url('info_ruangan') ?>">INFO RUANGAN</a></li>
			   <li class="nav-item"><a class="nav-link" href="<?= base_url('regist') ?>">Sing Up</a></li>
			   <li class="nav-item"><a class="btn btn-primary" href="<?= base_url('login') ?>">Sign In</a></li>
			</ul>
		  </div>
		</div>
	</nav>
  
<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <div class="section-title">
            <h2>Dokter Dan Pegawai</h2>
            <div class="divider mx-auto my-4"></div>
          </div>
        </div>
      </div>

    <?php foreach ($user as $v) : ?>
    <div class="row shuffle-wrapper portfolio-gallery">
      	<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item">
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	            <div class="doctor-img">
	            		<img src="<?= base_url('uploads/profile/4.jpg') ?>" alt="doctor-image" class="img-fluid w-100">
	            </div>
	          </div>
            <div class="content mt-3">
              <h4 class="mb-0"><?= $v->nama_pegawai ?></h4>
              <p>Cardiology</p>
            </div> 
	      </div>
    </div>
		<?php endforeach; ?>
</section>


<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="footer-btm">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-12">
					<div class="copyright">
						&copy; Copyright <span class="text-color">SIMBOR</span> by <a href="https://github.com/nceko" target="_blank">Simbor Official</a>
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
      $(document).ready(function() {
        var selectedLantaiIdLama = <?= $lantai[0]->id_lantai ?>;
        var selectedLantaiId = 0;

        $(".ruangan-table").hide();
        $("#ruangan-div"+selectedLantaiIdLama).show();

        <?php foreach ($lantai as $l): ?>
        $('#ruangan<?= $l->id_lantai; ?>').DataTable({
          "ajax": {
            "url": "<?= base_url('home/fetch_lantai') ?>",
            "type": "POST",
            "data":{
              "id": <?= $l->id_lantai; ?>,
            }
          },
          "autoWidth": false,
          "columns": [{
              "data": null,
              "render": function(data, type, row, meta) {
                return meta.row + 1;
              }
            },
            {
              "data": "nama_ruangan"
            },
            {
              "data": "sts_ruangan"
            },
            {
              "data": null,
              "render": function(data, type, row) {
                  return '<button type="button" class="btn btn-square btn-primary btn-edit" data-id="' + row.id_ruangan + '">Detail</button>';

              }
            }
          ]
        });
        <?php endforeach; ?>

        $(".btn-lantai").click(function() {
          selectedLantaiId = $(this).data('id');
          console.log(selectedLantaiId);

          showRuanganTable(selectedLantaiId,selectedLantaiIdLama);
        });

        function showRuanganTable(lantaiId,lantaiIdLama) {
          $("#ruangan-div" + lantaiIdLama).hide();
          $("#ruangan-div" + lantaiId).show();

          selectedLantaiIdLama = lantaiId;
        }

        <?php foreach ($lantai as $l): ?>
        $('#ruangan<?= $l->id_lantai; ?>').on('click', '.btn-edit', function() {
          var id = $(this).data('id');

          $.ajax({
            url: '<?= base_url('home/detail_ruangan/') ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
              console.log(response)
              $('#modal-view').modal('show');

              $('#nama_ruangan_view').text(response.data['nama_ruangan']);
              $('#nama_gedung').text(response.data['gedung']);
              $('#nama_lantai').text(response.data['lantai']);
              
              // Clear the existing status bed list
              $('#status_bed').empty();

              // Create a new list item for each status bed
              var statusBeds = response.data['status_bed'].split('\n');
              $.each(statusBeds, function(index, value) {
                $('#status_bed').append('<li>' + value + '</li>');
              });
            }
          });
        });
        <?php endforeach; ?>
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
   