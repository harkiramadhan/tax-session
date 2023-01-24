<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-4">
				<div class="row">
					<div class="col-6 d-flex align-items-center">
						<h6 class="mb-0">DAFTAR FASILITAS</h6>
					</div>
					<div class="col-6 text-end">
						<button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#tambahFasilitas">
							<i class="fas fa-plus" aria-hidden="true"></i>
							<span class="ms-lg-2 ms-0 d-lg-inline d-none">Fasilitas</span>
						</button>
					</div>
				</div>
			</div>
			<div class="card-body px-0 pt-0 pb-2">
				<div class="table-responsive p-0">
					<table class="table align-items-center mb-0 display" id="example" style="width:100%">
						<thead class="bg-light opacity-5">
							<tr>
								<th class="text-uppercase text-dark text-xxs text-center font-weight-bolder opacity-10" width="1px">#</th>
								<th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Fasilitas</th>
								<th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php if($fasilitas->num_rows() > 0): ?>
							<?php $no=1 ;foreach($fasilitas->result() as $row){ ?>
							<!-- Jika ada data pelatihan -->
							<tr>
								<td class="align-top text-center text-sm"><?= $no++ ?></td>
								<td class="align-top">
									<div class="d-flex py-1">
										<div class="d-lg-inline d-none">
										    <h3><i class="<?= $row->icon ?>"></i> &nbsp;&nbsp;</h3>	
										</div>
										<div class="d-flex flex-column justify-content-center">
											<h6 class="mb-2 text-sm wrap-table-argon"><?= $row->fasilitas ?></h6>
										</div>
									</div>
								</td>
								<td class="align-top">
									<div class="ms-auto text-center">
										<button type="button" data-bs-toggle="modal" data-bs-target="#modal-remove-<?= $row->id ?>" class="btn btn-link btn-sm py-0 text-danger px-2 mb-0 btn-remove" data-id="<?= $row->id ?>"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
										<button type="button" data-bs-toggle="modal" data-bs-target="#modal-edit-<?= $row->id ?>" class="btn btn-link btn-sm py-0 text-info px-2 mb-0 btn-edit" data-id="<?= $row->id ?>"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
									</div>
								</td>
							</tr>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="modal-edit-<?= $row->id ?>" tabindex="-1" aria-labelledby="modal-edit-<?= $row->id ?>" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title">EDIT FASILITAS</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= site_url('admin/fasilitas/update/' . $row->id) ?>" enctype="multipart/form-data" method="post">
                                        <div class="modal-body bg-gray-100">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-2">
                                                        <label class="form-control-label" for="input-nama">Fasilitas <span class="text-danger">*</span></label>
                                                        <input type="text" name="fasilitas" class="form-control" placeholder="Tulis Fasilitas" value="<?= $row->fasilitas ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mt-3">
                                                    <label>Pilih Icon <small class="text-danger">*</small></label>
                                                    <div class="input-group mb-3 justify-content-center" style="max-height: 350px!important; overflow-y: scroll;">
                                                        <?php foreach($fontawesome->result() as $fa){ ?>
                                                            <div class="form-check form-check-inline text-center">
                                                                <input class="form-check-input" type="radio" name="icon" id="inlineRadioIcon<?= $fa->id ?>" value="<?= $fa->class ?>" required="" <?= ($row->icon == $fa->class) ? 'checked' : '' ?>>
                                                                <label class="form-check-label" for="inlineRadioIcon<?= $fa->id ?>"></label>
                                                                <h4><i class="<?= $fa->class ?> mb-0"></i></h3>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer pb-0 d-flex justify-content-start">
                                            <button type="submit" class="btn bg-gradient-dark w-100 mb-0">SIMPAN</button>
                                            <button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Delete -->
                            <div class="modal fade" id="modal-remove-<?= $row->id ?>" tabindex="-1" aria-labelledby="modalRemove" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title-notification">Hapus Fasilitas</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="py-3 text-center">
                                                <div class="text-center">
                                                    <h3><i class="<?= $row->icon ?>"></i></h3>	
                                                    <p><strong><?= $row->fasilitas ?></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="<?= site_url('admin/fasilitas/delete/' . $row->id) ?>" method="post">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger w-100 mb-0">HAPUS</button>
                                                <button data-bs-dismiss="modal" type="button" class="btn btn-transparant shadow-none w-100 mb-0">BATAL</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
						<?php else: ?>
							<!-- Jika tidak ada data sama sekali -->
							<tr>
								<td colspan="4" class="text-center py-4 mb-0">Data masih kosong</td>
							</tr>
						<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Fasilitas -->
<div class="modal fade" id="tambahFasilitas" tabindex="-1" aria-labelledby="tambahFasilitas" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="tambahFasilitas">TAMBAH FASILITAS</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= site_url('admin/fasilitas/create') ?>" enctype="multipart/form-data" method="post">
			<div class="modal-body bg-gray-100">
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group mb-2">
							<label class="form-control-label" for="input-nama">Fasilitas <span class="text-danger">*</span></label>
							<input type="text" name="fasilitas" class="form-control" placeholder="Tulis Fasilitas" value="" required="">
						</div>
					</div>
					<div class="col-lg-12 mt-3">
                        <label>Pilih Icon <small class="text-danger">*</small></label>
                        <div class="input-group mb-3 justify-content-center" style="max-height: 350px!important; overflow-y: scroll;">
                            <?php foreach($fontawesome->result() as $fa){ ?>
                                <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input" type="radio" name="icon" id="inlineRadioIcon<?= $fa->id ?>" value="<?= $fa->class ?>" required="">
                                    <label class="form-check-label" for="inlineRadioIcon<?= $fa->id ?>"></label>
                                    <h4><i class="<?= $fa->class ?> mb-0"></i></h3>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
				</div>
			</div>
			<div class="modal-footer pb-0 d-flex justify-content-start">
				<button type="submit" class="btn bg-gradient-dark w-100 mb-0">SIMPAN</button>
				<button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
			</div>
			</form>
		</div>
	</div>
</div>