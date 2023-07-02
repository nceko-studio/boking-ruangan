		  <!-- Main Sidebar Container -->
		  <aside class="main-sidebar sidebar-dark-primary elevation-4">
		  	<!-- Brand Logo -->
		  	<a href="<?= base_url(); ?>" class="brand-link">
		  		<img src="<?= base_url('assets/private/dist/img/logo.png') ?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		  		<span class="brand-text font-weight-light">SIMBOR</span>
		  	</a>

		  	<!-- Sidebar -->
		  	<div class="sidebar">
		  		<!-- Sidebar user panel (optional) -->
		  		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		  			<div class="image">
		  				<img src="<?= base_url('assets/private/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
		  			</div>
		  			<div class="info">
		  				<a href="#" class="d-block"><?= $this->session->userdata('username') ?></a>
		  			</div>
		  		</div>

		  		<!-- Sidebar Menu -->
		  		<nav class="mt-2">
		  			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		  				<li class="nav-item">
		  					<a href="<?= base_url('dashboard/admin') ?>" class="nav-link">
		  						<i class="nav-icon fas fa-tachometer-alt"></i>
		  						<p>
		  							Dashboard
		  						</p>
		  					</a>
		  				</li>
		  				<li class="nav-item">
		  					<a href="#" class="nav-link">
		  						<i class="nav-icon fas fa-address-card"></i>
		  						<p>
								  Pendaftaran
		  							<i class="fas fa-angle-left right"></i>
		  						</p>
		  					</a>
		  					<ul class="nav nav-treeview">
		  						<li class="nav-item">
		  							<a href="<?= base_url('pendaftaran') ?>" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>Pasien Baru</p>
		  							</a>
		  						</li>
		  						<li class="nav-item">
		  							<a href="<?= base_url('pendaftaran_lama') ?>" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>Pasien Lama</p>
		  							</a>
		  						</li>
		  					</ul>
		  				</li>
		  				<li class="nav-item">
		  					<a href="<?= base_url('data_pasien') ?>" class="nav-link">
		  						<i class="nav-icon fas fa-users"></i>
		  						<p>
		  							Data Pasien
		  						</p>
		  					</a>
		  				</li>
		  				<li class="nav-item">
		  					<a href="<?= base_url('biodata_pasien') ?>" class="nav-link">
		  						<i class="nav-icon fas fa-users"></i>
		  						<p>
		  							Biodata Pasien
		  						</p>
		  					</a>
		  				</li>
						<?php if ($this->session->userdata('role') == 1){;?>
		  				<li class="nav-item">
		  					<a href="<?= base_url('data_ruangan')?>" class="nav-link">
		  						<i class="nav-icon fas fa-building"></i>
		  						<p>
		  							Data Ruangan
		  						</p>
		  					</a>
		  				</li>
		  				<li class="nav-item">
		  					<a href="#" class="nav-link">
		  						<i class="nav-icon fas fa-globe"></i>
		  						<p>
		  							Master Data
		  							<i class="right fas fa-angle-left"></i>
		  						</p>
		  					</a>
		  					<ul class="nav nav-treeview">
		  						<li class="nav-item">
		  							<a href="#" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>
		  									Master Ruangan
		  									<i class="right fas fa-angle-left"></i>
		  								</p>
		  							</a>
		  							<ul class="nav nav-treeview">
		  								<li class="nav-item">
		  									<a href="<?= base_url('gedung') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Gedung</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('lantai') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Lantai</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('jenis_ruangan') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Jenis Ruangan</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('group_ruangan') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Group Ruangan</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('kelas_rawatan') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Kelas Rawatan</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('kelompok_ruangan') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Kelompok Ruangan</p>
		  									</a>
		  								</li>
		  							</ul>
		  						</li>
		  						<li class="nav-item">
		  							<a href="#" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>
		  									Master Biodata
		  									<i class="right fas fa-angle-left"></i>
		  								</p>
		  							</a>
		  							<ul class="nav nav-treeview">
		  								<li class="nav-item">
		  									<a href="<?= base_url('agama') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Agama</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('identitas') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Identitas</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('status_kawin') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Status Kawin</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('status_pegawai') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Status Pegawai</p>
		  									</a>
		  								</li>
		  							</ul>
		  						</li>
		  						<li class="nav-item">
		  							<a href="#" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>
		  									Master Pendidikan
		  									<i class="right fas fa-angle-left"></i>
		  								</p>
		  							</a>
		  							<ul class="nav nav-treeview">
		  								<li class="nav-item">
		  									<a href="<?= base_url('jenjang') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Jenjang Pendidikan</p>
		  									</a>
		  								</li>
		  								<li class="nav-item">
		  									<a href="<?= base_url('jurusan') ?>" class="nav-link">
		  										<i class="far fa-dot-circle nav-icon"></i>
		  										<p>Jurusan Pendidikan</p>
		  									</a>
		  								</li>
		  							</ul>
		  						</li>
		  						<li class="nav-item">
		  							<a href="<?= base_url('unit_kerja') ?>" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>Unit Kerja</p>
		  							</a>
		  						</li>
		  					</ul>
		  				</li>
		  				<li class="nav-item">
		  					<a href="#" class="nav-link">
		  						<i class="nav-icon fas fa-users"></i>
		  						<p>
		  							Transaksi
		  							<i class="fas fa-angle-left right"></i>
		  						</p>
		  					</a>
		  					<ul class="nav nav-treeview">
		  						<li class="nav-item">
		  							<a href="<?= base_url('pegawai')?>" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>Pegawai</p>
		  							</a>
		  						</li>
		  						<li class="nav-item">
		  							<a href="<?= base_url('akun')?>" class="nav-link">
		  								<i class="far fa-circle nav-icon"></i>
		  								<p>Akun</p>
		  							</a>
		  						</li>
		  					</ul>
		  				</li>
		  				<li class="nav-item">
		  					<a href="<?= base_url('laporan')?>" class="nav-link">
		  						<i class="nav-icon fas fa-book"></i>
		  						<p>
		  							Laporan
		  						</p>
		  					</a>
		  				</li>
		  				<?php };?>
						<li class="nav-item">
		  					<a href="<?= base_url('logout'); ?>" class="nav-link">
		  						<i class="nav-icon fas fa-sign-out-alt"></i>
		  						<p>Log Out</p>
		  					</a>
		  				</li>
		  			</ul>
		  		</nav>
		  		<!-- /.sidebar-menu -->
		  	</div>
		  	<!-- /.sidebar -->
		  </aside>