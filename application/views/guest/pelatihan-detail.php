<!-- BREADCUMP  -->
<section id="breadcump" class="py-3 mb-0">
    <div class="container container-extend">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('pelatihan') ?>">Kelas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $pelatihan->judul ?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- BREADCUMP DONE -->

<!-- HEADER COURSE PAGE -->
<section class="">
    <div class="container container-extend contianer-extend">
        <div class="rounded rounded-4 px-4 py-4 mb-4" style="background-color: #751119;">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="head-section">
                        <h4 class="text-white mb-1 font-32 weight-reguler"><?= $pelatihan->judul ?></h4>
                        <p class="text-white mb-2 font-18 weight-light">Mulailah, beralih, atau memajukan karir mu dengan lebih dari 100 kursus dan sertifikat profesional</p>
                        <div class="badge rounded-pill mb-2 text-bg-danger font-8 weight-light py-2 px-3">Beginner</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="deskripsi-pelatihan shadow border rounded rounded-4 px-4 py-4 mb-4 mt-5 position-relative">
                    <span class="tittle-deskripsi text-center">DESKRIPSI</span>
                    <!-- BAGIAN DINAMIS SESUAI DENGAN QUILL -->
                    <?= $pelatihan->deskripsi ?>
                    <!-- BAGIAN DINAMIS QUILL SELESAI -->
                </div>

                <!-- PERTANYAAN -->
                <section class="mb-4 d-lg-block d-none">
                    <div class="text-center">
                        <div class="card border-0 tanyalebihlanjut-item-pelatihan align-items-center">
                            <p class="text-white mb-2 font-32 weight-reguler">Tertarik dengan Pelatihan kami?</p>
                            <p class="text-white mb-4 font-14">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We</p>
                            <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3">Tanya Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                        </div>
                    </div>
                </section>
                <!-- PERTANYAAN DONE -->
                
            </div>
            <div class="col-lg-4">
                <div class="deskripsi-pelatihan-kanan">
                    <div class="pelatihan-item card shadow border-0 rounded-3 mb-4">
                        <img class="rounded shadow" src="<?= base_url('uploads/pelatihan/' . $pelatihan->cover_img) ?>" alt="Cover Pelatihan" style="height: 249px;">
                        <div class="card-body">
                            <ul class="detail-info">
                                <li class="detail-info-item mb-2">
                                    <div class="material-symbols-outlined">date_range</div>
                                    <?php 
                                        if($pelatihan->tanggal_mulai == $pelatihan->tanggal_selesai){
                                            $tanggal = longdate_indo($pelatihan->tanggal_mulai);
                                        }elseif(date('m', strtotime($pelatihan->tanggal_mulai)) == date('m', strtotime($pelatihan->tanggal_selesai))){
                                            $tanggal = date('d', strtotime($pelatihan->tanggal_mulai))." - ".mediumdate_indo($pelatihan->tanggal_selesai);
                                        }else{
                                            $tanggal = longdate_indo($pelatihan->tanggal_mulai)." - ".longdate_indo($pelatihan->tanggal_selesai);
                                        }
                                    ?>
                                    <p class="mb-0 ms-3 font-16"><?= $tanggal ?></p>
                                </li>
                                <li class="detail-info-item mb-2">
                                    <div class="material-symbols-outlined">alarm</div>
                                    <p class="mb-0 ms-3 font-16"><?= $pelatihan->waktu ?></p>
                                </li>
                                <li class="detail-info-item mb-2">
                                    <div class="material-symbols-outlined">pin_drop</div>
                                    <p class="mb-0 ms-3 font-16">Via Zoom Meeting</p>
                                </li>
                            </ul>
    
                            <hr class="my-1 border-top">
    
                            <p class="font-16 weight-bold mb-2">Apa yang akan kamu dapat</p>
                            <ul class="detail-info">
                                <li class="detail-info-item mb-2">
                                    <div class="material-symbols-outlined">videocam</div>
                                    <p class="mb-0 ms-3 font-16">Rekaman Pelatihan</p>
                                </li>
                                <li class="detail-info-item mb-2">
                                    <div class="material-symbols-outlined">newspaper</div>
                                    <p class="mb-0 ms-3 font-16">E-Materi</p>
                                </li>
                                <li class="detail-info-item mb-2">
                                    <div class="material-symbols-outlined">sell</div>
                                    <p class="mb-0 ms-3 font-16">Free Akses</p>
                                </li>
                            </ul>
    
                            <hr class="my-1 border-top">
                            
                            <?php if($pelatihan->diskon != 0): ?>
                                <p class="mb-0 font-12 weight-semi text-muted">Promo <s class="text-danger">Rp. <?= rupiah($pelatihan->harga) ?></s></p>
                                <h5 class="mb-3"><?= discount($pelatihan->harga, $pelatihan->diskon) ?></h5>
                            <?php else: ?>
                                <h5 class="mb-3"><?= rupiah($pelatihan->harga) ?></h5>
                            <?php endif; ?>
                            <button class="btn btn-light rounded-pill w-100 text-uppercase text-white btn-redirect font-16 weight-semi py-3 shadow" data-url="<?= site_url('pelatihan/' . $pelatihan->flag . '/daftar') ?>">Daftar Pelatihan</button>
                        </div>
                    </div>
                    <div class="deskripsi-pelatihan shadow border rounded rounded-4 px-4 py-4 mb-4 position-relative text-center">
                        <div class="badge rounded-pill mb-2 text-bg-danger font-12 weight-light py-2 px-3">TENTANG TUTOR</div>
                        <br>
                        <img class="rounded rounded-circle my-2" src="http://localhost/tax-session/uploads/pelatihan/39bb136be363401a1ce9408d07207457.jpg" style="object-fit: cover;height: 120px;width: 120px; border: solid 5px #751119;" alt="Cover Pelatihan">
                        <p class="text-center font-16 weight-bold mb-1"><?= $pelatihan->pemateri ?></p>
                        <p class="font-14 mb-1" style="text-align: justify; color: #7E7E7E;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tincidunt mauris. Praesent sagittis rutrum augue id sodales. Morbi vulputate interdum ullamcorper. In in lorem sed risus suscipit laoreet. Donec laoreet sapien nec purus tempor auctor. Integer at magna nec elit fringilla ultrices ut ac felis. Cras nec blandit arcu.</p>
                    </div>
                </div>

                <!-- PERTANYAAN -->
                <section class="mb-4 d-lg-none d-block">
                    <div class="text-center">
                        <div class="card border-0 tanyalebihlanjut-item-pelatihan align-items-center">
                            <p class="text-white mb-2 font-32 weight-reguler">Tertarik dengan Pelatihan kami?</p>
                            <p class="text-white mb-4 font-14">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We</p>
                            <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3">Tanya Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                        </div>
                    </div>
                </section>
                <!-- PERTANYAAN DONE -->

            </div>
        </div>
    </div>
</section>
<!-- HEADER COURSE PAGE DONE-->