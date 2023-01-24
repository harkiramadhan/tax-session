<div class="row">
	<div class="col-md-12">
		<form method="post" action="<?= site_url('admin/pelatihan/update/' . $this->uri->segment(4)) ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-header pb-4 border-bottom">
							<div class="row">
								<div class="col-6 d-flex align-items-center">
									<h6 class="mb-0">UBAH PELATIHAN</h6>
								</div>
								<div class="col-6 text-end">
									<!-- <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;<span class="d-lg-inline d-none">Pelatihan</span></a> -->
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-control-label" for="input-nama">Judul Pelatihan <span class="text-danger">*</span></label>
										<input type="text" name="title" class="form-control" placeholder="Judul Pelatihan" required="" value="<?= $pelatihan->judul ?>">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-control-label" for="input-gambar">Gambar Cover
										<span class="text-danger">*</span></label>
										<div class="mb-3">
											<input class="form-control" type="file" name="file" id="image-source" onchange="previewImage()">
										</div>
									</div>
									<div class="mb-2 mt-2 text-center">
										<?php if($pelatihan->cover_img != NULL): ?>
											<img src="<?= base_url('uploads/pelatihan/' . $pelatihan->cover_img) ?>" class="img-fluid img-center shadow rounded" style="max-height: 250px" id="image-preview">
										<?php else: ?>
											<img src="" class="img-fluid img-center shadow rounded d-none" style="max-height: 250px" id="image-preview">
										<?php endif; ?>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-email">Harga Pelatihan <span class="text-danger">*) Jika Gratis, Tuliskan Angka 0</span></label>
										<input type="text" name="harga" class="form-control" placeholder="Tulis Harga" value="<?= rupiah($pelatihan->harga) ?>" required="" id="harga">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="input-nominal">Discount <span class="text-danger">*) Jika Ada Dalam %</span></label>
										<input type="number" name="diskon" class="form-control" value="<?= $pelatihan->diskon ?>" placeholder="Persentase Diskon">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="input-aksi">Pemateri <span class="text-danger">*</span></label>
										<input type="text" name="pemateri" class="form-control" placeholder="Nama Pemateri" value="<?= $pelatihan->pemateri ?>" required="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label class="form-control-label" for="input-email">Tanggal Mulai<span class="text-danger">*</span></label>
										<input type="date" name="tanggal_mulai" class="form-control" placeholder="" value="<?= $pelatihan->tanggal_mulai ?>" required="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label class="form-control-label" for="input-email">Tanggal Selesai<span class="text-danger">*</span></label>
										<input type="date" name="tanggal_selesai" class="form-control" placeholder="" value="<?= $pelatihan->tanggal_selesai ?>" required="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label">Waktu Pelatihan <span class="text-danger">*) 00:00 - 00:00 WIB</span></label>
										<input type="text" name="waktu" class="form-control" placeholder="Waktu Pelatihan" value="<?= $pelatihan->waktu ?>" required="">
									</div>
								</div>
								<div class="col-lg-3">
									<div class="form-group">
										<label for="" class="form-control-label">Status Pelatihan <spanclass="text-danger">*</spanclass=></label>
										<select name="status" class="form-control" required="">
											<option value="">- Pilih Status Pelatihan -</option>
											<option <?= ($pelatihan->status == 1) ? 'selected' : '' ?> value="1" selected="">Aktif</option>
											<option <?= ($pelatihan->status == 0) ? 'selected' : '' ?> value="0">Draft</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">

									<label for="" class="form-control-label">Deskripsi Pelatihan <span class="text-danger">*</span></label>
									<div id="editor" class="h-auto">
										
									</div>
									<input type='hidden' name='deskripsi' value="<?= $pelatihan->deskripsi ?>" id='hidden-input'>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="card">
						<div class="card-header pb-4 border-bottom">
							<div class="row">
								<div class="col-6 d-flex align-items-center">
									<h6 class="mb-0">FASILITAS PELATIHAN</h6>
								</div>
								<div class="col-6 text-end">
									<button type="button" class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#tambahFasilitas">
										<i class="fas fa-plus" aria-hidden="true"></i>
										<span class="ms-lg-2 ms-0 d-lg-inline d-none">Fasilitas</span>
									</button>
								</div>
							</div>
						</div>
						<div class="card-body mt-0 pt-0">
							<div class="table">
								<table class="table table-sm align-items-center mb-0 display" id="example" style="width:100%">
									<thead>
										<tr>
											<th width="5%">#</th>
											<th width="90%">Fasilitas</th>
											<th></th>
										</tr>
									</thead>
									<tbody id="data-fasilitas">
										<?php foreach($fasilitas_kelas->result() as $fp){ ?>
											<tr id="row-fasilitas-<?= $fp->id ?>">
												<td></td>        
												<td class="align-top" id="fasilitas-list-<?= $fp->id ?>">
													<div class="d-flex py-1">
														<div class="d-lg-inline d-none">
															<h3><i class="fas <?= $fp->icon ?>" aria-hidden="true"></i> &nbsp;&nbsp;</h3>
														</div>
														<div class="d-flex flex-column justify-content-center">
															<h6 class="mb-2 text-sm wrap-table-argon"><?= $fp->fasilitas ?></h6>
														</div>
													</div>
												</td>
												<td class="text-center">
													<button type="button" class="btn btn-sm btn-danger" onclick="removeFasilitas(<?= $fp->id ?>)"><i class="fas fa-trash" aria-hidden="true"></i></button>        
												</td>       
												<input type="hidden" name="fasilitasid[]" id="fasilitas-inpuut-<?= $fp->id ?>" value="<?= $fp->id ?>">      
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-12 mt-3 d-grid">
					<button type="submit" class="btn bg-gradient-dark mb-0">SIMPAN</button>
					<a href="<?= site_url('admin/pelatihan') ?>" class="btn btn-link mb-0 text-secondary mt-2">KEMBALI</a>
				</div>
			</div>
		</form>
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
			<div class="table-responsive" style="max-height: 400px">
				<table class="table align-items-center table-flush table-sm table-hover">
					<thead class="thead-light">
						<tr>   
							<th scope="col">Checklist</th>
							<th scope="col">Fasilitas</th>
						</tr>
					</thead>
					<form id="add-fasilitas">
					<tbody>
						<?php foreach($fasilitas->result() as $row){ ?>
							<tr>
								<td width="10" class="p-0 m-0 text-center">
									<div class="custom-control custom-control-alternative custom-checkbox mb-4 ml-3">
										<input class="custom-control-input" id="customCheck37809" type="checkbox" name="data[]" value="<?= $row->id."_".$row->icon."_".$row->fasilitas ?>">
										<label class="custom-control-label" for="customCheck37809"></label>
									</div>
								</td>
								<td scope="row">
									<div class="d-flex py-1">
										<div class="d-lg-inline d-none">
											<h3><i class="<?= $row->icon ?>"></i> &nbsp;&nbsp;</h3>	
										</div>
										<div class="d-flex flex-column justify-content-center">
											<h6 class="mb-2 text-sm wrap-table-argon"><?= $row->fasilitas ?></h6>
										</div>
									</div>
								</td>
							</tr>
						<?php } ?>
					</tbody>
					</form>
				</table>
			</div>
			<div class="modal-footer pb-0 d-flex justify-content-start">
				<button type="button" class="btn bg-gradient-dark w-100 mb-0 btn-add-fasilitas">TAMBAH</button>
				<button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
			</div>
		</div>
	</div>
</div>