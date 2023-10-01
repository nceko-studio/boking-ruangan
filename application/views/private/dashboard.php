<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"><?= $title ?></h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active"><?= $title ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-4 col-6">

				<div class="small-box bg-info">
					<div class="inner">
						<h3><?= $dokter->jumlah_dokter ?></h3>
						<p>Dokter</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-6">

				<div class="small-box bg-success">
					<div class="inner">
						<h3><?= $ruangan->jumlah_ruangan_bed ?></h3>
						<p>Ruangan Aktif</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-6">

				<div class="small-box bg-warning">
					<div class="inner">
						<h3><?= $pasien->jumlah_pasien ?></h3>
						<p>Pasien Rawat Inap</p>
					</div>
				</div>
			</div>
		</div>


	</section>
	<!-- /.content -->
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/private/plugins/jquery/jquery.min.js') ?>"></script>
