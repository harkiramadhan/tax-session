<div class="row">
	<div class="col-12">
		<div class="card mb-4">
			<div class="card-header pb-4">
				<div class="row">
					<div class="col-6 d-flex align-items-center">
						<h6 class="mb-0">DAFTAR FAQ</h6>
					</div>
					<div class="col-6 text-end">
						<button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#tambahFaq">
							<i class="fas fa-plus" aria-hidden="true"></i>
							<span class="ms-lg-2 ms-0 d-lg-inline d-none">Pertanyaan</span>
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
								<th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Pertanyaan</th>
								<th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Status</th>
								<th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php if($faq->num_rows() > 0): ?>
								<?php $no = 1; foreach($faq->result() as $row){ ?>
									<!-- Jika ada data pelatihan -->
									<tr>
										<td class="align-top text-center text-sm"><?= $no++ ?></td>
										<td class="align-top">
											<div class="d-flex px-2 py-1">
												<div class="d-flex flex-column justify-content-center">
													<h6 class="mb-0 text-sm"><?= $row->question ?></h6>
													<p class="small text-xs text-secondary mb-0"><?= $row->answer ?></p>
												</div>
											</div>
										</td>
										<td class="align-top text-center text-sm">
											<span class="badge badge-sm <?= ($row->status == 1) ? 'bg-gradient-success' : 'bg-gradient-danger' ?>"><?= ($row->status == 1) ? 'Aktif' : 'Draft' ?></span> 
										<td class="align-top">
											<div class="ms-auto text-center">
												<button type="button" class="btn btn-link btn-sm py-0 text-danger px-2 mb-0 btn-remove" data-id="<?= $row->id ?>"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
												<button type="button" class="btn btn-link btn-sm py-0 text-dark px-2 mb-0 btn-edit" data-id="<?= $row->id ?>"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
											</div>
										</td>
									</tr>
								<?php } ?>
							<?php else: ?>
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

<!-- Modal Tambah Banner -->
<div class="modal fade" id="tambahFaq" tabindex="-1" aria-labelledby="tambahFaq" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="tambahFaq">TAMBAH PERTANYAAN</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= site_url('admin/faq/create') ?>" method="post">
			<div class="modal-body bg-gray-100">
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Pertanyaan <span class="text-danger">*</span></label>
								<input type="text" name="question" class="form-control" placeholder="Tulis nama patner" value="" required="">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Jawaban <span class="text-danger">*</span></label>
								<textarea name="answer" class="form-control font-weight-bold text-muted" cols="30" rows="5" required=""></textarea>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label for="input-aksi">Status <span class="text-danger">*</span></label>
								<select class="form-control" name="status" required="">
									<option value="">- Pilih -</option>
									<option value="1">Aktif</option>
									<option value="2">Draft</option>
								</select>
							</div>
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

<div class="modal fade" id="editFaq" tabindex="-1" aria-labelledby="editFaq" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content edit-content">
			
		</div>
	</div>
</div>

<div class="modal fade" id="modalRemove" tabindex="-1" aria-labelledby="modalRemove" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content remove-content">
			
		</div>
	</div>
</div>