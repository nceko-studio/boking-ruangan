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
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Beranda</a></li>
						<li class="breadcrumb-item active"><?= $title ?></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pendaftaran</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url('private/pendaftaran/new_lama') ?>" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_user">Pasien</label>
                                    <select class="form-control" id="id_user" name="id_user" required>
                                        <option>Pilih Pasien</option>
                                        <?php foreach ($user as $sk) { ?>
                                            <option value="<?= $sk->id_user ?>"><?= $sk->nama_user ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="jr">Jenis Rawatan</label>
                                        <div class="row" id="jr">
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_rawatan" value="1">
                                            <label class="form-check-label">Rawat Inap</label>
                                            </div>
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_rawatan" value="2">
                                            <label class="form-check-label">Rawat Jalan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="ll">Laka Lantas</label>
                                        <div class="row" id="ll">
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="laka_lantas" value="0">
                                            <label class="form-check-label">NO</label>
                                            </div>
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="laka_lantas" value="1">
                                            <label class="form-check-label">YES</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="DU">Dari UGD</label>
                                        <div class="row" id="DU">
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ugd" value="0">
                                            <label class="form-check-label">NO</label>
                                            </div>
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ugd" value="1">
                                            <label class="form-check-label">YES</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_dokter">DPJP</label>
                                    <select class="form-control" id="id_dokter" name="id_dokter" required>
                                        <option>Pilih Dokter</option>
                                        <?php foreach ($dokter as $d) { ?>
                                            <option value="<?= $d->id_user ?>"><?= $d->nama_dokter ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
								<div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lantai">Lantai</label>
                                        <select class="form-control" id="lantai" name="lantai" required>
                                            <option>Pilih Lantai</option>
                                            <?php foreach ($lantai as $d) { ?>
                                                <option value="<?= $d->id_lantai ?>"><?= $d->lantai ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="ruangan">Ruangan</label>
                                        <select class="form-control" id="ruangan" name="ruangan" required>
                                            <option>Pilih Ruangan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="bed">Bed</label>
                                        <select class="form-control" id="bed" name="bed" required>
                                            <option>Pilih Dokter</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                    <!-- /.card -->
                </div>
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/private/plugins/jquery/jquery.min.js')?>"></script>

<script>
  $(function () {
    $("#jenjang_tabel").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#jenjang_tabel_wrapper .col-md-6:eq(0)');
  });
</script>

<script>
	$('#jenjang').change(function() {
		var jenjang = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('private/pendaftaran/jurusan') ?>",
			data: {
				jenjang: jenjang
			},
			dataType: "json",
			success: function(response) {
				var options = '';
				$.each(response, function(key, value) {
					options += '<option value="' + value['id_jurusan_pendidikan'] + '">' + value['jurusan_pendidikan'] + '</option>';
				});
				$('#jurusan').html(options);
			}
		});
	});
	$('#provinsi').change(function() {
		var provinsi = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('private/pendaftaran/kabupaten') ?>",
			data: {
				provinsi: provinsi
			},
			dataType: "json",
			success: function(response) {
				var options = '';
				$.each(response, function(key, value) {
					options += '<option value="' + value['id_kabupaten'] + '">' + value['kabupaten'] + '</option>';
				});
				$('#kabupaten').html(options);
			}
		});
	});
	$('#kabupaten').change(function() {
		var kabupaten = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('private/pendaftaran/kecamatan') ?>",
			data: {
				kabupaten: kabupaten
			},
			dataType: "json",
			success: function(response) {
				var options = '';
				$.each(response, function(key, value) {
					options += '<option value="' + value['id_kecamatan'] + '">' + value['kecamatan'] + '</option>';
				});
				$('#kecamatan').html(options);
			}
		});
	});
	$('#kecamatan').change(function() {
		var kecamatan = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('private/pendaftaran/desa') ?>",
			data: {
				kecamatan: kecamatan
			},
			dataType: "json",
			success: function(response) {
				var options = '';
				$.each(response, function(key, value) {
					options += '<option value="' + value['id_desa'] + '">' + value['desa'] + '</option>';
				});
				$('#desa').html(options);
			}
		});
	});
	$('#lantai').change(function() {
		var lantai = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('private/pendaftaran/ruang') ?>",
			data: {
				lantai: lantai
			},
			dataType: "json",
			success: function(response) {
				var options = '';
				$.each(response, function(key, value) {
					options += '<option value="' + value['id_ruangan'] + '">' + value['nama_ruangan'] + '</option>';
				});
				$('#ruangan').html(options);
			}
		});
	});
	$('#ruangan').change(function() {
		var ruangan = $(this).val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('private/pendaftaran/bed') ?>",
			data: {
				ruangan: ruangan
			},
			dataType: "json",
			success: function(response) {
				var options = '';
				$.each(response, function(key, value) {
					options += '<option value="' + value['id_ruangan_bed'] + '">' + value['no_bed'] + '</option>';
				});
				$('#bed').html(options);
			}
		});
	});
</script>

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