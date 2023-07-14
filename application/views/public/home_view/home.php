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

    <section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="<?= base_url('assets/public/img/backgrounds/18.jpg') ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h3 class="mt-5 mb-4">Rumah Sakit Siti Khadijah</h3>
					<div class="divider my-4"></div>
					<p class="lead">Age forming covered you entered the examine. Blessing scarcely confined her contempt wondered shy. Dashwoods contented sportsmen at up no convinced cordially affection.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum recusandae dolor autem laudantium, quaerat vel dignissimos. Magnam sint suscipit omnis eaque unde eos aliquam distinctio, quisquam iste, itaque possimus . Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet alias modi eaque, ratione recusandae cupiditate dolorum repellendus iure eius rerum hic minus ipsa at, corporis nesciunt tempore vero voluptas. Tempore.</p>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Monday - Friday</a>
					    <span>9:00 - 17:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Saturday</a>
					    <span>9:00 - 16:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Sunday</a>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3>+23-4565-65768</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
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
					<div class="modal-footer">
						<a href="<?= base_url('login') ?>" class="btn btn-primary">Boking Ruangan</a>
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
   