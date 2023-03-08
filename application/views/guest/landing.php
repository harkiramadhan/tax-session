<!-- HEADER LANDING -->
<section id="header-landing" class="position-relative" style="background: #751119;">
    <div class="container container-extend">

        <div class="row">
            <div class="col-lg-7 d-flex align-items-center">

                <div class="mx-lg-5 mx-3 pt-4 pb-5 justify-items-start">
                    <!-- <p class="text-uppercase text-white">Indonesian Tax Education Center</p> -->
                    <h1 class="text-white">Indonesian <span class="weight-bold">Tax <br> Education</span> Center</h1>
                    <p class="text-white mb-3 text-justify"> <span class="weight-semi">Kami menyediakan pendidikan pajak antara lain:</span> <br> Beginners (Dasar-dasar pajak), Brevet Akuntansi Pajak, Perencanaan Pajak, Pemeriksaan Pajak, Bukti Permulaan & Penyidikan KUP, PPh 21, PPh 23, PPh 26, PPh Badan, PPN</p>
                    <p class="text-white mb-3 weight-light font-14">Yang dibawakan oleh para instruktur berkualitas yang memiliki keahlian yang sesuai dengan bidangnya seperti praktisi perpajakan dan akademisi.</p>
                    <a class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3" href="<?= site_url('pelatihan') ?>" style="width: fit-content;">Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></a>
                </div>
                <br>
                <br>
                
            </div>
            <div class="col-lg-5 d-flex justify-content-center">
                <img src="<?= base_url('/assets/img/guest/img-header-main.svg') ?>" alt="" class="w-75">
            </div>
        </div>
    </div>

    <!-- <div class="bg-header" style="background-image: url(<?= base_url('/assets/img/bg-header-fix.svg') ?>);"></div> -->
</section>
<!-- HEADER LANDING END -->

<!-- PATNER LOGO -->
<section id="partner" class="container container-extend py-5">
    <div class="list-partner">
        <?php foreach($partners->result() as $pr){ ?>
            <a href="<?= $pr->link ?>" target="_blank">
                <img src="<?= base_url('uploads/partner/' . $pr->img) ?>" alt="">
            </a>    
        <?php } ?>
    </div>
</section>
<!-- PATNER LOGO END -->

<!-- BANNER -->
<section id="banner">
    <div class="container container-extend list-banner">
        <?php foreach($banners->result() as $rb){ ?>
            <a class="banner-item" href="<?= $pr->link ?>" target="_blank">
                <img src="<?= base_url('uploads/banners/' . $rb->img) ?>" alt="">
            </a>
        <?php } ?>
    </div>
</section>
<!-- BANNER END -->

<!-- BENEFIT PELATIHAN -->
<section id="benefit" class="py-5">
    <div class="container container-extend">
        <div class="head-section">
            <p class="text-uppercase mb-0">We provide tons of pathskill</p>
            <h1 class="ms--2">Benefit <span>Pelatihan</span></h1>
        </div>

        <div class="row">
            <?php 
                $no = 1;
                foreach($benefits->result() as $bnr){ 
            ?>
                <div class="col-lg-3">
                    <div class="card-benefit card border p-3 mb-lg-0 mb-4" <?= ($no == 2 || $no == 4) ? 'style="background: #751119;"' : '' ?>>
                        <div class="card-body">
                            <img class="mb-5 <?= ($no == 2) ? 'text-white' : '' ?>" src="<?= base_url('uploads/benefit/' . $bnr->img) ?>" alt="">
                            <h4 class="mb-3 <?= ($no == 2) ? 'text-white' : '' ?>"><?= $bnr->judul ?></h4>
                            <p class="mb-0 <?= ($no == 2) ? 'text-white' : '' ?>"><?= $bnr->deskripsi ?></p>
                        </div>
                    </div>    
                </div>
            <?php $no++; } ?>
        </div>
    </div>

    <div class="circle-float d-lg-block d-none">
    </div>
</section>
<!-- BENEFIT PELATIHAN DONE -->

<!-- STATISTIK -->
<!-- <section id="pelatihan">
    <div class="container container-extend py-5">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center d-lg-block d-none">
                <img src="<?= base_url('/assets/img/guest/img-header-main.svg') ?>" alt="" class="w-75">
            </div>
            <div class="col-lg-6">
                <div class="head-section">
                    <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                    <h1 class="ms--2">Statistik<span> Pelatihan</span></h1>
                </div>
                <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                
                <div class="row statistik-list mb-0">
                    <div class="col-lg-6 col-12">
                        <div class="card border-0 text-center p-3 mb-lg-0 mb-4">
                            <h1 class="mb-0">
                                <?php
                                    $kelas = $this->db->get_where('pelatihan', ['status' => 1])->num_rows();
                                    echo $kelas;
                                ?>
                            </h1>
                            <p>Kelas</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card border-0 text-center p-3">
                            <h1 class="mb-0">
                                <?php
                                    $peserta = $this->db->select('id')->get('peserta')->num_rows();
                                    echo $peserta;
                                ?>
                            </h1>
                            <p>Peserta</p>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <a class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3 border" href="<?= site_url('pelatihan') ?>" style="width: fit-content;">Selengkapnya<span class="material-symbols-outlined ms-3">arrow_forward</span></a>
                    </div>
                </div>                            
                
            </div>
        </div>
    </div>
</section> -->
<!-- STATISTIK DONE -->

<!-- DAFTAR PELATIHAN -->
<section id="daftar-pelatihan" style="background: #FBF3F2;">
    <div class="container container-extend  py-5">
        <div class="row  mb-lg-0 mb-4">
            <div class="col-lg-7 pb-3">
                <div class="head-section">
                    <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                    <h1 class="ms--2">Ikuti <span>Pelatihan</span> Berikut</h1>
                </div>
            </div>
            <div class="col text-lg-end text-start">                        
                <button class="btn btn-light btn-icon-session btn-icon-session-light rounded-pill d-flex align-items-center px-1 ps-3 ms-auto btn-redirect border" data-url="<?= site_url('pelatihan') ?>">Lihat Semua<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
            </div>
        </div>

        <div class="row">
            <?php foreach($class->result() as $cr){ ?>
                <div class="col-lg-4">
                    <div class="pelatihan-item card shadow border rounded-3 mb-3">
                        <img class="rounded shadow" src="<?= base_url('uploads/pelatihan/' . $cr->cover_img) ?>" alt="Cover Pelatihan">
                        <div class="card-body">
                            <span class="badge rounded-pill text-uppercase text-dark mb-2">Primary</span>
                            <h5 class="mb-3"><?= $cr->judul ?></h5>
                            <p class="text-muted">By <?= $cr->pemateri ?></p>
                            <?php if($cr->diskon != 0): ?>
                                <h5 class="mb-0 text-danger"><s>Rp. <?= rupiah($cr->harga) ?></s></h5>
                                <h5 class="mb-3">Rp. <?= discount($cr->harga, $cr->diskon) ?></h5>
                            <?php else: ?>
                                <h4 class="mb-3">Rp. <?= rupiah($cr->harga) ?></h4>
                            <?php endif; ?>
                            <button class="btn btn-light rounded-pill w-100 text-uppercase text-white btn-redirect" data-url="<?= site_url('pelatihan/' . $cr->flag . '/detail') ?>">Daftar Pelatihan</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- DAFTAR PELATIHAN DONE -->

<!-- FAQ -->
<section id="daftar-faq">
    <div class="container container-extend py-5">
        <div class="head-section mb-lg-0 mb-3">
            <p class="text-uppercase mb-0">We provide tons of pathskill</p>
            <h1 class="ms--2"><span>FAQ</span></h1>
        </div>

        <div class="accordion" id="accordionPanelsStayOpenExample">
            <?php 
                $nof = 1;
                foreach($faqs->result() as $fr){ 
            ?>
                <div class="mb-3">
                    <h2 class="accordion-header faq-item" id="panelsStayOpen-headingOne<?= $fr->id ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne<?= $fr->id ?>" aria-expanded="<?= ($nof == 1) ? 'true' : 'false' ?>" aria-controls="panelsStayOpen-collapseOne"><?= $fr->question ?></button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne<?= $fr->id ?>" class="accordion-collapse <?= ($nof == 1) ? 'show' : 'collapse' ?>" aria-labelledby="panelsStayOpen-headingOne<?= $fr->id ?>">
                        <div class="accordion-body">
                            <?= $fr->answer ?>
                        </div>
                    </div>
                </div>
            <?php $nof++; } ?>
        </div>
    </div>
</section>
<!-- FAQ DONE -->

<!-- TESTIMONI  -->
<!-- <section id="testimoni">
    <div class="container container-extend py-5">
        <div class="head-section mb-4">
            <p class="text-uppercase mb-0">We provide tons of pathskill</p>
            <h1 class="ms--2">Testimoni <span>Peserta Kami</span></h1>
        </div>
        <div class="daftar-testimoni px-4">
            <?php foreach($testimoni->result() as $tr){ ?>
            <div class="testimoni-item card border-1 p-4">
                <div class="d-flex flex-lg-row flex-column px-lg-5 px-2">
                    <div class="">
                        <img class="mb-4" src="<?= base_url('uploads/testimoni/' . $tr->img) ?>" alt="">
                        <h5 class="mb-1"><?= $tr->nama ?></h5>
                        <p class="mb-3"><?= $tr->jabatan ?></p>
                    </div>
                    <div class="d-flex align-items-center ms-lg-5 ms-0">
                        <p><?= $tr->deskripsi ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section> -->
<!-- TESTIMONI DONE -->

<!-- PERTANYAAN -->
<section id="tanyalebihlanjut">
    <div class="container container-extend py-5 text-center">
        <div class="card border-0 tanyalebihlanjut-item align-items-center">
            <h1 class="text-white mb-4">Tertarik dengan Pelatihan kami?</h1>
            <p class="text-white mb-4">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We</p>
            <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3 btn-redirect" data-url="https://wa.me/<?= $setting->kontak ?>">Tanya Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
        </div>
    </div>
</section>
<!-- PERTANYAAN DONE -->
