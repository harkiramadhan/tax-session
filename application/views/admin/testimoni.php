	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-4">
					<div class="row">
						<div class="col-6 d-flex align-items-center">
							<h6 class="mb-0">DAFTAR TESTIMONI AKTIF</h6>
						</div>
						<div class="col-6 text-end">
							<button class="btn bg-gradient-dark mb-0"  data-bs-toggle="modal" data-bs-target="#tambahTestimoni">
								<i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;
								<span class="d-lg-inline d-none">Testimoni</span>
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
										Testimoni</th>
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
												<a href="http://localhost/tax-session/admin/pelatihan/peserta"
													class="text-xs font-weight-bold mb-0">
													<i class="fa fa-link me-2 text-success" aria-hidden="true"></i>
													<span class="text-dark">Link tujuan</span>
													<i class="fa fa-arrow-right text-success ms-2"
														aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</td>
									<td class="align-top text-center text-sm">
										<span class="badge badge-sm bg-gradient-success">Aktif</span> </td>
									<td class="align-top">
										<div class="ms-auto text-center">
											<button type="button" class="btn btn-link btn-sm py-0 text-danger px-2 mb-0 btn-remove" data-id="5"><i class="far fa-trash-alt" aria-hidden="true"></i></button>
											<a class="btn btn-link btn-sm py-0 text-dark px-2 mb-0" href="http://localhost/tax-session/admin/pelatihan/edit/5"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
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
	<div class="modal fade" id="tambahTestimoni" tabindex="-1" aria-labelledby="tambahTestimoni" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="tambahTestimoni">TAMBAH TESTIMONI</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body bg-gray-100">
					<div class="row">
					<div class="col-lg-12">
						<div class="mb-2 mt-2 text-center">
							<img src="http://localhost/tax-session/uploads/pelatihan/b6bf8464f52f204a2220dd05ef6c341f.jpg" class="img-fluid img-center shadow rounded" style="max-height: 250px" id="image-preview">
						</div>
							<div class="form-group">
								<label class="form-control-label" for="input-gambar">Gambar Profil
								<span class="text-danger">*</span></label>
								<div class="mb-3">
									<input class="form-control" type="file" name="file" id="image-source" onchange="previewImage()">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Judul <span class="text-danger">*</span></label>
								<input type="text" name="" class="form-control" placeholder="Tulis judul banner" value="" required="">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Link tujuan <span class="text-danger">*</span></label>
								<input type="text" name="" class="form-control" placeholder="Cantumkan link pada kolom" value="" required="">
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
				<div class="modal-footer pb-0 d-flex justify-content-start">
					<button type="button" class="btn bg-gradient-dark w-100 mb-0">SIMPAN</button>
					<button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
				</div>
			</div>
		</div>
	</div>