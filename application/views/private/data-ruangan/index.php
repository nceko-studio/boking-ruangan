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
                                    <h3 class="card-title">Data Ruangan</h3>
                                </div>
                                <div class="col-sm-6">
                                        <button class="btn bg-gradient-secondary float-lg-right" data-toggle="modal" data-target="#new-ruangan" title="Data Ruangan">New Ruangan</button>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="jenjang_tabel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 5%;">NO</th>
										<th style="width: 25%;">NAMA RUANGAN</th>
										<th style="width: 25%;">Nomer Ruangan</th>
										<th style="width: 25%;">Gedung / Lantai</th>
										<th style="width: 10%;">Jumlah Bed</th>
										<th style="width: 10%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($ruangan as $v) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $v->nama_ruangan; ?></td>
											<td><?= $v->no_ruangan; ?></td>
											<td><?= $v->gedung; ?> / <?= $v->lantai; ?></td>
											<td><?= $v->jumlah_bed; ?></td>
											<td>
												<a href="<?= base_url('private/ruangan/bed/' . $v->id_ruangan) ?>">
													<button class="btn bg-primary btn-xs" title="Tambah Bed" style="width: 30px;">
														<i class="fas fa-bed"></i>
													</button>
												</a>
												<a href="<?= base_url('private/ruangan/fasilitas/' . $v->id_ruangan) ?>">
													<button class="btn bg-secondary btn-xs" title="Setting Fasilitas" style="width: 30px;">
														<i class="fas fa-building"></i>
													</button>
												</a>
												<a href="<?= base_url('private/ruangan/hapus/' . $v->id_ruangan) ?>">
													<button class="btn bg-danger btn-xs" title="Hapus Ruangan" style="width: 30px;">
														<i class="fas fa-minus"></i>
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

<div class="modal fade" id="new-ruangan">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Ruangan Baru</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= site_url('private/ruangan/new') ?>" method="POST">
				<div class="modal-body">
                    <div class="form-group">
                        <label for="nr">Nama Rangan</label>
                        <input type="text" class="form-control" id="nr" name="nr" placeholder="Nama Ruangan">
                    </div>
                    <div class="form-group">
                        <label for="nmr">No Ruangan</label>
                        <input type="text" class="form-control" id="nmr" name="nmr" placeholder="Nama Ruangan">
                    </div>
					<div class="form-group">
						<label for="id_group">Pilih Group Ruangan</label>
						<select class="form-control" id="id_group" name="id_group" required>
							<option>Pilih Group Ruangan</option>
							<?php foreach ($group as $g) { ?>
								<option value="<?= $g->id_group_ruangan ?>"><?= $g->group_ruangan ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="id_kelas">Pilih Kelas Rawatan</label>
						<select class="form-control" id="id_kelas" name="id_kelas" required>
							<option>Pilih Kelas Rawatan</option>
							<?php foreach ($kelas as $s) { ?>
								<option value="<?= $s->id_kelas_rawatan ?>"><?= $s->kelas_rawatan ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="id_kelompok">Pilih Kelompok Ruangan</label>
						<select class="form-control" id="id_kelompok" name="id_kelompok" required>
							<option>Pilih Kelompok Ruangan</option>
							<?php foreach ($kelompok as $k) { ?>
								<option value="<?= $k->id_kelompok_ruangan ?>"><?= $k->kelompok_ruangan ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="id_gedung">Pilih Gedung</label>
						<select class="form-control" id="id_gedung" name="id_gedung" required>
							<option>Pilih Gedung</option>
							<?php foreach ($gedung as $g) { ?>
								<option value="<?= $g->id_gedung ?>"><?= $g->gedung ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="id_lantai">Pilih Lantai</label>
						<select class="form-control" id="id_lantai" name="id_lantai" required>
							<option>Pilih Lantai</option>
							<?php foreach ($lantai as $l) { ?>
								<option value="<?= $l->id_lantai ?>"><?= $l->lantai ?></option>
							<?php } ?>
						</select>
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