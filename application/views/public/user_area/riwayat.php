            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            	<div class="row">
            		<div class="col-lg-12 mb-10 order-0">
            			<div class="card">
            				<div class="card-header">
            					<div class="row">
            						<div class="col-lg-9">
            							<h4>
            								Riwayat Berobat
            							</h4>
            						</div>
            					</div>
            				</div>
            				<div class="card-body">
            					<?php if (!empty($error)) : ?>
            						<div class="alert alert-danger alert-dismissible" role="alert">
            							<?= $error ?>
            							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            						</div>
            					<?php endif; ?>

            					<?php if (!empty($success)) : ?>
            						<div class="alert alert-success alert-dismissible" role="alert">
            							<?= $error ?>
            							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            						</div>
            					<?php endif; ?>

            					<table id="example" class="table table-striped" style="width:100%">
            						<thead>
            							<tr>
            								<th style="width: 5%;">NO</th>
            								<th style="width: 15%;">Tanggal Berobat</th>
            								<th style="width: 5%;">Status</th>
            								<th style="width: 15%;">Ruangan Bed</th>
            								<th style="width: 15%;">Dokter Penanggung Jawab</th>
            								<th style="width: 15%;">Tanggal Selesai</th>
            								<th style="width: 25%;">Keterangan</th>
            							</tr>
            						</thead>
            						<tbody>
            							<?php $no = 1; ?>
            							<?php foreach ($riwayat as $v) : ?>
            								<tr>
            									<td><?= $no++ ?></td>
            									<td><?= $v->tanggal_berobat; ?></td>
            									<td><?= $v->status; ?></td>
												<?php if(!empty($v->no_bed)): ?>
													<td><?= $v->nama_ruangan; ?> / No. <?= $v->no_bed; ?></td>
												<?php else: ?>
													<td>-</td>
												<?php endif; ?>
												<?php if(!empty($v->nama_dokter)): ?>
            										<td><?= $v->nama_dokter; ?></td>
												<?php else: ?>
													<td>-</td>
												<?php endif; ?>
            									<td><?= $v->tanggal_selesai; ?></td>
            									<td><?= $v->ket_laporan; ?></td>
            								</tr>
            							<?php endforeach; ?>
            						</tbody>
            					</table>

            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- / Content -->

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
            	$(document).ready(function() {
            		$('#viewTanaman').on('show.bs.modal', function(event) {
            			var button = $(event.relatedTarget);
            			var url = button.data('url');
            			var modal = $(this);

            			// Permintaan AJAX
            			$.ajax({
            				url: url,
            				type: 'GET',
            				dataType: 'html',
            				success: function(response) {
            					// Memuat konten ke dalam modal
            					modal.find('.modal-body').html(response);
            				},
            				error: function(xhr, status, error) {
            					// Menampilkan pesan jika terjadi kesalahan
            					console.log(error);
            					modal.find('.modal-body').html('<p>Terjadi kesalahan. Silakan coba lagi nanti.</p>');
            				}
            			});
            		});
            	});
            </script>
