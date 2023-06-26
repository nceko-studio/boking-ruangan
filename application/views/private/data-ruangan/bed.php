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
									<h4 class="card-title">Tambah Bed Ruangan <?= $ruangan->nama_ruangan; ?></h4>
								</div>
							</div>
						</div>
						<form action="<?= site_url('private/ruangan/bed_new/').$ruangan->id_ruangan; ?>" method="POST">
							<div class="card-body">
								<div class="form-group">
									<label for="bed">Agama</label>
									<input type="text" class="form-control" id="id_ruangan" name="id_ruangan" value="<?= $ruangan->id_ruangan; ?>" hidden>
									<input type="text" class="form-control" id="bed" name="bed" placeholder="Nomer Untuk Bed" required>
								</div>
                                <div class="form-group">
                                    <label for="kondisi">Kondisi Bed</label>
                                    <select class="form-control" id="kondisi" name="kondisi" required>
                                        <option value="1">Pilih Kondisi Bed</option>
                                        <option value="1">Baik</option>
                                        <option value="0">Rusak</option>
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
									<h4 class="card-title">Daftar Bed Ruangan <?= $ruangan->nama_ruangan; ?></h4>
								</div>
							</div>
						</div>
						<div class="card-body">
							<table id="jenjang_tabel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 5%;">NO</th>
										<th style="width: 45%;">Nomer Bed</th>
										<th style="width: 45%;">Kondisi</th>
										<th style="width: 5%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($bed as $v) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $v->no_bed; ?></td>
											<?php if($v->kondisi == "0"):?>
												<td>Rusak</td>
											<?php else :?>
												<td>baik</td>
											<?php endif; ?>
											<td>
												<a href="<?= base_url('private/ruangan/bed_hapus/' . $v->id_ruangan_bed) ?>">
													<button class="btn bg-danger btn-xs" title="Hapus Agama" style="width: 30px;">
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