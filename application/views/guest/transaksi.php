<!-- BREADCUMP  -->
<section id="breadcump" class="py-3 mb-0" style="background: #F2F2F2;">
    <div class="container container-extend">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cek Transaksimu</li>
            </ol>
        </nav>
    </div>
</section>
<!-- BREADCUMP DONE -->

<!-- HEADER COURSE PAGE -->
<section class="">
    <div class="container container-extend">
        <h4 class="text-center my-5">Cek Transaksi</h4>
        <div class="mb-3 text-lg-start left text-center">
            <label for="" class="form-label">Masukan Email/Nomor HP</label>
            <input type="text" class="form-control rounded rounded-pill py-3 px-4" name="nama" aria-describedby="" placeholder="Ex: email@gmail.com atau 082112xxx" id="find">
            <div id="findValidation" class="invalid-feedback"></div>
        </div>
        <button class="btn btn-light bg-primary-red mb-4 py-3 text-white rounded-pill w-100 text-uppercase border-0 shadow font-16 weight-semi btn-find" type="button">Cek Transaksi</button>
        
        <div class="result">
            <!-- BAGIAN INI TAMPIL KETIKA DARI AWAL, KETIKA BELUM ADA DATA DAN KLIK CEK -->
            <div class="px-4 py-5 mb-4 border" style="border-radius: 25px;">
                <h5 class="mb-0 text-center text-muted weight-reguler">Belum ada data yang anda masukan</h5>
            </div>
            <!-- DONE -->
        </div>

        <button class="btn btn-light mb-4 py-2 text-gray rounded-pill w-100 text-uppercase btn-redirect font-16 weight-semi" data-url="http://localhost/tax-session/pelatihan" type="button">KEMBALI</button>
        
        <section class="mb-4">
            <div class="text-center">
                <div class="card border-0 tanyalebihlanjut-item-pelatihan align-items-center">
                    <p class="text-white mb-2 font-32 weight-reguler">Mengalami kendala ketika mengikuti kelas?</p>
                    <p class="text-white mb-4 font-14">Tim kami akan membantu anda dengan senang hati. Klik tombol konsultasi beriut.</p>
                    <button class="btn btn-light btn-icon-session rounded-pill d-flex align-items-center px-1 ps-3">Konsultasi Lebih Lanjut<span class="material-symbols-outlined ms-3">arrow_forward</span></button>
                </div>
            </div>
        </section>

    </div>
</section>
<!-- HEADER COURSE PAGE DONE-->