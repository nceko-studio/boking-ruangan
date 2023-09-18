            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
				<br><br>
            	<div class="row">
            		<div class="col-lg-12 mb-10 order-0">
            			<div class="card">
            				<div class="d-flex align-items-end row">
            					<div class="col-sm-7">
            						<div class="card-body">
            							<h2 class="card-title text-primary">Welcome Back <?= $this->session->userdata('username') ?>! 🎉</h2>
            							<p class="mb-4">
            								Sekarang Tanggal : <?= date('d-m-Y') ?>.
            							</p>
            						</div>
            					</div>
            					<div class="col-sm-5 text-center text-sm-left">
            						<div class="card-body pb-0 px-0 px-md-4">
            							<img src="<?= base_url('assets/public/img/illustrations/man-with-laptop-light.png') ?>" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
				<br><br>
            	<div class="row">
            		<div class="col-lg-4 mb-2 order-2 border-2">
            			<div class="card">
            				<div class="d-flex align-items-end row">
            					<div class="col-sm-7">
            						<div class="card-body">
            							<h3 class="card-title text-primary">Dokter</h3>
            							<p class="mb-4">
            								Dokter Aktif : <?= $dokter->jumlah_dokter ?>
            							</p>
            						</div>
            					</div>
            					<div class="col-sm-5 text-center text-sm-left">
            						<div class="card-body pb-0 px-0 px-md-4">
            							<img src="<?= base_url('assets/public/img/illustrations/dokter.png') ?>" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            		<div class="col-lg-4 mb-2 order-2 border-2">
            			<div class="card">
            				<div class="d-flex align-items-end row">
            					<div class="col-sm-7">
            						<div class="card-body">
            							<h3 class="card-title text-primary">Ruangan Bed</h3>
            							<p class="mb-4">
            								Bed Tersedia : <?= $ruangan->jumlah_ruangan_bed ?>
            							</p>
            						</div>
            					</div>
            					<div class="col-sm-5 text-center text-sm-left">
            						<div class="card-body pb-0 px-0 px-md-4">
            							<img src="<?= base_url('assets/public/img/illustrations/rs.png') ?>" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            		<div class="col-lg-4 mb-2 order-2 border-2">
            			<div class="card">
            				<div class="d-flex align-items-end row">
            					<div class="col-sm-7">
            						<div class="card-body">
            							<h3 class="card-title text-primary">Pasien Ranap</h3>
            							<p class="mb-4">
            								Pasien Ranap : <?= $pasien->jumlah_pasien ?>.
            							</p>
            						</div>
            					</div>
            					<div class="col-sm-5 text-center text-sm-left">
            						<div class="card-body pb-0 px-0 px-md-4">
            							<img src="<?= base_url('assets/public/img/illustrations/pasien.png') ?>" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- / Content -->
