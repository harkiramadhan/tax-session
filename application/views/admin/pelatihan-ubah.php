<div class="row">
	<div class="col-md-12">
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
				<form method="post" action="<?= site_url('admin/pelatihan/update/' . $this->uri->segment(4)) ?>" enctype="multipart/form-data">
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
						<div class="col-lg-3">
							<div class="form-group">
								<label for="" class="form-control-label">Status Kegiatan <spanclass="text-danger">*</span></label>
									<select name="status_kegiatan" class="form-control" required="">
									<option value="">- Pilih Status Kegiatan -</option>
									<option value="1">Belum Berjalan</option>
									<option value="2">Sedang Berjalan</option>
									<option value="3">Sudah Berjalan</option>
									<option value="4" >Selesai</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">

							<label for="" class="form-control-label">Deskripsi Pelatihan <span class="text-danger">*</span></label>
							<div id="editor" class="h-auto">
								
							</div>
							<input type='hidden' name='deskripsi' value="<?= $pelatihan->deskripsi ?>" id='hidden-input'>
						</div>
						<div class="col-12 mt-3 d-grid">
							<button type="submit" class="btn bg-gradient-dark mb-0">SIMPAN</button>
							<a href="<?= site_url('admin/pelatihan') ?>" class="btn btn-link mb-0 text-secondary mt-2">KEMBALI</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>