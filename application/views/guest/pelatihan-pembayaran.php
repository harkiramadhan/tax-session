<!-- BREADCUMP  -->
<section id="breadcump" class="py-3 mb-3" style="background: #F2F2F2;">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&quot;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="<?= site_url('pelatihan') ?>">Kelas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Pembayaran Kelas <?= $pelatihan->judul ?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- BREADCUMP DONE -->

<!-- HEADER COURSE PAGE -->
<section class="">
    <div class="container">
        <h4 class="text-center my-3">Detail Pembayaran</h4>
        <div class="px-4 py-3 mb-4 border d-flex" style="border-radius: 25px;">
            <div class="">
                <p class="text-sm mb-1"><small>Pelatihan</small></p>
                <h5 class="mb-2 text-primary"><strong><?= $pelatihan->judul ?></strong></h5>
                <p class="text-sm mb-1"><small>Waktu</small></p>
                <?php 
                    if($pelatihan->tanggal_mulai == $pelatihan->tanggal_selesai){
                        $tanggal = longdate_indo($pelatihan->tanggal_mulai);
                    }elseif(date('m', strtotime($pelatihan->tanggal_mulai)) == date('m', strtotime($pelatihan->tanggal_selesai))){
                        $tanggal = date('d', strtotime($pelatihan->tanggal_mulai))." - ".mediumdate_indo($pelatihan->tanggal_selesai);
                    }else{
                        $tanggal = longdate_indo($pelatihan->tanggal_mulai)." - ".longdate_indo($pelatihan->tanggal_selesai);
                    }
                ?>
                <h5 class="mb-0"><?= $pelatihan->waktu ?> - <?= $tanggal ?></h5>
            </div>
            <div class="ms-auto">
                <img class="d-none d-lg-block rounded shadow" src="http://localhost/tax-session/uploads/pelatihan/39bb136be363401a1ce9408d07207457.jpg" alt="Cover Pelatihan" style="object-fit: cover; height: 100%; width: 130px;">
            </div>
        </div>
        <div class="px-4 py-3 mb-4 border d-flex" style="border-radius: 25px;">
            <div class="">
                <p class="text-sm mb-1"><small>ID Transaksi</small></p>
                <h5 class="mb-2 text-primary font-36">#2102012 <div class="material-symbols-outlined text-dark">content_copy</div></h5>
                <p class="text-sm mb-1"><small>Nama Bank</small></p>
                <h5 class="mb-2"><?= $setting->nama ?></h5>
                <p class="text-sm mb-1"><small>Nomor Rekening</small></p>
                <h5 class="mb-2"><?= $setting->norek ?></h5>
                <p class="text-sm mb-1"><small>Amount to Pay - <span class="text-warning">Bayar Sampai 3 digit terahir</span></small></p>
                <h5 class="mb-2 weight-bold"><?= discount($pelatihan->harga, $pelatihan->diskon) ?></h5>
            </div>
            <div class="ms-auto">
                <img class="" src="<?= base_url('assets/img/' . $setting->logo_bank) ?>" alt="Cover Pelatihan" style=" height: auto; width: 130px;">
            </div>
        </div>
        <!-- <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="mb-3">
                <h2 class="accordion-header faq-item" id="panelsStayOpen-headingOne4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne4" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">About ?</button>
                </h2>
                <div id="panelsStayOpen-collapseOne4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne4" style="">
                    <div class="accordion-body">
                        Tax Session                        
                    </div>
                </div>
            </div>  
        </div> -->
        <h5 class="text-center my-3 weight-semi">Sudah Bayar?</h5>
        <button class="btn btn-light bg-primary-red mb-3 py-3 text-white rounded-pill w-100 text-uppercase border-0 shadow font-16 weight-semi btn-redirect" data-url="https://wa.me/<?= $setting->kontak ?>" type="button">KONFIRMASI SEKARANG</button>
        <button class="btn btn-light mb-3 py-2 text-gray rounded-pill w-100 text-uppercase btn-redirect font-16 weight-semi" data-url="<?= site_url('pelatihan') ?>" type="button">KEMBALI</button>
    </div>
</section>
<!-- HEADER COURSE PAGE DONE-->