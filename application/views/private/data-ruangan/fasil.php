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
				<div class="col-lg-12">

				
				<div class="card card-primary">
				<div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3 class="card-title">Data Fasilitas Ruangan <?= $ruangan->nama_ruangan; ?> - <?= $ruangan->lantai; ?></h3>
									
                                </div>
                                <div class="col-sm-6">
                                        <button class="btn bg-gradient-secondary float-lg-right" data-toggle="modal" data-target="#new-fasilitas" title="Data Fasilitas">New Fasilitas</button>
                                </div>
                            </div>
                        </div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="jenjang_tabel" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th style="width: 5%;">NO</th>
									<th style="width: 25%;">Fasilitas</th>
									<th style="width: 25%;">Deskripsi</th>
									<th style="width: 25%;">Gambar</th>
									<th style="width: 25%;">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($fasilitas as $v) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $v->fasilitas_ruangan; ?></td>
										<td><?= $v->deskripsi; ?></td>
										<td><?= $v->gambar; ?></td>
										<td>
										<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit-fasilitas-<?= $v->id_ruangan; ?>">Edit</button>
										<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-fasilitas-<?= $v->id_fasilitas_ruangan; ?>">Delete</button>	
									</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				</div>
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>

<?php foreach ($fasilitas as $v) : ?>
<div class="modal fade" id="edit-fasilitas-<?= $v->id_ruangan; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Fasilitas Ruangan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?= site_url('private/ruangan/editFasilitas') ?>" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $v->id_ruangan ?>">
                    <div class="form-group">
                        <label for="nf">Nama Fasilitas</label>
                        <input type="text" class="form-control" id="nf" name="nf" placeholder="Nama fasilitas" value="<?= $v->fasilitas_ruangan ?>">
                    </div>
                    <div class="form-group">
                        <label for="dsk">Deskripsi</label>
                        <input type="text" class="form-control" id="dsk" name="dsk" placeholder="Deskripsi" value="<?= $v->deskripsi ?>">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="delete-fasilitas-<?= $v->id_fasilitas_ruangan; ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Fasilitas Ruangan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus fasilitas ini?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                <a href="<?= site_url('private/ruangan/deleteFasilitas/' . $v->id_fasilitas_ruangan) ?>" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php endforeach; ?>



<div class="modal fade" id="new-fasilitas">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Fasilitas Ruangan </h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form action="<?= site_url('private/ruangan/addFasilitas') ?>" method="POST">
				<div class="modal-body">
					<input type="hidden" name="id" value="<?= $ruangan->id_ruangan; ?>">
                    <div class="form-group">
                        <label for="nf">Nama Fasilitas</label>
                        <input type="text" class="form-control" id="nf" name="nf" placeholder="Nama fasilitas">
                    </div>
                    <div class="form-group">
                        <label for="dsk">Deskripsi</label>
                        <input type="text" class="form-control" id="dsk" name="dsk" placeholder="Deskripsi">
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
<script src="<?= base_url('assets/private/plugins/jquery/jquery.min.js') ?>"></script>

<script>
	$(function() {
		$("#jenjang_tabel").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false
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
