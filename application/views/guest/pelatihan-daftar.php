<!-- BREADCUMP  -->
<section id="breadcump" class="py-3 mb-3" style="background: #F2F2F2;">
    <div class="container container-extend">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelas</li>
                <li class="breadcrumb-item active" aria-current="page">Form Pendaftaran <?= $pelatihan->judul ?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- BREADCUMP DONE -->

<!-- HEADER COURSE PAGE -->
<section class="">
    <div class="container container-extend">
        <h4 class="text-center my-5">Daftar Pelatihan</h4>
        <div class="px-4 py-3 mb-4 border" style="border-radius: 25px;">
            <div class="row">
                <div class="col-lg-8">
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
                    <h5 class="mb-2"><?= $pelatihan->waktu." - ".$tanggal ?></h5>
                    <p class="text-sm mb-1"><small>Pembayaran</small></p>
                    <?php 
                        $rand = mt_rand(100,999);
                    ?>
                    <h5 class="mb-2"><strong><?= discount($pelatihan->harga, $pelatihan->diskon, $rand) ?></strong></h5>
                </div>
                <div class="col-lg-4"> 
                    <img class="d-none d-lg-block rounded shadow w-100" src="<?= base_url('uploads/pelatihan/' . $pelatihan->cover_img) ?>" alt="Cover Pelatihan">
                </div>
            </div>
        </div>

        <form method="post" action="<?= site_url('pelatihan/register') ?>">
            <input type="hidden" name="robot" value="">
            <input type="hidden" name="pelaid" value="<?= $pelatihan->id ?>">
            <input type="hidden" name="nominal" value="<?= discount($pelatihan->harga, $pelatihan->diskon, $rand) ?>">
            <div class="mb-3">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control rounded rounded-pill py-3 px-4" name="nama" aria-describedby="" placeholder="Tulis nama lengkapmu" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control rounded rounded-pill py-3 px-4" name="email" aria-describedby="" placeholder="ex: email@gmail.com" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">No HP</label>
                <input type="text" class="form-control rounded rounded-pill py-3 px-4" name="wa" aria-describedby="" placeholder="082112xxxxxx" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Jenis Kelamin</label>
                <select class="form-select rounded rounded-pill py-3 px-4" aria-label="" name="jenkel" required>
                    <option value="" selected disabled>Pilih sekarang</option>
                    <option value="1">Laki - laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pendidikan Terahir</label>
                <select class="form-select rounded rounded-pill py-3 px-4" aria-label="" name="pendidikan" required>
                    <option value="" selected disabled>Pilih sekarang</option>
                    <option value="SD">SD</option>
                    <option value="SMP/MTS">SMP/MTS</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="D3">D3</option>
                    <option value="S1/D4">S1/D4</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <button class="btn btn-light bg-primary-red mb-3 py-3 text-white rounded-pill w-100 text-uppercase border-0 shadow font-16 weight-semi" type="submit">Daftar Pelatihan</button>
            <button class="btn btn-light mb-3 py-2 text-gray rounded-pill w-100 text-uppercase btn-redirect font-16 weight-semi" data-url="<?= site_url('pelatihan') ?>" type="button">KEMBALI</button>
        </form>
    </div>
</section>
<!-- HEADER COURSE PAGE DONE-->