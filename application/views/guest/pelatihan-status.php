<!-- BREADCUMP  -->
<section id="breadcump" class="py-3 mb-0" style="background: #F2F2F2;">
    <div class="container container-extend">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelas</li>
                <li class="breadcrumb-item active" aria-current="page">Status Pembayaran Judul Kelas</li>
            </ol>
        </nav>
    </div>
</section>
<!-- BREADCUMP DONE -->

<!-- HEADER COURSE PAGE -->
<section class="">
    <div class="container container-extend">
        <div class="my-5 d-flex flex-column align-items-center">
            <h4 class="text-center">Status Pembayaran</h4>

            <!-- JIKA SUKSES -->
            <div class="material-symbols-outlined text-success my-3" style="font-size: 100px;">check_circle</div>
            <div class="rounded-pill px-3 py-2 border border-success text-success" style="width: fit-content;">PEMBAYARAN SUKSES</div>
            <!-- DONE -->

            <!-- JIKA BELUM LUNAS -->
            <div class="material-symbols-outlined text-warning my-3" style="font-size: 100px;">hourglass_top</div>
            <div class="rounded-pill px-3 py-2 border border-warning text-warning" style="width: fit-content;">MENUNGGU PEMBAYARAN</div>
            <!-- DONE -->

        </div>
        <div class="px-4 py-3 mb-4 border" style="border-radius: 25px;">
            <p class="text-sm mb-1"><small>ID Transaksi</small></p>
            <h5 class="mb-2">#12122212</h5>
            <p class="text-sm mb-1"><small>Status</small></p>
            <h5 class="mb-2 weight-bold">Belum dimulai</h5>
            <p class="text-sm mb-1"><small>Kelas</small></p>
            <h5 class="mb-2">Tingkatkan keterampilan dan karier mu!</h5>
            <p class="text-sm mb-1"><small>Amount to Pay</small></p>
            <h5 class="mb-2">IDR 289.000</h5>
            <p class="text-sm mb-1"><small>Tipe Pembayaran</small></p>
            <h5 class="mb-2">Transfer Bank</h5>
            <p class="text-sm mb-1"><small>Nama Bank</small></p>
            <h5 class="mb-2">Mandiri</h5>
            <p class="text-sm mb-1"><small>Nomo HP</small></p>
            <h5 class="mb-2">082112905550</h5>
            <p class="text-sm mb-1"><small>Email</small></p>
            <h5 class="mb-2">alvianrht@gmail.com</h5>
        </div>

        <!-- INI MUNCUL JIKA STATUSNYA SUKSES -->
        <div class="px-4 py-3 mb-4 border" style="border-radius: 25px;">
            <p class="text-sm mb-1">Catatan:</p>
            <h5 class="mb-3 weight-light" style="text-align: justify;">Terimakasih telah mendaftar pada kelas Judul Kelas. Anda telah selesai dalam proses pendaftaran. Selanjutnya anda akan kami masukan pada Whatsapp Group untuk pelaksanaan teknis pelatihan selanjutnya. Harap pastikan email ataupun nomor yang anda gunakan sudah benar. Jika ada pertanyaan ataupun keluhan silahkan klik tombol "KONSULTASI SEKARANG" jika tidak ada, silahkan klik tombol "SElESAIKAN TRANSAKSI".</h5>
            <button class="btn btn-light border mb-2 py-3 text-muted rounded-pill w-100 text-uppercase font-16 weight-reguler" data-url="" type="button">KONSULTASI SEKARANG</button>
        </div>
        <!-- SECTION DONE -->

        <!-- JIKA STATUS SELAIN SUKSES MUNCUL TOMBOL INI -->
        <button class="btn btn-light bg-primary-red border mb-2 py-3 text-white rounded-pill w-100 text-uppercase font-16 weight-reguler" data-url="" type="button">KONFIRMASI PEMBAYARAN</button>
        <button class="btn btn-light border mb-2 py-3 text-muted rounded-pill w-100 text-uppercase font-16 weight-reguler" data-url="" type="button">REFRESH STATUS PEMBAYARAN</button>
        <button class="btn btn-light border mb-4 py-3 text-muted rounded-pill w-100 text-uppercase font-16 weight-reguler" data-url="" type="button">ALUR PEMBAYARAN</button>

        <!-- DONE -->

        <!-- BUTTON INI MUNCUL JIKA SUKSES -->
        <button class="btn btn-light bg-primary-red mb-3 py-3 text-white rounded-pill w-100 text-uppercase border-0 shadow font-16 weight-semi" type="submit">Selesaikan Transaksi dan Ke Beranda</button>
        <!-- DONE -->

        <button class="btn btn-light mb-3 py-2 text-gray rounded-pill w-100 text-uppercase btn-redirect font-16 weight-semi" data-url="http://localhost/tax-session/pelatihan" type="button">KEMBALI</button>
    </div>
</section>
<!-- HEADER COURSE PAGE DONE-->