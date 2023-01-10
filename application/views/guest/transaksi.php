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
        <form method="post" action="#">
            <div class="mb-3 text-lg-start left text-center">
                <label for="" class="form-label">Masukan Email/Nomor HP</label>
                <input type="text" class="form-control rounded rounded-pill py-3 px-4" name="nama" aria-describedby="" placeholder="Ex: email@gmail.com atau 082112xxx" required>
            </div>
            <button class="btn btn-light bg-primary-red mb-4 py-3 text-white rounded-pill w-100 text-uppercase border-0 shadow font-16 weight-semi" type="submit">Cek Transaksi</button>
        </form>
        
        <!-- BAGIAN INI TAMPIL KETIKA DARI AWAL, KETIKA BELUM ADA DATA DAN KLIK CEK -->
        <div class="px-4 py-5 mb-4 border" style="border-radius: 25px;">
            <h5 class="mb-0 text-center text-muted weight-reguler">Belum ada data yang anda masukan</h5>
        </div>
        <!-- DONE -->

        <!-- MUNCUL JIKA DATA YANG DIMASUKAN ADA DI DATABASE -->
        <div class="px-4 py-3 mb-4 border" style="border-radius: 25px;">
            <p class="text-sm mb-1"><small>Nama</small></p>
            <h5 class="mb-2">Alfian Rahmatullah</h5>
            <p class="text-sm mb-1"><small>Email</small></p>
            <h5 class="mb-2">alvianrht@gmail.com</h5>
            <p class="text-sm mb-1"><small>Nomo HP</small></p>
            <h5 class="mb-2">082112905550</h5>
        </div>
        <p class="text-sm mb-3 text-center">Riwayat Pelatihan Anda</p>

        <!-- TAMPILAN UNTUK RIWAYAT KELAS LUNAS -->
        <div class="px-4 py-3 mb-4 border d-flex" style="border-radius: 25px;">
            <img class="d-none d-lg-block rounded shadow" src="http://localhost/tax-session/uploads/pelatihan/39bb136be363401a1ce9408d07207457.jpg" alt="Cover Pelatihan" style="object-fit: cover; height: 100px; width: 130px;">
            <div class="ms-3">
                <h5 class="mb-2">#1121212 - Pelatihan Ekonomi Sebagai Penyalur makan terbaik</h5>
                <p class="mb-2">Selasa, 08 November 2022 - 08:00 - 10:00 WIB</p>
                <p class="mb-2"><span class="mb-2 px-3 py-1 text-bg-success rounded-pill bg-success" style="width: fit-content;">Pembayaran Lunas</span> <span class="weight-semi ms-1"> Kelas telah Selesai</span></p>
            </div>
            <div class="ms-auto d-flex justify-item-cente align-items-center">
                <!-- DIARAHKAN KE HALAMAN STATUS TRANSAKSI -->
                <button class="btn btn-light border mb-2 py-3 px-4 text-dark rounded-pill w-100 text-uppercase font-16 weight-reguler" data-url="" type="button">DETAIL KELAS</button>
            </div>
        </div>
        <!-- TAMPILAN UNTUK RIWAYAT KELAS LUNAS -->

        <!-- TAMPILAN UNTUK RIWAYAT KELAS BELUM LUNAS -->
        <div class="px-4 py-3 mb-4 border d-flex" style="border-radius: 25px;">
            <img class="d-none d-lg-block rounded shadow" src="http://localhost/tax-session/uploads/pelatihan/39bb136be363401a1ce9408d07207457.jpg" alt="Cover Pelatihan" style="object-fit: cover; height: 100px; width: 130px;">
            <div class="ms-3">
                <h5 class="mb-2">#1121212 - Pelatihan Ekonomi Sebagai Penyalur makan terbaik</h5>
                <p class="mb-2">Selasa, 08 November 2022 - 08:00 - 10:00 WIB</p>
                <p class="mb-2"><span class="mb-2 px-3 py-1 text-bg-warning rounded-pill bg-warningt" style="width: fit-content;">Menunggu Pembayaran</span> <span class="weight-semi ms-1"> Kelas belum dimulai</span></p>
            </div>
            <div class="ms-auto d-flex justify-item-cente align-items-center">
                <!-- DIARAHKAN KE HALAMAN DETAIL PEMBAYARAN -->
                <button class="btn btn-light border mb-2 py-3 px-4 text-dark rounded-pill w-100 text-uppercase font-16 weight-reguler" data-url="" type="button">BAYAR SEKARANG</button>
            </div>
        </div>
        <!-- TAMPILAN UNTUK RIWAYAT KELAS BELUM LUNAS -->

        <!-- MUNCUL JIKA DATA YANG DIMASUKAN ADA DI DATABASE DONE -->

        <!-- MUNCUL JIKA DATA YANG DIINPUT TIDAK ADA -->
        <div class="px-4 pt-4 pb-4 mb-4 border" style="border-radius: 25px;">
            <h5 class="mb-3 text-center text-muted weight-reguler">Anda belum pernah mengikuti kelas kami</h5>
            <button class="btn btn-light border mb-2 py-3 px-4 text-dark rounded-pill w-100 text-uppercase font-16 weight-reguler" data-url="" type="button">Daftar Kelas Sekarang</button>
        </div>
        <!-- MUNCUL JIKA DATA YANG DIINPUT TIDAK ADA DONE -->

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