<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="section-title bg-white text-center text-primary px-3 mb-5">Informasi Ruangan</h4>
        </div>
        <div class="row g-4">
            <div class="col-lg-10 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
                <table class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Lantai</th>
                                <th>Nama Ruangan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lantai I</td>
                                <td>UGD</td>
                                <td class="">Tersedia</td>
                                <td><button class="btn btn-success detail-btn">Detail</button></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Lantai I</td>
                                <td>Apotik</td>
                                <td>Buka</td>
                                <td><button class="btn btn-success detail-btn">Detail</button></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lantai I</td>
                                <td>Poli Anak</td>
                                <td>Buka</td>
                                <td><button class="btn btn-success detail-btn">Detail</button></td>
                            </tr>
                        </tbody>
                    </table>
                </table>
            </div>
            <div class="col-lg-2 col-md-4 wow fadeInUp detail-container float-right" data-wow-delay="0.5s">
                <!-- detail-container content -->
                <h5>Informasi Kamar</h5>
                <form>
                    <div class="row g-0">
                        <p>Lantai 1 (Ruangan Perawatan Anak)</p>
                        <p>Kelas: 1A</p>
                        <p class="text-center">Foto Ruangan</p>
                        <img src="<?= base_url('assets'); ?>/public/img/avatars/6.png" alt="" width="40px">
                        <p>Keterangan Kamar:</p>
                        <li>Kelas 1A merupakan ruangan bangsai</li>
                        <p>Status Kamar: Tersedia</p>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Pesan Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->