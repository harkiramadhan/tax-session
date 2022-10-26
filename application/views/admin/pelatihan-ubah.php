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
            				<div class="row">
            					<div class="col-lg-12">
            						<div class="form-group">
            							<label class="form-control-label" for="input-nama">Judul Pelatihan <span
            									class="text-danger">*</span></label>
            							<input type="text" name="title" class="form-control" placeholder="Judul Acara"
            								value="Seminar Nasional - Implementasi Neuro Education di PAUD" required="">
            						</div>
            					</div>
            					<div class="col-lg-12">
            						<div class="form-group">
            							<label class="form-control-label" for="input-gambar">Gambar Cover
                                            <span class="text-danger">*</span></label>
                                                <div class="mb-3">
                                                <input class="form-control" type="file" id="formFile">
                                                </div>
            						</div>
            						<div class="mb-2 mt-2 text-center">
            							<img src="https://i.ibb.co/pw3vD4p/Implementasi-Neuro-Education-di-PAUD-Banner-Lanskap.png"
            								class="img-fluid img-center shadow rounded" style="max-height: 250px">
            						</div>
            					</div>
            					<div class="col-lg-6">
            						<div class="form-group">
            							<label class="form-control-label" for="input-email">Harga Acara <span
            									class="text-danger">*) Jika Gratis, Tuliskan Angka 0</span></label>
            							<input type="number" name="price" class="form-control" placeholder="Tulis Harga"
            								value="0" required="">
            						</div>
            					</div>
            					<div class="col-lg-6">
            						<div class="form-group">
            							<label class="form-control-label" for="input-nominal">Discount <span
            									class="text-danger">*) Jika Ada Dalam %</span></label>
            							<input type="number" name="discount" class="form-control" value="0"
            								placeholder="Persentase Diskon">
            						</div>
            					</div>
            					<div class="col-lg-6">
            						<div class="form-group">
            							<label for="input-aksi">Pemateri <span class="text-danger">*</span></label>
            							<select class="form-control" name="pemateriid" required="">
            								<option value="">- Pilih Pemateri -</option>
            								<option value="2" selected="">Dr. Irma Yuliantina, M.Pd</option>
            								<option value="3">Reni Nurlaela, M.Pd</option>
            							</select>
            						</div>
            					</div>
            					<div class="col-lg-3">
            						<div class="form-group">
            							<label class="form-control-label" for="input-email">Tanggal Mulai<span
            									class="text-danger">*</span></label>
            							<input type="date" name="tanggal" class="form-control" placeholder=""
            								value="2022-01-29" required="">
            						</div>
            					</div>
            					<div class="col-lg-3">
            						<div class="form-group">
            							<label class="form-control-label" for="input-email">Tanggal Selesai<span
            									class="text-danger">*</span></label>
            							<input type="date" name="tanggal" class="form-control" placeholder=""
            								value="2022-01-29" required="">
            						</div>
            					</div>
            					<div class="col-lg-6">
            						<div class="form-group">
            							<label class="form-control-label">Waktu Acara <span class="text-danger">*) 00:00
            									- 00:00 WIB</span></label>
            							<input type="text" name="waktu" class="form-control" placeholder="Waktu Acara"
            								value="10.00 - 12.00 WIB" required="">
            						</div>
            					</div>
            					<div class="col-lg-3">
            						<div class="form-group">
            							<label for="" class="form-control-label">Status Acara <span
            									class="text-danger">*</span></label>
            							<select name="status" class="form-control" required="">
            								<option value="">- Pilih Status Acara -</option>
            								<option value="1" selected="">Aktif</option>
            								<option value="0">Draft</option>
            							</select>
            						</div>
            					</div>
            					<div class="col-lg-3">
            						<div class="form-group">
            							<label for="" class="form-control-label">Status Kegiatan <span
            									class="text-danger">*</span></label>
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
            					</div>
                                <div class="col-12 mt-3 d-grid">
                                    <button class="btn bg-gradient-dark mb-0" href="javascript:;">SIMPAN</button>
                                    <button class="btn btn-link mb-0 text-secondary mt-2" href="javascript:;">KEMBALI</button>
                                </div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
