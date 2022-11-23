<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header pb-4 border-bottom">
				<div class="row">
					<div class="col-6 d-flex align-items-center">
						<h6 class="mb-0">TAMBAH PELATIHAN</h6>
					</div>
					<div class="col-6 text-end">
						<!-- <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;<span class="d-lg-inline d-none">Pelatihan</span></a> -->
					</div>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="<?= site_url('admin/pelatihan/create') ?>" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label class="form-control-label" for="input-nama">Nomor Kontak <span class="text-danger">*</span></label>
								<input type="text" name="title" class="form-control" placeholder="Nomor Kontak" required="">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label class="form-control-label" for="input-nama">Instagram <span class="text-danger">*</span></label>
								<input type="text" name="title" class="form-control" placeholder="Instagram" required="">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label class="form-control-label" for="input-nama">Facebook <span class="text-danger">*</span></label>
								<input type="text" name="title" class="form-control" placeholder="Facebook" required="">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label class="form-control-label" for="input-nama">Tiktok <span class="text-danger">*</span></label>
								<input type="text" name="title" class="form-control" placeholder="Tiktok" required="">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label class="form-control-label" for="input-nama">Youtube <span class="text-danger">*</span></label>
								<input type="text" name="title" class="form-control" placeholder="Youtube" required="">
							</div>
						</div>
						<div class="col-12 mt-3 d-grid">
							<button type="submit" class="btn bg-gradient-dark mb-0">SIMPAN</button>
							<button type="button" class="btn btn-link mb-0 text-secondary mt-2">KEMBALI</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>