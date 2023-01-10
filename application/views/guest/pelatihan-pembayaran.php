<!-- BREADCUMP  -->
<section id="breadcump" class="py-3 mb-3" style="background: #F2F2F2;">
    <div class="container container-extend">
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
    <div class="container container-extend">
        <h4 class="text-center my-5">Detail Pembayaran</h4>
        <div class="px-4 py-3 mb-4 border d-flex" style="border-radius: 25px;">
            <div class="">
                <p class="text-sm mb-1"><small>Judul Kelas</small></p>
                <h5 class="mb-2"><strong><?= $pelatihan->judul ?></strong></h5>
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
        <div class="px-4 py-3 mb-4 border d-flex flex-lg-row flex-column" style="border-radius: 25px;">
            <div class="order-lg-1 order-2">
                <p class="text-sm mb-1"><small>Nomor Rekening</small></p>
                <h5 class="mb-2 text-primary weight-semi font-36"><?= $setting->norek ?><div class="material-symbols-outlined text-dark ms-2">content_copy</div></h5>
                <p class="text-sm mb-1"><small>Nama Bank</small></p>
                <h5 class="mb-2"><?= $setting->bank ?></h5>
                <p class="text-sm mb-1"><small>Atas Nama</small></p>
                <h5 class="mb-2"><?= $setting->nama ?></h5>
                <p class="text-sm mb-1"><small>Amount to Pay - <span class="text-warning">Bayar Sampai 3 digit terahir</span></small></p>
                <h5 class="mb-2"><?= $peserta->nominal ?><div class="material-symbols-outlined text-dark ms-2 font-16">content_copy</div></h5>
                <p class="text-sm mb-1"><small>ID Transaksi</small></p>
                <h5 class="mb-2">#<?= sprintf("%06d", $peserta->id) ?></h5>
            </div>
            <div class="order-lg-2 order-1 ms-lg-auto ms-0 mb-4">
                <img class="" src="<?= base_url('assets/img/' . $setting->logo_bank) ?>" alt="Cover Pelatihan" style=" height: auto; width: 130px;">
            </div>
        </div>

        <div class="position-relative">
            <div class="px-4 py-4 border d-flex" style="border-radius: 25px; position: absolute; width: 100%; background: white; top: -20px;">
                <h5 class="mb-0">Alur Pembayaran</h5>
            </div>
            <div class="px-4 py-4 mb-4 border d-flex mt-5" style="border-radius: 0px 0px 25px 25px; background: #F8F8F8; top: -10px; color: #7E7E7E;">
                <ol class="mt-5 ps-4 mb-0">
                    <li>Transfer menggunakan ATM/Mobile Banking anda</li>
                    <li>Pilih bank tujuan <span class="weight-semi"><?= $setting->bank ?></span></li>
                    <li>Transfer dengan nomor rekening <span class="weight-semi"><?= $setting->norek ?></span> atas nama <strong><?= $setting->nama ?></strong></li>
                    <li>Sejumlah <span class="weight-semi"> <?= $peserta->nominal ?></span>  <span class="text-danger">Bayar Sampai 3 digit terahir</span></li>
                    <li>Konfirmasi ke CS melalui tombol "Konfirmasi Sekarang" di bawah</li>
                    <li>Jangan lupa lampirkan gambar bukti transfer anda.</li>
                </ol>
            </div>
        </div>
        
        <h5 class="text-center my-3 weight-semi">Sudah Bayar?</h5>
        <button class="btn btn-light bg-primary-red mb-3 py-3 text-white rounded-pill w-100 text-uppercase border-0 shadow font-16 weight-semi btn-redirect" data-url="https://wa.me/<?= $setting->kontak ?>" type="button">KONFIRMASI SEKARANG</button>
        <button class="btn btn-light border mb-2 py-3 text-muted rounded-pill w-100 text-uppercase font-16 weight-reguler btn-redirect" data-url="<?= site_url('pelatihan/' . $pelatihan->flag . '/status/' . $peserta->id) ?>" type="button">CEK STATUS PEMBAYARAN</button>
        <p class="text-sm mb-3 text-center text-muted"><small><i>Pastikan anda telah melakukan pembayaran dan konfirmasi kepada CS kami sebelum cek status pembayaran.</i></small></p>

        <button class="btn btn-light mb-3 py-2 text-gray rounded-pill w-100 text-uppercase btn-redirect font-16 weight-semi" data-url="<?= site_url('pelatihan') ?>" type="button">KEMBALI</button>
    </div>
</section>
<!-- HEADER COURSE PAGE DONE-->