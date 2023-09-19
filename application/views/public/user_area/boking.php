            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            	<div class="row">
            		<div class="col-lg-12 mb-10 order-0">
            			<div class="card">
            				<div class="card-header">
            					<div class="row">
            						<div class="col-lg-9">
            							<h4>
            								Daftar Ranap
            							</h4>
            						</div>
            					</div>
            				</div>
                            <form action="<?= base_url('public/pendaftaran/boking/new') ?>" method="POST">    
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
												<label for="tanggal" class="col-sm-6 col-form-label form-label">Tanggal Berobat</label>
												<div class="col-sm-12">
													<input type="date" class="form-control" id="tanggal" name="tanggal">
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
												<label for="waktu" class="col-sm-3 col-form-label form-label">Jam Berobat</label>
												<div class="col-sm-12">
													<input type="time" class="form-control" id="waktu" name="waktu" step="1">
												</div>
                                            </div>
                                        </div>
                                    </div>
									<br/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
												<label for="gejala" class="col-sm-6 col-form-label form-label">Gejala yang di rasakan</label>
												<div class="col-sm-12">
													<textarea class="form-control" id="gejala" name="gejala"></textarea>
												</div>
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
