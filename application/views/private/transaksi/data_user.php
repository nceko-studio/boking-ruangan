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
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-title">Data Pegawai</h3>
                                </div>
                                <div class="col-sm-6">
                                        <button class="btn bg-gradient-secondary float-lg-right" data-toggle="modal" data-target="#new-pegawai" title="Data Ruangan">New Pegawai</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="jenjang_tabel" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th style="width: 5%;">NO</th>
											<th style="width: 25%;">Nama Pegawai</th>
											<th style="width: 15%;">Kd DPJP</th>
											<th style="width: 20%;">TTL</th>
											<th style="width: 15%;">No Telfon</th>
											<th style="width: 20%;">Email</th>
											<th style="width: 20%;">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1; ?>
										<?php foreach ($user as $v) : ?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $v->nama_pegawai; ?></td>
												<td><?= $v->kd_dpjp_fungsi; ?></td>
												<td><?= $v->tempat_lahir; ?> / <?= date("d-m-Y",strtotime($v->tgl_lahir)); ?></td>
												<td><?= $v->no_hp; ?></td>
												<td><?= $v->email; ?></td>
												<td>
													<a href="<?= base_url('private/transaksi/pegawai/hapus/' . $v->id_user) ?>">
														<button class="btn bg-danger btn-xs" title="Proses Pulang" style="width: 30px;">
															<i class="fas fa-user-minus"></i>
														</button>
													</a>   
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>

	<div class="modal fade" id="new-pegawai">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Pegawai</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= site_url('private/transaksi/pegawai/new') ?>" method="POST">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="gelardp">Gelar Depan</label>
								<input type="text" class="form-control" id="gelardp" name="gelardp" placeholder="Gelar Depan">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="nama">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pegawai">
							</div>							
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="gelarblk">Gelar Belakang</label>
								<input type="text" class="form-control" id="gelarblk" name="gelarblk" placeholder="Nama Ruangan">
							</div>							
						</div>
					</div>
                    <div class="form-group">
                        <label for="dpjp">Kode DPJP</label>
                        <input type="text" class="form-control" id="dpjp" name="dpjp" placeholder="Kode DPJP">
                    </div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="tempat_lahir">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tgl_lahir">Tanggal Lahir</label>
								<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="jk">Jenis Kelamin</label>
								<select class="form-control" id="jk" name="jk" required>
									<option>Pilih Jenis Kelamin</option>
									<option value="1">Laki - Laki</option>
									<option value="2">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="status_kawin">Status Kawin</label>
								<select class="form-control" id="status_kawin" name="status_kawin" required>
									<option>Pilih Status Kawin</option>
									<?php foreach ($status_kawin as $sk) { ?>
                                        <option value="<?= $sk->id_status_kawin ?>"><?= $sk->status_kawin ?></option>
                                    <?php } ?>
								</select>
							</div>					
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="agama">Agama</label>
								<select class="form-control" id="agama" name="agama" required>
									<option>Pilih Agama</option>
									<?php foreach ($agama as $a) { ?>
                                        <option value="<?= $a->id_agama ?>"><?= $a->agama ?></option>
                                    <?php } ?>
								</select>
							</div>				
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="goldar">Golongan Darah</label>
								<select class="form-control" id="goldar" name="goldar" required>
									<option value="A">Pilih Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
								</select>
							</div>					
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="jenjang">Jenjang Pendidikan</label>
								<select class="form-control" id="jenjang" name="jenjang" required>
									<option>Pilih Jenjang Pendidikan</option>
									<?php foreach ($jenjang_pendidikan as $jp) { ?>
                                        <option value="<?= $jp->id_jenjang_pendidikan ?>"><?= $jp->jenjang_pendidikan ?></option>
                                    <?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="jurusan">Jurusan Pendidikan</label>
								<select class="form-control" id="jurusan" name="jurusan" required>
									<option>Pilih Jurusan Pendidikan</option>
								</select>
							</div>					
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label for="identitas">Jenis Identitas</label>
								<select class="form-control" id="identitas" name="identitas" required>
									<option>Identitas</option>
									<?php foreach ($identitas as $i) { ?>
                                        <option value="<?= $i->id_identitas ?>"><?= $i->identitas ?></option>
                                    <?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="no_identitas">No Identitas</label>
								<input type="text" class="form-control" id="no_identitas" name="no_identitas" placeholder="No Identitas">
							</div>			
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label for="no_kk">No Kartu Keluarga</label>
								<input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No Kartu Keluarga">
							</div>			
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="provinsi">Provinsi</label>
								<select class="form-control" id="provinsi" name="provinsi" required>
									<option>Pilih Provinsi</option>
									<?php foreach ($provinsi as $prov) { ?>
                                        <option value="<?= $prov->id_provinsi ?>"><?= $prov->provinsi ?></option>
                                    <?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="kabupaten">Kabupaten Kota</label>
								<select class="form-control" id="kabupaten" name="kabupaten" required>
									<option>Pilih Kabupaten</option>
								</select>
							</div>					
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="kecamatan">Kecamatan</label>
								<select class="form-control" id="kecamatan" name="kecamatan" required>
									<option>Pilih Kecamatan</option>
								</select>
							</div>				
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="desa">Desa</label>
								<select class="form-control" id="desa" name="desa" required>
									<option>Pilih Desa</option>
								</select>
							</div>					
						</div>
					</div>
					<div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="1" placeholder="Alamat"></textarea>
                    </div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="no_hp">No Handphone</label>
								<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone">
							</div>	
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>				
						</div>
					</div>
					<div class="form-group">
                        <label for="riwayat">Riwayat Alergi</label>
                        <textarea class="form-control" name="riwayat" id="riwayat" rows="1" placeholder="Riwayat Alergi"></textarea>
                    </div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah Baru</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
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