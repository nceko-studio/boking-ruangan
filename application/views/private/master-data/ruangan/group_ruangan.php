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
						<li class="breadcrumb-item">Ruangan</li>
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
									<h4 class="card-title">Tambah Group Ruangan</h4>
								</div>
							</div>
						</div>
						<form action="<?= site_url('private/master_data/ruangan/group_ruangan_new') ?>" method="POST">
							<div class="card-body">
                                <div class="form-group">
                                    <label for="id_jenis_ruangan">Pilih Jenis Ruangan</label>
                                    <select class="form-control" id="id_jenis_ruangan" name="id_jenis_ruangan" required>
                                        <option value="1">Pilih Jenis Ruangan</option>
                                        <?php foreach ($jenis_ruangan as $p) { ?>
                                            <option value="<?= $p->id_jenis_ruangan ?>"><?= $p->jenis_ruangan ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
								<div class="form-group">
									<label for="group_ruangan">Group Ruangan</label>
									<input type="text" class="form-control" id="group_ruangan" name="group_ruangan" placeholder="Group Runagan" required>
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
									<h4 class="card-title">Group Ruangan</h4>
								</div>
							</div>
						</div>
						<div class="card-body">
							<table id="jurusan_tabel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 5%;">NO</th>
										<th style="width: 45%;">Jenis Ruangan</th>
										<th style="width: 45%;">Group Ruangan</th>
										<th style="width: 5%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($group_ruangan as $v) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $v->jenis_ruangan; ?></td>
											<td><?= $v->group_ruangan; ?></td>
											<td>
												<a href="<?= base_url('private/master_data/ruangan/group_ruangan_hapus/' . $v->id_group_ruangan) ?>">
													<button class="btn bg-danger btn-xs" title="Hapus Group Ruangan" style="width: 30px;">
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