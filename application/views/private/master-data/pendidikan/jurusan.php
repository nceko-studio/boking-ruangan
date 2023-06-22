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
						<li class="breadcrumb-item">Master Data</li>
						<li class="breadcrumb-item">Pendidikan</li>
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
				<div class="col-lg-4">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-lg-10">
									<h4 class="card-title">Tambah Jurusan Pendidikan</h4>
								</div>
							</div>
						</div>
						<form action="<?= site_url('private/master_data/pendidikan/jurusan_new') ?>" method="POST">
							<div class="card-body">
                                <div class="form-group">
                                    <label for="id_jenjang">Pilih Jenjang Pendidikan</label>
                                    <select class="form-control" id="id_jenjang" name="id_jenjang" required>
                                        <option>Pilih Jenjang Pendidikan</option>
                                        <?php foreach ($jenjang as $p) { ?>
                                            <option value="<?= $p->id_jenjang_pendidikan ?>"><?= $p->jenjang_pendidikan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
								<div class="form-group">
									<label for="jurusan">Jurusan Pendidikan</label>
									<input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan Pendidikan" required>
								</div>
							</div>
							<div class="card-footer justify-content-right">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
						</form>
						<!-- /.card -->
					</div>

				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-lg-10">
									<h4 class="card-title">Jurusan Pendidikan</h4>
								</div>
							</div>
						</div>
						<div class="card-body">
							<table id="jurusan_tabel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 5%;">NO</th>
										<th style="width: 45%;">Jenjang Pendidikan</th>
										<th style="width: 45%;">Jurusan Pendidikan</th>
										<th style="width: 5%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($jurusan as $v) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $v->jenjang_pendidikan; ?></td>
											<td><?= $v->jurusan_pendidikan; ?></td>
											<td>
												<a href="<?= base_url('private/master_data/pendidikan/jurusan_hapus/' . $v->id_jurusan_pendidikan) ?>">
													<button class="btn bg-danger btn-xs" title="Hapus Keting" style="width: 30px;">
														<i class="fas fa-user-minus"></i>
													</button>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- /.card -->
					</div>
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
    $("#jurusan_tabel").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#jurusan_tabel_wrapper .col-md-6:eq(0)');
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