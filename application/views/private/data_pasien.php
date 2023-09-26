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
                            <h3 class="card-title">Data Pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="jenjang_tabel" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="width: 5%;">NO</th>
										<th style="width: 5%;">No MR</th>
										<th style="width: 25%;">Nama Pasien</th>
										<th style="width: 20%;">Ruangan Bed</th>
										<th style="width: 20%;">Dokter DPJP</th>
										<th style="width: 10%;">aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($user as $v) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $v->no_mr; ?></td>
											<td><?= $v->nama_user; ?></td>
											<td><?= $v->nama_ruangan; ?> / No. BED :<?= $v->no_bed; ?></td>
											<td><?= $v->nama_dokter; ?></td>
											<td>
											<?php if ($this->session->userdata('role') != 3){;?>
												<?php if ($v->is_confrim == "0"): ?>
												<a href="<?= base_url('private/pasien/verified/' . $v->no_register) ?>">
													<button class="btn bg-success btn-xs" title="Konfirmasi Berobat" style="width: 30px;">
														<i class="fas fa-check"></i>
													</button>
												</a>   
												<a href="<?= base_url('private/pasien/hapus/' . $v->no_register) ?>">
													<button class="btn bg-danger btn-xs" title="Batalkan Pesanan Ruangan" style="width: 30px;">
														<i class="fas fa-minus"></i>
													</button>
												</a>
												<?php else: ?>
												<a href="<?= base_url('private/pasien/tambah/' . $v->no_register) ?>">
													<button class="btn bg-info btn-xs" title="Atur Perawat" style="width: 30px;">
														<i class="fas fa-pen"></i>
													</button>
												</a>
												<a href="<?= base_url('private/pasien/pulang/' . $v->no_register) ?>">
													<button class="btn bg-success btn-xs" title="Proses Pulang" style="width: 30px;">
														<i class="fas fa-user-check"></i>
													</button>
												</a>   
												<?php endif; ?>        
											<?php }else{; ?>    
												<a href="<?= base_url('private/pasien/views/' . $v->no_register) ?>">
													<button class="btn bg-warning btn-xs" title="Liat Pasien" style="width: 30px;">
														<i class="fas fa-eye"></i>
													</button>
												</a>   
											<?php }; ?>                               
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
