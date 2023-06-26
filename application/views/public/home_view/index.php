<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title bg-white text-center text-primary  mb-5 p-4">Informasi Ruangan</h3>
        </div>
        <div class="row g-4">
            <div class="col-lg-10 col-md-2 wow fadeInUp" data-wow-delay="0.1s">
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
                        foreach ($ruangan as $ru) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $ru->lantai; ?></td>
                                <td><?= $ru->nama_ruangan; ?></td>
                                <td class="">Tersedia</td>
                                <td><button class="btn btn-success detail-btn" data-id="<?= $ru->id_ruangan; ?>">Detail</button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <?php foreach ($info_ruangan as $in) { ?>
                <div class="col-lg-2 col-md-4 wow fadeInUp detail-container float-right" data-wow-delay="0.5s" data-id="<?= $in['id_ruangan']; ?>">
                    <!-- detail-container content -->
                    <h5>Informasi Kamar</h5>

                        <div class="row g-0">
                            <p><?= $in['lantai']; ?> (Ruangan Perawatan Anak)</p>
                            <p>Kelas: <?= $in['kelas_rawatan']; ?></p>
                            <p class="text-center">Foto Ruangan</p>
                            <img src="<?= base_url('assets'); ?>/public/img/avatars/6.png" alt="" width="40px">
                            <p>Keterangan Kamar:</p>
                            <li>Kelas <?= $in['kelas_rawatan']; ?> merupakan ruangan bangsai</li>
                            <p>Status Kamar: Tersedia</p>
                            <div class="col-12">
                                <a href="<?= base_url('login') ?>" class="btn btn-primary w-100 py-3" >Pesan Sekarang</a>
                            </div>
                        </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- JavaScript -->
<script>
    // Ambil semua elemen tombol detail
    const detailButtons = document.querySelectorAll('.detail-btn');

    // Loop melalui setiap tombol detail
    detailButtons.forEach(button => {
    // Tambahkan event listener saat tombol detail diklik
    button.addEventListener('click', function() {
        // Dapatkan ID ruangan dari atribut data-id pada tombol detail
        const ruanganId = button.getAttribute('data-id');
        
        // Dapatkan detail-container dengan ID yang sesuai
        const detailContainer = document.querySelector(`.detail-container[data-id="${ruanganId}"]`);
        
        // Sembunyikan semua detail-container kecuali yang sesuai
        const allDetailContainers = document.querySelectorAll('.detail-container');
        allDetailContainers.forEach(container => {
        if (container.getAttribute('data-id') === ruanganId) {
            container.style.display = 'none';
        } else {
            container.style.display = 'block';
        }
        });
    });
    });

    // Ambil semua elemen tombol close pada detail-container
    const closeButtons = document.querySelectorAll('.detail-container .close-btn');

    // Loop melalui setiap tombol close
    closeButtons.forEach(button => {
    // Tambahkan event listener saat tombol close diklik
    button.addEventListener('click', function() {
        // Dapatkan detail-container yang berisi tombol close
        const detailContainer = button.closest('.detail-container');
        
        // Sembunyikan detail-container
        detailContainer.style.display = 'none';
    });
    });

</script>
