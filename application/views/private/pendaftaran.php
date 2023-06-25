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
                    <form action="<?= base_url('private/pendaftaran/new') ?>" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Pasien</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pasien">
                            </div>
                            <div class="form-group">
                                <label for="tl">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tl" name="tl" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="tgl">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl" name="tgl" placeholder="Tanggal Lahir">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <div class="row" id="jk">
                                    &ensp;
                                    &ensp;
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin">
                                    <label class="form-check-label">Laki Lai</label>
                                    </div>
                                    &ensp;
                                    &ensp;
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" checked>
                                    <label class="form-check-label">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="status_kawin">Status Kawin</label>
                                    <select class="form-control" id="status_kawin" name="status_kawin" required>
                                        <option>Pilih Status Kawin</option>
                                        <?php foreach ($status_kawin as $sk) { ?>
                                            <option value="<?= $sk->id_status_kawin ?>"><?= $sk->status_kawin ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" id="agama" name="agama" required>
                                        <option>Pilih Agama</option>
                                        <?php foreach ($agama as $a) { ?>
                                            <option value="<?= $a->id_agama ?>"><?= $a->agama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
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
                                <div class="form-group">
                                    <label for="jenjang">Jenjang Pendidikan</label>
                                    <select class="form-control" id="jenjang" name="jenjang" required>
                                        <option>Pilih Jenjang Pendidikan</option>
                                        <?php foreach ($jenjang_pendidikan as $jp) { ?>
                                            <option value="<?= $jp->id_jenjang_pendidikan ?>"><?= $jp->jenjang_pendidikan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan Pendidikan</label>
                                    <select class="form-control" id="jurusan" name="jurusan" required>
                                        <option>Pilih Jurusan Pendidikan</option>
                                        <?php foreach ($jurusan_pendidikan as $jur) { ?>
                                            <option value="<?= $jur->id_jurusan_pendidikan ?>"><?= $jur->jurusan_pendidikan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="identitas">Identitas</label>
                                    <select class="form-control" id="identitas" name="identitas" required>
                                        <option>Pilih Jenis Identitas</option>
                                        <?php foreach ($identitas as $i) { ?>
                                            <option value="<?= $i->id_identitas ?>"><?= $i->identitas ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label for="ni">No Identitas</label>
                                <input type="text" class="form-control" id="ni" name="ni" placeholder="Nomor Identitas">
                            </div>
                            <div class="form-group">
                                <label for="kk">No Kartu Keluarga</label>
                                <input type="text" class="form-control" id="kk" name="kk" placeholder="Nomor Kartu Keluarga">
                            </div>
                            <div class="form-group">
                                <label for="nop">No Handphone</label>
                                <input type="text" class="form-control" id="nop" name="nop" placeholder="Nomor Handphone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email">
                            </div>
                            <div class="form-group">
                                <label for="aler">Riwayat Alergi</label>
                                <input type="text" class="form-control" id="aler" name="aler" placeholder="Riwayat Alergi">
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
                                <div class="form-group">
                                    <label for="id_dokter">DPJP</label>
                                    <select class="form-control" id="id_dokter" name="id_dokter" required>
                                        <option>Pilih Dokter</option>
                                        <?php foreach ($dokter as $d) { ?>
                                            <option value="<?= $d->id_user ?>"><?= $d->nama_user ?></option>
                                        <?php } ?>
                                    </select>
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