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
				<div class="col-lg-4">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-lg-10">
									<h4 class="card-title">Perawat Untuk <?= $user->nama_user; ?></h4>
								</div>
							</div>
						</div>
						<form action="<?= site_url('private/pasien/tambah_proses/').$user->no_register; ?>" method="POST">
							<div class="card-body">
                                <div class="form-group">
                                    <label for="perawat">Perawat</label>
									<input type="text" class="form-control" id="no_register" name="no_register" value="<?= $user->no_register; ?>" hidden>
                                    <select class="form-control" id="perawat" name="perawat" required>
                                        <option value="1">Pilih Perawat</option>
										<?php foreach ($perawat as $d) { ?>
                                            <option value="<?= $d->id_user ?>"><?= $d->nama_dokter ?></option>
                                        <?php } ?>
                                    </select>
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
									<h4 class="card-title">Perawat Untuk Pasien <?= $user->nama_user; ?></h4>
								</div>
							</div>
						</div>
						<div class="card-body">
							<table id="jenjang_tabel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 5%;">NO</th>
										<th style="width: 45%;">Nama Perawat</th>
										<th style="width: 5%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($long_leng as $ll) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $ll->nama_perawat; ?></td>
											<td>
												<a href="<?= base_url('private/pasien/tambah_hapus/' . $ll->id_detail_perawat.'/'.$user->no_register) ?>">
													<button class="btn bg-danger btn-xs" title="Hapus Perawat" style="width: 30px;">
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