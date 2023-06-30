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
						<li class="breadcrumb-item">Transaksi</li>
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
									<h4 class="card-title">Tambah Akun</h4>
								</div>
							</div>
						</div>
						<form action="<?= site_url('private/transaksi/akun/new') ?>" method="POST">
							<div class="card-body">
                                <div class="form-group">
                                    <label for="pegawai">Pilih Pegawai</label>
                                    <select class="form-control" id="pegawai" name="pegawai" required>
                                        <option>Pilih Pegawai</option>
                                        <?php foreach ($pegawai as $p) { ?>
                                            <option value="<?= $p->id_user ?>"><?= $p->nama_pegawai ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
								</div>
                                <div class="form-group">
                                    <label for="role">Pilih Role</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option>Pilih Role</option>
                                        <?php foreach ($user as $r) { ?>
                                            <option value="<?= $r->id_role ?>"><?= $r->role ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                        <label for="DU">Status Akun</label>
                                        <div class="row" id="DU">
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sts" value="0">
                                            <label class="form-check-label">Pending</label>
                                            </div>
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sts" value="1">
                                            <label class="form-check-label">Aktif</label>
                                            </div>
                                            &ensp;
                                            &ensp;
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sts" value="2">
                                            <label class="form-check-label">Suspend</label>
                                            </div>
                                        </div>
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
										<th style="width: 20%;">Username</th>
										<th style="width: 20%;">Nama Pengguna</th>
										<th style="width: 15%;">Status</th>
										<th style="width: 15%;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($akun as $v) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $v->username; ?></td>
											<td><?= $v->nama_lengkap; ?></td>
											<?php if ($v->is_active == "0"): ?>
											<td>Pending</td>
											<?php elseif ($v->is_active == "1"): ?>
											<td>Aktif</td>
											<?php else: ?>
											<td>Suspend</td>
											<?php endif;?>
											<td>
												<?php if ($v->is_active != "1"): ?>
													<a href="<?= base_url('private/transaksi/akun/aktif/' . $v->id_akun) ?>">
														<button class="btn bg-success btn-xs" title="Reset Password" style="width: 30px;">
															<i class="fas fa-check"></i>
														</button>
													</a>
												<?php endif;?>
												<?php if ($v->is_active == "1"): ?>
													<a href="<?= base_url('private/transaksi/akun/suspend/' . $v->id_akun) ?>">
														<button class="btn bg-danger btn-xs" title="Reset Password" style="width: 30px;">
															<i class="fas fa-minus"></i>
														</button>
													</a>
												<?php endif;?>
												<a href="<?= base_url('private/transaksi/akun/kunci/' . $v->id_akun) ?>">
													<button class="btn bg-warning btn-xs" title="Reset Password" style="width: 30px;">
														<i class="fas fa-key"></i>
													</button>
												</a>
												<a href="<?= base_url('private/transaksi/akun/hapus/' . $v->id_akun) ?>">
													<button class="btn bg-danger btn-xs" title="Hapus Akun" style="width: 30px;">
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