<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-4">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">DAFTAR PELATIHAN</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn bg-gradient-dark mb-0" href="<?= site_url('admin/pelatihan/add') ?>"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;<span class="d-lg-inline d-none">Pelatihan</span></a>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 display" id="example" style="width:100%">
                        <thead class="bg-light opacity-5">
                            <tr>
                                <th class="text-uppercase text-dark text-xxs text-center font-weight-bolder opacity-10" width="1px">#</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Pelatihan</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Status</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Harga</th>
                                <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                if($pelatihan->num_rows() > 0): 
                                    $no = 1;
                                    foreach($pelatihan->result() as $row):
                            ?>
                                <!-- Jika ada data pelatihan -->
                                <tr>
                                    <td class="align-top text-center text-sm"><?= $no++ ?></td>
                                    <td class="align-top">
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-lg-inline d-none">
                                                <img src="<?= base_url('uploads/pelatihan/' . $row->cover_img) ?>" class="avatar avatar-lg me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-2 text-sm wrap-table-argon"><?= $row->judul ?></h6>
                                                <p class="text-xs mb-2">
                                                    <i class="fa fa-calendar me-2 text-dark" aria-hidden="true"></i>
                                                    <?php
                                                        if($row->tanggal_mulai == $row->tanggal_selesai){
                                                            $tanggal = longdate_indo($row->tanggal_mulai);
                                                        }elseif(date('m', strtotime($row->tanggal_mulai)) == date('m', strtotime($row->tanggal_selesai))){
                                                            $tanggal = date('d', strtotime($row->tanggal_mulai))." - ".mediumdate_indo($row->tanggal_selesai);
                                                        }else{
                                                            $tanggal = longdate_indo($row->tanggal_mulai)." - ".longdate_indo($row->tanggal_selesai);
                                                        }
                                                    ?>
                                                    <span class="text-dark"><?= $tanggal ?></span>
                                                </p>
                                                <a href="<?= site_url('admin/pelatihan/peserta') ?>" class="text-xs font-weight-bold mb-0">
                                                    <i class="fa fa-user me-2 text-success" aria-hidden="true"></i>
                                                    <span class="text-dark">200 Peserta</span>
                                                    <i class="fa fa-arrow-right text-success ms-2" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-top text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success"><?= ($row->status == 1) ? 'Aktif' : 'Non Aktif' ?></span>
                                    </td>
                                    <td class="align-top text-center">
                                        <span class="text-secondary text-xs font-weight-bold"><?= rupiah($row->harga) ?></span>
                                    </td>
                                    <td class="align-top">
                                        <div class="ms-auto text-center">
                                            <a class="btn btn-link btn-sm py-0 text-info px-2 mb-0" href="<?= site_url('admin/pelatihan/' . $row->id) ?>"><i class="far fa-eye" aria-hidden="true"></i></a>
                                            <a class="btn btn-link btn-sm py-0 text-danger px-2 mb-0" href="<?= site_url('admin/pelatihan/hapus') ?>""><i class="far fa-trash-alt" aria-hidden="true"></i></a>
                                            <a class="btn btn-link btn-sm py-0 text-dark px-2 mb-0" href="<?= site_url('admin/pelatihan/edit/' . $row->id) ?>""><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php 
                                    endforeach;
                                else: ?>
                                <!-- Jika data pelatihan kosong -->
                                <tr>
                                    <td colspan="5">
                                        <div class="border rounded w-100 p-4 text-center text-sm mt-2">
                                            Belum ada data pelatihan
                                            <br>
                                            <a class="btn btn-outline-dark mb-0 mt-3" href="<?= site_url('admin/pelatihan/add') ?>"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;<span class="d-lg-inline d-none">Pelatihan</span></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>