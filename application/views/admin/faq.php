	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-4">
					<div class="row">
						<div class="col-6 d-flex align-items-center">
							<h6 class="mb-0">DAFTAR FAQ AKTIF</h6>
						</div>
						<div class="col-6 text-end">
							<button class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#tambahFaq">
								<i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;
								<span class="d-lg-inline d-none">Pertanyaan</span>
							</button>
						</div>
					</div>
				</div>
				<div class="card-body px-0 pt-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0 display" id="example" style="width:100%">
							<thead class="bg-light opacity-5">
								<tr>
									<th class="text-uppercase text-dark text-xxs text-center font-weight-bolder opacity-10"
										width="1px">#</th>
									<th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
										Pertanyaan</th>
									<th
										class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
										Status</th>
									<th
										class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-10">
										Aksi</th>
								</tr>
							</thead>
							<tbody>

								<!-- Jika ada data pelatihan -->
								<tr>
									<td class="align-top text-center text-sm">1</td>
									<td class="align-top">
										<div class="d-flex px-2 py-1">
											<div class="d-lg-inline d-none">
												<img src="http://localhost/tax-session/uploads/pelatihan/b6bf8464f52f204a2220dd05ef6c341f.jpg" class="avatar avatar-lg me-3" alt="user1" style="object-fit: cover;">
											</div>
											<div class="d-flex flex-column justify-content-center">
												<h6 class="mb-2 text-sm wrap-table-argon">Tax Session</h6>
											</div>
										</div>
									</td>
									<td class="align-top text-center text-sm">
										<span class="badge badge-sm bg-gradient-success">Aktif</span> </td>
									<td class="align-top">
										<div class="ms-auto text-center">
											<button type="button" class="btn btn-link btn-sm py-0 text-danger px-2 mb-0 btn-remove" data-id="5"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
											<button class="btn btn-link btn-sm py-0 text-dark px-2 mb-0" data-bs-toggle="modal" data-bs-target="#tambahFaq"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
										</div>
									</td>
								</tr>
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
				<div class="modal-body bg-gray-100">
					<div class="row">
						<div class="col-lg-12">
							<div class="col-lg-12">
								<div class="form-group mb-2">
									<label class="form-control-label" for="input-nama">Pertanyaan <span class="text-danger">*</span></label>
									<input type="text" name="" class="form-control" placeholder="Tulis nama patner" value="" required="">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mb-2">
									<label class="form-control-label" for="input-nama">Jawaban <span class="text-danger">*</span></label>
									<textarea name="deskripsi" class="form-control font-weight-bold text-muted" cols="30" rows="5" required=""></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mb-2">
									<label for="input-aksi">Status <span class="text-danger">*</span></label>
									<select class="form-control" name="#" required="">
										<option value="">- Pilih -</option>
										<option value="2">Aktif</option>
										<option value="3">Draft</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer pb-0 d-flex justify-content-start">
					<button type="button" class="btn bg-gradient-dark w-100 mb-0">SIMPAN</button>
					<button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
				</div>
			</div>
		</div>
	</div>