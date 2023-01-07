<!-- BREADCUMP  -->
<section id="breadcump" class="bg-white py-3">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= site_url('') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Course</li>
            </ol>
        </nav>
    </div>
</section>
<!-- BREADCUMP DONE -->

<!-- HEADER COURSE PAGE -->
<section class="mb-3">
    <div class="container">
        <div class="rounded rounded-4 px-4 py-4 mb-4" style="background-color: #751119;">
            <div class="row">
                <div class="col-lg-6">
                    <div class="head-section">
                        <h4 class="text-white mb-3">Pilih Pelatihanmu Sekarang Juga</h4>
                        <p class="text-white text-sm mb-0">Mulailah, beralih, atau memajukan karir mu dengan lebih dari 100 kursus dan sertifikat profesional</p>
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>

        </div>

        <div class="row">
            <?php foreach($data->result() as $row){ ?>
            <div class="col-lg-3 mb-4">
                <div class="pelatihan-item card shadow border rounded-3">
                    <img class="rounded shadow" src="<?= base_url('uploads/pelatihan/' . $row->cover_img) ?>" alt="Cover Pelatihan">
                    <div class="card-body">
                        <span class="badge rounded-pill text-uppercase text-dark mb-2">Primary</span>
                        <h5 class="mb-3"><?= $row->judul ?></h5>
                        <p class="text-muted">By <?= $row->pemateri ?></p>
                        <?php if($row->diskon != 0): ?>
                            <h5 class="mb-0 text-danger"><s>Rp. <?= rupiah($row->harga) ?></s></h5>
                            <h5 class="mb-3">Rp. <?= discount($row->harga, $row->diskon) ?></h5>
                        <?php else: ?>
                            <h4 class="mb-3">Rp. <?= rupiah($row->harga) ?></h4>
                        <?php endif; ?>
                        <button class="btn btn-light rounded-pill w-100 text-uppercase text-white btn-redirect" data-url="<?= site_url('pelatihan/daftar/' . $row->flag) ?>">Daftar Pelatihan</button>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <nav class="mx-auto d-flex justify-content-center" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="<?= ($page > 1) ? site_url('pelatihan?page=' . $previous) : '#' ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for($i=1; $i <= $count; $i++): ?>
                    <?php if($i == 1 && $this->input->get('page', TRUE) == NULL): ?>
                        <li class="page-item active">
                    <?php else: ?>
                        <li class="page-item <?= ($this->input->get('page', TRUE) == $i) ? 'active' : '' ?>">
                    <?php endif; ?>
                    <a class="page-link" href="<?= site_url('pelatihan?page=' . $i) ?>"><?= $i ?></a>
                </li>
                <?php endfor; ?>
                <li class="page-item">
                    <a class="page-link" href="<?= ($page < $count) ? site_url('pelatihan?page=' . $next) : '#' ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- HEADER COURSE PAGE DONE-->