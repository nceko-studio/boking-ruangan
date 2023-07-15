            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            	<div class="row">
            		<div class="col-lg-12 mb-10 order-0">
            			<div class="card">
            				<div class="card-header">
            					<div class="row">
            						<div class="col-lg-9">
            							<h4>
            								Boking Ruangan
            							</h4>
            						</div>
            					</div>
            				</div>
                            <form action="<?= base_url('public/pendaftaran/boking/new') ?>" method="POST">    
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="id_dokter">DPJP</label>
                                        <select class="form-control" id="id_dokter" name="id_dokter" required>
                                            <option>Pilih Dokter</option>
                                            <?php foreach ($dokter as $d) { ?>
                                                <option value="<?= $d->id_user ?>"><?= $d->nama_dokter ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <br />
                                    <div class="row">
                                    <div class="col-lg-1"></div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="jr">Jenis Rawatan</label>
                                                <div class="row" id="jr">
                                                    &ensp;
                                                    &ensp;
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_rawatan" value="1">
                                                    <label class="form-check-label">Rawat Inap</label>
                                                    </div>
                                                    &ensp;
                                                    &ensp;
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_rawatan" value="2">
                                                    <label class="form-check-label">Rawat Jalan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="ll">Laka Lantas</label>
                                                <div class="row" id="ll">
                                                    &ensp;
                                                    &ensp;
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="laka_lantas" value="0">
                                                    <label class="form-check-label">NO</label>
                                                    </div>
                                                    &ensp;
                                                    &ensp;
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="laka_lantas" value="1">
                                                    <label class="form-check-label">YES</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="DU">Dari UGD</label>
                                                <div class="row" id="DU">
                                                    &ensp;
                                                    &ensp;
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ugd" value="0">
                                                    <label class="form-check-label">NO</label>
                                                    </div>
                                                    &ensp;
                                                    &ensp;
                                                    <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="ugd" value="1">
                                                    <label class="form-check-label">YES</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lantai">Lantai</label>
                                                <select class="form-control" id="lantai" name="lantai" required>
                                                    <option>Pilih Lantai</option>
                                                    <?php foreach ($lantai as $d) { ?>
                                                        <option value="<?= $d->id_lantai ?>"><?= $d->lantai ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ruangan">Ruangan</label>
                                                <select class="form-control" id="ruangan" name="ruangan" required>
                                                    <option>Pilih Ruangan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="bed">Bed</label>
                                                <select class="form-control" id="bed" name="bed" required>
                                                    <option>Pilih Dokter</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- / Content -->

            <!-- jQuery -->
            <script src="<?= base_url('assets/private/plugins/jquery/jquery.min.js')?>"></script>

            <script>
                $('#lantai').change(function() {
                    var lantai = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('private/pendaftaran/ruang') ?>",
                        data: {
                            lantai: lantai
                        },
                        dataType: "json",
                        success: function(response) {
                            var options = '';
                            $.each(response, function(key, value) {
                                options += '<option value="' + value['id_ruangan'] + '">' + value['nama_ruangan'] + '</option>';
                            });
                            $('#ruangan').html(options);
                        }
                    });
                });
                $('#ruangan').change(function() {
                    var ruangan = $(this).val();
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('private/pendaftaran/bed') ?>",
                        data: {
                            ruangan: ruangan
                        },
                        dataType: "json",
                        success: function(response) {
                            var options = '';
                            $.each(response, function(key, value) {
                                options += '<option value="' + value['id_ruangan_bed'] + '">' + value['no_bed'] + '</option>';
                            });
                            $('#bed').html(options);
                        }
                    });
                });
            </script>