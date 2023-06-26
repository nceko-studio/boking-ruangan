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
										<th style="width: 25%;">Nama Pasien</th>
										<th style="width: 20%;">Ruangan</th>
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
											<td><?= $v->nama_user; ?></td>
											<td><?= $v->tempat_lahir; ?>, <?= date('d-m-Y', strtotime($v->tgl_lahir)); ?></td>
											<td><?= $v->no_hp; ?><br/> <?= $v->email; ?></td>
											<td><?= $v->tempat_lahir; ?>, <?= date('d-m-Y', strtotime($v->tgl_lahir)); ?></td>
											<td><?= $v->no_hp; ?><br/> <?= $v->email; ?></td>
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