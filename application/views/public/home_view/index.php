<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title bg-white text-center text-primary  mb-5 p-4">Informasi Ruangan</h3>
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
                            <?php $no = 1;
                            foreach ($info_ruangan as $in) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $in['lantai']; ?></td>
                                    <td><?= $in['nama_ruangan']; ?></td>
                                    <td class="">Tersedia</td>
                                    <td><button class="btn btn-success detail-btn">Detail</button></td>

                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </table>
            </div>

            <?php foreach ($info_ruangan as $in) { ?>
                <div class="col-lg-2 col-md-4 wow fadeInUp detail-container float-right" data-wow-delay="0.5s">
                    <!-- detail-container content -->
                    <h5>Informasi Kamar</h5>

                    <form action="<?= base_url('public/ruangan/info_ruangan/pesan/' . $in['id_ruangan']); ?>" method="post">
                        <div class="row g-0">
                            <p><?= $in['lantai']; ?> (Ruangan Perawatan Anak)</p>
                            <p>Kelas: <?= $in['kelas_rawatan']; ?></p>
                            <p class="text-center">Foto Ruangan</p>
                            <img src="<?= base_url('assets'); ?>/public/img/avatars/6.png" alt="" width="40px">
                            <p>Keterangan Kamar:</p>
                            <li>Kelas <?= $in['kelas_rawatan']; ?> merupakan ruangan bangsai</li>
                            <p>Status Kamar: Tersedia</p>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Pesan Sekarang</button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Contact End -->