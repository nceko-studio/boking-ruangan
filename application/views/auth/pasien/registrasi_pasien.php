<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi Pasien</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('assets/auth'); ?>/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/auth'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/auth'); ?>/dist/css/adminlte.min.css?v=3.2.0">

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

            <div class="w-60 mx-auto text-center">
                <h2 class="login-box-msg">Registrasi Pasien</h2>
                <form action="<?= base_url('auth/regist_new') ?>" method="post">
                    <div class="form-group row">
                        <label for="nama">Nama Pasien<code>*</code></label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pasien" pattern="[^0-9]+">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group col-md-11 row">
                                <label for="tl">Tempat Lahir<code>*</code></label>
                                <input type="text" class="form-control" id="tl" name="tl" placeholder="Tempat Lahir">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group col-md-11 row">
                                <label for="tgl">Tanggal Lahir<code>*</code></label>
                                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="jk">Jenis Kelamin<code>*</code></label>
								<select class="form-control" id="jk" name="jk" required>
									<option>Pilih Jenis Kelamin</option>
									<option value="1">Laki - Laki</option>
									<option value="2">Perempuan</option>
								</select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="status_kawin">Status Kawin<code>*</code></label>
								<select class="form-control" id="status_kawin" name="status_kawin" required>
									<option>Pilih Status Kawin</option>
									<?php foreach ($status_kawin as $sk) { ?>
                                        <option value="<?= $sk->id_status_kawin ?>"><?= $sk->status_kawin ?></option>
                                    <?php } ?>
								</select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="agama">Agama<code>*</code></label>
								<select class="form-control" id="agama" name="agama" required>
									<option>Pilih Agama</option>
									<?php foreach ($agama as $a) { ?>
                                        <option value="<?= $a->id_agama ?>"><?= $a->agama ?></option>
                                    <?php } ?>
								</select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="goldar">Golongan Darah<code>*</code></label>
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
                            <div class="form-group col-md-11 row">
								<label for="jenjang">Jenjang Pendidikan<code>*</code></label>
								<select class="form-control" id="jenjang" name="jenjang" required>
									<option>Pilih Jenjang Pendidikan</option>
									<?php foreach ($jenjang_pendidikan as $jp) { ?>
                                        <option value="<?= $jp->id_jenjang_pendidikan ?>"><?= $jp->jenjang_pendidikan ?></option>
                                    <?php } ?>
								</select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group col-md-11 row">
								<label for="jurusan">Jurusan Pendidikan<code>*</code></label>
								<select class="form-control" id="jurusan" name="jurusan" required>
									<option>Pilih Jurusan Pendidikan</option>
								</select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group col-md-11 row">
                                <label for="identitas">Identitas<code>*</code></label>
                                <select class="form-control" id="identitas" name="identitas" required>
                                    <option>Pilih Jenis Identitas</option>
                                    <?php foreach ($identitas as $i) { ?>
                                        <option value="<?= $i->id_identitas ?>"><?= $i->identitas ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group col-md-11 row">
                                    <label for="ni">No Identitas<code>*</code></label>
                                    <input type="text" class="form-control" id="ni" name="ni" placeholder="Nomor Identitas">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group col-md-11 row">
                                    <label for="kk">No Kartu Keluarga</label>
                                    <input type="text" class="form-control" id="kk" name="kk" placeholder="Nomor Kartu Keluarga">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="provinsi">Provinsi<code>*</code></label>
								<select class="form-control" id="provinsi" name="provinsi" required>
									<option>Pilih Provinsi</option>
									<?php foreach ($provinsi as $prov) { ?>
                                        <option value="<?= $prov->id_provinsi ?>"><?= $prov->provinsi ?></option>
                                    <?php } ?>
								</select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="kabupaten">Kabupaten Kota<code>*</code></label>
								<select class="form-control" id="kabupaten" name="kabupaten" required>
									<option>Pilih Kabupaten</option>
								</select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="kecamatan">Kecamatan<code>*</code></label>
								<select class="form-control" id="kecamatan" name="kecamatan" required>
									<option>Pilih Kecamatan</option>
								</select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group col-md-11 row">
								<label for="desa">Desa<code>*</code></label>
								<select class="form-control" id="desa" name="desa" required>
									<option>Pilih Desa</option>
								</select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat">Alamat<code>*</code></label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="1" placeholder="Alamat"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group col-md-11 row">
								<label for="no_hp">No Handphone<code>*</code></label>
								<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group col-md-11 row">
								<label for="email">Email<code>*</code></label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="riwayat">Riwayat Alergi</label>
                        <textarea class="form-control" name="riwayat" id="riwayat" rows="1" placeholder="Riwayat Alergi"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group col-md-11 row">
                                <label for="username">Username<code>*</code></label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group col-md-11 row">
                                <label for="password">Password<code>*</code></label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-2">
                            <button type="submit" class="btn btn-warning btn-block">Registrasi</button>
                        </div>
                        <div class="col-2">
                            <a href="<?= base_url('auth/login'); ?>" type="button" class="btn btn-dark btn-block">Batal</a>
                        </div>
                    </div>

                </form>


                </p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/private/plugins/jquery/jquery.min.js')?>"></script>

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

    <script src="<?= base_url('assets/auth'); ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/auth'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/auth'); ?>/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>