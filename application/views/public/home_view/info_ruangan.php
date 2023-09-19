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
	</nav>\

<section class="section">
	<div class="container">
		<div class="row">
            <?php foreach ($lantai as $l): ?>
            <button class="btn btn-info ml-2 btn-lantai" data-id="<?= $l->id_lantai; ?>"><?= $l->lantai; ?></button>
            <?php endforeach; ?>
		</div>
	</div>

  <?php foreach ($lantai as $l): ?>
	<div id="ruangan-div<?= $l->id_lantai; ?>"  class="container ruangan-table">
		<div class="row align-items-center">
			<div class="col-lg-12">
          <div class="row mt-4">
              <div class="card-body">
                <table id="ruangan<?= $l->id_lantai; ?>" class="table table-bordered " data-id="<?= $l->id_lantai; ?>">
                  <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Ruangan</th>
                        <th>Status Ruangan</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
      </div>
		</div>
	</div>
  <?php endforeach; ?>
  <br />
  <br />
  <br />
</section>



<div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="modal-view-label" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modal-view-label">Data Ruangan</h5>
				</div>
					<div class="modal-body">
            <div class="row align-items-center">
                <h4 id="nama_ruangan_view">Nama Ruangan</h4>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <img class="img-thumbnail" src="<?php echo base_url('uploads/ruangan/default.jpg'); ?>" alt="Ruangan" id="ruangan-image" />
              </div>
              <div class="col-md-6">
              <p class="font-weight-bold">Fasilitas</p>
              <ul id="data-fasilitas">
                <li></li>
              </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <p>
                    Gedung : <span id="nama_gedung">Nama Gedung</span>
                  </p>
              </div>
              <div class="col-md-6">
                  <p>
                    Lantai : <span id="nama_lantai">Nama Lantai</span>
                  </p>
              </div>
            </div>
            <div class="row">
              <p>
                Status Bed : &ensp;&ensp;&ensp;
              </p>              
              <p id="status_bed">
                Status Bed
              </p>
            </div>
					</div>
          
			</div>
		</div>
	</div>

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
            url: '<?= base_url('home/detail_ruangan/') ?>' +  $(this).data('id'),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
              console.log("data", response, id)
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

            	$('#ruangan-image').attr('src', '<?= base_url('uploads/ruangan/') ?>'+response.data['photo']);
            },
          }).then((rest) => {
            $.ajax({
                url: '<?= base_url('home/detail_fasilitas/') ?>' + rest.data.id_ruangan,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                  const ulFasilitas = $("#data-fasilitas");
                  ulFasilitas.empty();
                  response.data.map(function(item) {
                      const li = $("<li>").text(item.fasilitas_ruangan);
                      ulFasilitas.append(li);
                  })
                },
               
              });
          })
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
   