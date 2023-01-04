
        <!-- HEADER LANDING -->
        <section id="header-landing" class="position-relative" style="background: #751119;">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">

                        <div class="mx-5">
                            <p class="text-uppercase text-white">We provide tons of pathskill</p>
                            <h1 class="text-white">The New Way to Achieve Good Skills</h1>
                            <p class="text-white">We provide tons of pathskill that you can choose and focus on</p>
                            <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3">Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="<?= base_url('/assets/img/guest/img-header-main.svg') ?>" alt="" class="w-75">
                    </div>
                </div>
            </div>

            <!-- <div class="bg-header" style="background-image: url(<?= base_url('/assets/img/bg-header-fix.svg') ?>);"></div> -->
        </section>
        <!-- HEADER LANDING END -->

        <!-- PATNER LOGO -->
        <section id="partner" class="container py-5">
            <div class="list-partner d-flex justify-content-around align-items-center">
                <?php foreach($partners->result() as $pr){ ?>
                    <div>
                        <img src="<?= base_url('uploads/partner/' . $pr->img) ?>" alt="">
                    </div>    
                <?php } ?>
            </div>
        </section>
        <!-- PATNER LOGO END -->

        <!-- BANNER -->
        <section id="banner">
            <div class="container list-banner">
                <?php foreach($banners->result() as $rb){ ?>
                    <div class="banner-item">
                        <img src="<?= base_url('uploads/banners/' . $rb->img) ?>" alt="">
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- BANNER END -->

        <!-- BENEFIT PELATIHAN -->

        <section id="benefit" class="py-5">
            <div class="container">
                <div class="head-section py-5">
                    <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                    <h1 class="ms--2">Benefit <span>Pelatihan</span></h1>
                </div>

                <div class="row">
                    <?php 
                        $no = 1;
                        foreach($benefits->result() as $bnr){ 
                    ?>
                        <div class="col-lg-4">
                            <div class="card-benefit card border-0 p-3" <?= ($no == 2) ? 'style="background: #751119;"' : '' ?>>
                                <div class="card-body">
                                    <img class="mb-5 <?= ($no == 2) ? 'text-white' : '' ?>" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="">
                                    <h4 class="mb-3 <?= ($no == 2) ? 'text-white' : '' ?>">The New Way to Achieve Good Skills</h4>
                                    <p class="mb-0 <?= ($no == 2) ? 'text-white' : '' ?>">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on</p>
                                </div>
                            </div>    
                        </div>
                    <?php $no++; } ?>
                </div>
            </div>
        </section>
        <!-- BENEFIT PELATIHAN DONE -->

        <!-- STATISTIK -->
        <section id="pelatihan">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="<?= base_url('/assets/img/guest/img-header-main.svg') ?>" alt="" class="w-75">
                    </div>
                    <div class="col-lg-6">
                        <div class="head-section">
                            <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                            <h1 class="ms--2">Statistik<span> Pelatihan</span></h1>
                        </div>
                        <p>We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill</p>
                        
                        <div class="row statistik-list mb-4">
                            <div class="col-lg-4">
                                <div class="card border-0 text-center p-3">
                                    <h1 class="mb-0">21</h1>
                                    <p>Pengajar</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border-0 text-center p-3">
                                    <h1 class="mb-0">21</h1>
                                    <p>Pengajar</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card border-0 text-center p-3">
                                    <h1 class="mb-0">21</h1>
                                    <p>Pengajar</p>
                                </div>
                            </div>
                        </div>                            
                        
                        <button class="btn btn-light btn-icon-session btn-icon-session-light rounded-pill d-flex align-items-center px-1 ps-3">Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>

                    </div>
                </div>
            </div>
        </section>
        <!-- STATISTIK DONE -->

        <!-- DAFTAR PELATIHAN -->
        <section id="daftar-pelatihan" style="background: #FBF3F2;">
            <div class="container  py-5">
                <div class="row">
                    <div class="col-lg-7 pb-3">
                        <div class="head-section">
                            <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                            <h1 class="ms--2">Ikuti <span>Pelatihan</span> Berikut</h1>
                        </div>
                    </div>

                    <div class="col text-end">                        
                        <button class="btn btn-light btn-icon-session btn-icon-session-light rounded-pill d-flex align-items-center px-1 ps-3 ms-auto">Lebih Semua<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="pelatihan-item card shadow border rounded-3">
                            <img class="rounded shadow" src="<?= base_url('assets/img/guest/img-banner.png') ?>" alt="Cover Pelatihan">
                            
                            <div class="card-body">
                                <span class="badge rounded-pill text-uppercase text-dark mb-2">Primary</span>
                                <h5 class="mb-3">Ini adalah Pelatihan paling populer di Indonesia</h5>
                                <p class="text-muted">By Satria Sambiring</p>
                                <h4 class="mb-3">Rp. 799.000</h4>
                                <button class="btn btn-light rounded-pill w-100 text-uppercase text-white">Daftar Pelatihan</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- DAFTAR PELATIHAN DONE -->

        <!-- FAQ -->
        <section id="daftar-faq">
            <div class="container py-5">
                <div class="head-section">
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
        <section id="testimoni">
            <div class="container py-5">
                <div class="head-section mb-4">
                    <p class="text-uppercase mb-0">We provide tons of pathskill</p>
                    <h1 class="ms--2">Testimoni <span>Peserta Kami</span></h1>
                </div>
                <div class="daftar-testimoni">
                    <?php foreach($testimoni->result() as $tr){ ?>
                    <div class="testimoni-item card border-0 p-4">
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="mb-4" src="<?= base_url('uploads/testimoni/' . $tr->img) ?>" alt="">
                                <h5 class="mb-1"><?= $tr->nama ?></h5>
                                <p class="mb-0"><?= $tr->jabatan ?></p>
                            </div>
                            <div class="col-lg-9 d-flex align-items-center">
                                <p><?= $tr->deskripsi ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- TESTIMONI DONE -->

        <!-- PERTANYAAN -->

        <section id="tanyalebihlanjut">
            
            <div class="container py-5 text-center">

                <div class="card border-0 tanyalebihlanjut-item align-items-center">
                    <h1 class="text-white mb-4">Tertarik dengan Pelatihan kami?</h1>
                    <p class="text-white mb-4">We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We provide tons of pathskill that you can choose and focus on We</p>
                    <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3">Tanya Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                </div>
            </div>

        </section>

        <!-- PERTANYAAN DONE -->