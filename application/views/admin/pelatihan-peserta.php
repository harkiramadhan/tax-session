<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-2 p-2">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex ps-3 pe-2 py-2 border rounded-3 justify-content-between">
                            <div class="d-flex flex-column justify-content-center">

                                <a href="#" class="text-xs mb-3 me-3 icon-move-left">
                                    <i class="fa fa-arrow-left me-1 text-warning" aria-hidden="true"></i>
                                    <span class="text-dark">Daftar Kelas</span>
                                </a>
                                <h6 class="mb-2">DAFTAR PESERTA</h6>
                                <div class="d-flex">
                                    <h6 class="mb-2 font-weight-normal wrap-table-argon"><?= $pelatihan->judul ?></h6>
                                    <a href="" target="_blank" class="mb-0" style="top:-10px;" ><i class="fa fa-external-link-square ms-2 text-sm text-warning" aria-hidden="true"></i></a>
                                </div>
                                <div class="d-flex flex-lg-row flex-column">
                                    <p class="text-xs mb-0 me-3">
                                        <i class="fa fa-calendar mb-lg-0 mb-md-0 mb-2 me-1 text-success" aria-hidden="true"></i>
                                        <?php
                                            if($pelatihan->tanggal_mulai == $pelatihan->tanggal_selesai){
                                                $tanggal = longdate_indo($pelatihan->tanggal_mulai);
                                            }elseif(date('m', strtotime($pelatihan->tanggal_mulai)) == date('m', strtotime($pelatihan->tanggal_selesai))){
                                                $tanggal = date('d', strtotime($pelatihan->tanggal_mulai))." - ".mediumdate_indo($pelatihan->tanggal_selesai);
                                            }else{
                                                $tanggal = longdate_indo($pelatihan->tanggal_mulai)." - ".longdate_indo($pelatihan->tanggal_selesai);
                                            }
                                        ?>
                                        <span class="text-dark"><?= $tanggal ?></span>
                                    </p>
                                    <p class="text-xs mb-0 me-3">
                                        <i class="fa fa-user mb-lg-0 mb-md-0 mb-2 me-1 text-success" aria-hidden="true"></i>
                                        <span class="text-dark"><?= $peserta->num_rows() ?> Peserta</span>
                                    </p>
                                    <p class="text-xs mb-0 me-3">
                                        <i class="fa fa-money mb-lg-0 mb-md-0 mb-2 me-1 text-success" aria-hidden="true"></i>
                                        <span class="text-dark"><?= $paid->num_rows() ?> Lunas</span>
                                    </p>
                                    <a href="<?= site_url('admin/pelatihan/exportParticipant/' . $pelatihan->id) ?>" class="text-xs mb-lg-0 mb-md-0 mb-2 me-3" target="__BLANK">
                                        <i class="fa fa-file-excel-o me-1 text-success" aria-hidden="true"></i>
                                        <span class="text-warning font-weight-bold">Download Excel</span>
                                    </a>
                                </div>
                            </div>
                            <div class="ml-auto d-lg-inline d-none">
                                <img src="<?= base_url('uploads/pelatihan/' . $pelatihan->cover_img) ?>" class="border rounded-2" alt="user1" style="height: 80px; width: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 display" id="example" style="width:100%">
                        <thead class="bg-light opacity-5">
                            <tr>
                                <th class="text-uppercase text-dark text-xxs text-center font-weight-bolder opacity-10" width="1px">
                                    #</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
                                    Nama</th> 
                                <th
                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
                                    ID</th>
                                <th
                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
                                    Pembayaran</th>
                                <th
                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
                                    Bukti</th>
                                <th
                                    class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($peserta->num_rows() > 0): ?>
                                <?php
                                    $no = 1;
                                    foreach($peserta->result() as $row){ ?>
                                    <!-- Jika ada data pelatihan -->
                                    <tr>
                                        <td class="align-items-center text-center text-sm"><?= $no++ ?></td>
                                        <td class="align-items-center text-sm"><span><?= $row->nama ?></span></td>
                                        <td class="align-items-center text-sm text-center"><span>#012191292</span></td>
                                        <td class="align-top">
                                            <div class="text-sm d-flex justify-content-center align-items-center">
                                                <span class="badge badge-sm <?= ($row->status_bayar == 1) ? 'bg-gradient-success' : 'bg-gradient-danger' ?> me-2 badge-pembayaran-<?= $row->id ?>"><?= ($row->status_bayar == 1) ? 'Lunas' : 'Belum' ?></span>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input toggle-bayar" type="checkbox" data-id="<?= $row->id ?>" id="flexSwitchCheckDefault-<?= $row->id ?>" <?= ($row->status_bayar == 1) ? 'checked' : '' ?>>
                                                    <label class="form-check-label" for="flexSwitchCheckDefault-<?= $row->id ?>"></label>
                                                </div>  
                                            </div>
                                        </td>
                                        <td class="align-top text-center">
                                            <div class="ms-auto text-center">
                                                <button class="btn <?= ($row->img) ? 'btn-outline-success' : 'btn-outline-danger' ?> btn-sm py-1 px-2 mb-0 btn-upload" data-id="<?= $row->id ?>"><i class="fa <?= ($row->img) ? 'fa-check-circle' : 'fa-times-circle' ?> me-1" aria-hidden="true"></i>File</button>
                                            </div>
                                        </td>
                                        <td class="align-top">
                                            <div class="ms-auto text-center">
                                                <button class="btn bg-gradient-dark btn-sm py-1 text-white px-2 mb-0 btn-edit" data-id="<?= $row->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                <a class="btn btn-success btn-sm py-1 text-white px-2 mb-0" href="https://wa.me/<?= $row->wa ?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php else: ?>
                                <!-- Jika data pelatihan kosong -->
                                <tr>
                                    <td colspan="6">
                                        <div class="border rounded w-100 p-4 text-center text-sm mt-2">
                                            Belum ada peserta
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

<!-- Modal Bukti Pembayaran -->
<div class="modal fade" id="modalUpload" tabindex="-1" aria-labelledby="modalUpload" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content upload-content">
            
        </div>
    </div>
</div>

<!-- Modal Data Peserta -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content edit-content">
            
        </div>
    </div>
</div>