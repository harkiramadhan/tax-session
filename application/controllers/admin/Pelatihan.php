<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pelatihan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('image_lib');

		$this->load->model([
			'M_Pelatihan',
			'M_Fasilitas'
		]);
		if($this->session->userdata('masuk') != TRUE)
			redirect('admin','refresh');
	}

	private function resizeImage($filename, $loc){
        $config['image_library'] = 'gd2';  
        $config['source_image'] = './uploads/'.$loc.'/'.$filename;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = TRUE;  
        $config['quality'] = '75%';  
        $config['new_image'] = './uploads/'.$loc.'/'.$filename;  
        $config['width'] = 500;              
  
        $this->image_lib->initialize($config);
        $this->image_lib->resize();  
        $this->image_lib->clear();
    }
	
	function index(){
        $var = [
			'title' => 'Pelatihan',
			'pelatihan' => $this->M_Pelatihan->getAll(),
			'ajax' => [
				'pelatihan'
			]
		];

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan', $var);
		$this->load->view('layout/admin/footer', $var);
	}

    function add(){
		$var = [
			'title' => 'Tambah Pelatihan Baru',
			'fasilitas' => $this->M_Fasilitas->getAll(),
			'ajax'	=> [
				'pelatihan-add'
			]
		];
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan-tambah', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	function edit($id){
        $var = [
			'title' => 'Ubah Pelatihan',
			'pelatihan' => $this->M_Pelatihan->getById($id),
			'fasilitas' => $this->M_Fasilitas->getAll(),
			'fasilitas_kelas' => $this->M_Fasilitas->getByClass($id),
			'ajax' => [
				'pelatihan-edit'
			]
		];

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan-ubah', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	function delete(){
		$id = $this->input->get('id', TRUE);
		$pelatihan = $this->M_Pelatihan->getById($id);

		?>
		<div class="modal-header">
			<h6 class="modal-title" id="modal-title-notification">Hapus Pelatihan <?= $pelatihan->judul ?></h6>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="py-3 text-center">
				<i class="ni ni-bell-55 ni-3x"></i>
				<h5 class="text-gradient text-danger mt-4">Apakah Anda Yakin Menghapus Pelatihan!</h5>
				<h4><strong><?= $pelatihan->judul ?></strong>.</h4>
			</div>
		</div>
		<form action="<?= site_url('admin/pelatihan/remove') ?>" method="post">
		<input type="hidden" name="id" value="<?= $id ?>">
		<div class="modal-footer">
			<button type="button" class="btn btn-white" data-bs-dismiss="modal">Batal</button>
			<button type="submit" class="btn btn-danger ml-auto">Ya, Hapus</button>
		</div>
		</form>
		<?php
	}

	function participant($id){
        $var = [
			'title' => 'Daftar Peserta Pelatihan',
			'pelatihan' => $this->M_Pelatihan->getById($id),
			'peserta' => $this->M_Pelatihan->getPeserta($id),
			'paid' => $this->M_Pelatihan->getPaid($id),
			'unpaid' => $this->M_Pelatihan->getUnpaid($id),
			'ajax' => [
				'participant'
			]
		];
		
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan-peserta', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	/* Ajax */
	function modalEditParticipant($id){
		$peserta = $this->M_Pelatihan->getPesertaById($id);
		?>
			<div class="modal-header">
                <h6 class="modal-title" id="dataPeserta">DATA PESERTA</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
			<form action="<?= site_url('admin/pelatihan/updatePeserta/' . $id) ?>" method="post">
            <div class="modal-body bg-gray-100">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="form-control-label" for="input-nama">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Tulis nama lengkapmu" value="<?= $peserta->nama ?>" required="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="form-control-label" for="input-nama">No HP/WA <span class="text-danger">*</span></label>
                            <input type="text" name="wa" class="form-control" placeholder="0821xxxxxx" value="<?= $peserta->wa ?>" required="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="form-control-label" for="input-nama">Email Aktif <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="email@gmail.com" value="<?= $peserta->email ?>" required="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label for="input-aksi">Jenis Kelamin <span class="text-danger">*</span></label>
                            <select class="form-control" name="jenkel" required="">
                                <option value="">- Pilih -</option>
                                <option <?= ($peserta->jenkel == 1) ? 'selected' : '' ?> value="1">Laki - Laki</option>
                                <option <?= ($peserta->jenkel == 2) ? 'selected' : '' ?> value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label for="input-aksi">Pendidikan Terahir <span class="text-danger">*</span></label>
                            <select class="form-control" name="pendidikan" required="">
                                <option value="">- Pilih -</option>
                                <option <?= ($peserta->pendidikan == 'SD') ? 'selected' : '' ?> value="SD">SD</option>
								<option <?= ($peserta->pendidikan == 'SMP/MTS') ? 'selected' : '' ?> value="SMP/MTS">SMP/MTS</option>
								<option <?= ($peserta->pendidikan == 'SMA/SMK') ? 'selected' : '' ?> value="SMA/SMK">SMA/SMK</option>
								<option <?= ($peserta->pendidikan == 'D3') ? 'selected' : '' ?> value="D3">D3</option>
								<option <?= ($peserta->pendidikan == 'S1/D4') ? 'selected' : '' ?> value="S1/D4">S1/D4</option>
								<option <?= ($peserta->pendidikan == 'S2') ? 'selected' : '' ?> value="S2">S2</option>
								<option <?= ($peserta->pendidikan == 'S3') ? 'selected' : '' ?> value="S3">S3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-0 d-flex justify-content-start">
                <button type="submit" class="btn bg-gradient-dark w-100 mb-0">SIMPAN</button>
                <button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
            </div>
			</form>
		<?php
	}

	function modalUploadParticipant($id){
		$peserta = $this->M_Pelatihan->getPesertaById($id);
		?>
			<form method="post" action="<?= site_url('admin/pelatihan/uploadPayment/' . $id) ?>" enctype="multipart/form-data">
				<div class="modal-header">
					<h6 class="modal-title" id="buktiPembayaran">BUKTI PEMBAYARAN</h6>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body bg-gray-100">
					<?php if(@$peserta->img): ?>
						<!-- Keterangan jika sudah ada bukti transfer -->
						<div class="mb-2 mt-2 text-center">
							<img src="<?= base_url('uploads/pembayaran/' . $peserta->img) ?>" class="img-fluid img-center shadow rounded" style="max-height: 200px" id="image-preview">
						</div>
					<?php else: ?>
						<!-- Keterangan jika belum ada bukti transfer -->
						<div class="border rounded w-100 p-4 text-center text-sm mt-0">
							Belum ada bukti pembayaran
						</div>

						<div class="mb-2 mt-2 text-center">
							<img src="" class="img-fluid img-center shadow rounded d-none" style="max-height: 200px" id="image-preview">
						</div>
					<?php endif ?>


					<!-- Tombol upload yang muncul selalu -->
					<div class="form-group mb-0">
						<label class="form-control-label" for="input-gambar">Upload Bukti Pembayaran
							<span class="text-danger">*</span>
						</label>
						<div class="mb-0">
							<input class="form-control" type="file" name="img" id="image-source" onchange="previewImage()">
						</div>
					</div>
				</div>
				<div class="modal-footer pb-0 d-flex justify-content-start">
					<button type="submit" class="btn bg-gradient-dark w-100 mb-0">SIMPAN</button>
					<button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
				</div>
			</form>
			<script>
				function previewImage() {
					var element = document.getElementById("image-preview")
					element.classList.remove("d-none")
					document.getElementById("image-preview").style.display = "block"

					var oFReader = new FileReader()
					oFReader.readAsDataURL(document.getElementById("image-source").files[0])
					oFReader.onload = function(oFREvent) {
						document.getElementById("image-preview").src = oFREvent.target.result
					}
				}
			</script>
		<?php
	}

	/* Action */
	function create(){
		$this->output->set_content_type('application/json')->set_output(json_encode($this->input->post()));
		
		$filename = NULL;
		$config['upload_path'] = './uploads/pelatihan';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, 'pelatihan'); 
        }else{
			$this->session->set_flashdata('error', $this->upload->display_errors());
		}

		$dataInsert = [
			'judul' => $this->input->post('title', TRUE),
			'flag' => strtolower(str_replace([' '], ['-'], $this->input->post('title', TRUE))),
			'cover_img' => $filename,
			'harga' => str_replace(['.', ',', ' '], '', $this->input->post('harga', TRUE)),
			'diskon' => $this->input->post('diskon', TRUE),
			'pemateri' => $this->input->post('pemateri', TRUE),
			'tanggal_mulai' => $this->input->post('tanggal_mulai', TRUE),
			'tanggal_selesai' => $this->input->post('tanggal_selesai', TRUE),
			'waktu' => $this->input->post('waktu', TRUE),
			'status' => $this->input->post('status', TRUE),
			'status_kegiatan' => $this->input->post('status_kegiatan', TRUE),
			'deskripsi' => $this->input->post('deskripsi', TRUE),
			'created_at' => date('Y-m-d H:i:s')
		];
		$this->db->insert('pelatihan', $dataInsert);
		if($this->db->affected_rows() > 0){
			$pelatihanid = $this->db->insert_id();
			$fasilitas = $this->input->post('fasilitasid[]', TRUE);
			foreach($fasilitas as $f){
				$this->db->insert('fasilitas_pelatihan', [
					'pelatihan_id' => $pelatihanid,
					'fasilitas_id' => $f
				]);
			}
			$this->session->set_flashdata('success', "Menambahkan Pelatihan");
		}else{
			$this->session->set_flashdata('error', "Menambahkan Pelatihan");
		}

		redirect('admin/pelatihan','refresh');
	}

	function update($id){
		$cekPelatihan = $this->M_Pelatihan->getById($id);
		$config['upload_path'] = './uploads/pelatihan';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
			if($cekPelatihan->cover_img != NULL){
				@unlink('./uploads/pelatihan/' . @$cekPelatihan->cover_img);
			}
			
            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, 'pelatihan'); 
        }else{
			$filename = $cekPelatihan->cover_img;
		}

		$dataUpdate = [
			'judul' => $this->input->post('title', TRUE),
			'flag' => strtolower(str_replace([' '], ['-'], $this->input->post('title', TRUE))),
			'cover_img' => $filename,
			'harga' => str_replace(['.', ',', ' '], '', $this->input->post('harga', TRUE)),
			'diskon' => $this->input->post('diskon', TRUE),
			'pemateri' => $this->input->post('pemateri', TRUE),
			'tanggal_mulai' => $this->input->post('tanggal_mulai', TRUE),
			'tanggal_selesai' => $this->input->post('tanggal_selesai', TRUE),
			'waktu' => $this->input->post('waktu', TRUE),
			'status' => $this->input->post('status', TRUE),
			'status_kegiatan' => $this->input->post('status_kegiatan', TRUE),
			'deskripsi' => $this->input->post('deskripsi', TRUE)
		];
		$this->db->where('id', $id)->update('pelatihan', $dataUpdate);
		$fasilitas = $this->input->post('fasilitasid[]', TRUE);
		$this->db->where('pelatihan_id', $id)->delete('fasilitas_pelatihan');
		if(is_countable($fasilitas) && count($fasilitas) > 0){
			foreach($fasilitas as $f){
				$this->db->insert('fasilitas_pelatihan', [
					'pelatihan_id' => $id,
					'fasilitas_id' => $f
				]);
			}
		}
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Menyimpan Pelatihan");
		}else{
			$this->session->set_flashdata('error', "Menyimpan Pelatihan");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}

	function remove(){
		$id = $this->input->post('id', TRUE);
		$pelatihan = $this->M_Pelatihan->getById($id);

		if($pelatihan->cover_img != NULL){
			@unlink('./uploads/pelatihan/' . @$pelatihan->cover_img);
		}

		$this->db->where('id', $id)->delete('pelatihan');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Menghapus Pelatihan");
		}else{
			$this->session->set_flashdata('error', "Menghapus Pelatihan");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}	

	function updatePeserta($id){
		$dataUpdate = [
			'nama' => $this->input->post('nama', TRUE),
			'wa' => $this->input->post('wa', TRUE),
			'email' => $this->input->post('email', TRUE),
			'jenkel' => $this->input->post('jenkel', TRUE),
			'pendidikan' => $this->input->post('pendidikan', TRUE),
		];
		$this->db->where('id', $id)->update('peserta', $dataUpdate);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}

	function uploadPayment($id){
		$cekPeserta = $this->M_Pelatihan->getPesertaById($id);
		$config['upload_path'] = './uploads/pembayaran';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
			if(@$cekPeserta->img != NULL){
				@unlink('./uploads/pembayaran/' . @$cekPeserta->img);
			}
			
            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, 'pembayaran'); 
        }else{
			$filename = @$cekPeserta->img;
		}

		$this->db->where('id', $id)->update('peserta', ['img' => $filename]);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Update");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Update");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}

	function payParticipant($id){
		$peserta = $this->M_Pelatihan->getPesertaById($id);
		$status = $this->input->get('status', TRUE);

		$this->db->where('id', $id)->update('peserta', ['status_bayar' => $status]);
		if($this->db->affected_rows() > 0){
			$msg = "Pembayaran " . $peserta->nama . " Berhasil Di Simpan";
			$resStatus = 200;
		}else{
			$msg = "Pembayaran " . $peserta->nama . " Gagal Di Simpan";
			$resStatus = 400;
		}

		$response = [
			'message' => $msg,
			'status' => $resStatus,
			'color' => ($status == 1) ? 'success' : 'danger',
			'text' => ($status == 1) ? 'Lunas' : 'Belum',
		];

		$this->output->set_content_type('application/json')->set_output(json_encode($response));
		
	}

	function exportParticipant($id){
		$pelatihan = $this->M_Pelatihan->getById($id);
		$peserta = $this->M_Pelatihan->getPeserta($id);

		$spreadsheet = new Spreadsheet();  
		$Excel_writer = new Xlsx($spreadsheet);

		$spreadsheet->setActiveSheetIndex(0);
		$sheet = $spreadsheet->getActiveSheet();

		$style = array (
			'alignment' => [
				'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
				'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
			],
			'font' => [
				'bold' => true,
			],
		);

		$style2 = array (
			'alignment' => [
				'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
				'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
			],
			'font' => [
				'bold' => true,
				'color' => [
					'rgb' => 'ffffff'
				]
			],
			'fill' => [
				'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
				'startColor' => [
					'argb' => 'ff0000',
				],
			], 
		);

		$style3 = array (
			'alignment' => [
				'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
				'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
			],
			'font' => [
				'bold' => true
			],
			'fill' => [
				'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
				'startColor' => [
					'argb' => '00ff37',
				],
			], 
		);

		$styleHeader = array (
			'font' => [
				'bold' => true,
			],
			'alignment' => [
				'horizontal'    => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
				'vertical'      => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
			], 
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_MEDIUM,
				],
			],
		); 

		$spreadsheet->getActiveSheet()->getStyle('A1:H1')->applyFromArray($style);
		$spreadsheet->getActiveSheet()->getStyle('A2:H2')->applyFromArray($style);
		$spreadsheet->getActiveSheet()->getStyle('B4:H4')->applyFromArray($styleHeader);

		$sheetStyle = $spreadsheet->getActiveSheet();  

		$sheetStyle->mergeCells('A1:H1');
		$sheetStyle->mergeCells('A2:H2');
		$sheetStyle->setCellValue('B4','No');
		$sheetStyle->setCellValue('C4','Nama Lengkap');
		$sheetStyle->setCellValue('D4','Jenis Kelamin');
		$sheetStyle->setCellValue('E4','Email');
		$sheetStyle->setCellValue('F4','WhatsApp');
		$sheetStyle->setCellValue('G4','Pendidikan');
		$sheetStyle->setCellValue('H4','Status Bayar');
		
		$excel_row = 5;
		$no = 1;

		foreach(range('B','H') as $columnID) {
			$spreadsheet->getActiveSheet()->getColumnDimension($columnID)
				->setAutoSize(true);
		}

		$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(1, 1, "Data Peserta Pelatihan");
		$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(1, 2, ucfirst(ucwords($pelatihan->judul)));

		foreach($peserta->result() as $row){
			$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $no++);
			$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->nama);
			$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, ($row->jenkel == 1) ? 'Laki - Laki' : 'Perempuan');
			$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->email);
			$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->wa);
			$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->pendidikan);
			$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, ($row->status_bayar == 1) ? 'Lunas' : 'Belum');
			if($row->status_bayar == 1){
				$spreadsheet->getActiveSheet()->getStyle("H" . $excel_row)->applyFromArray($style3);
			}else{
				$spreadsheet->getActiveSheet()->getStyle("H" . $excel_row)->applyFromArray($style2);
			}
			$excel_row++;
		}

		header('Content-Type: application/vnd.ms-excel');
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
		header('Content-Disposition: attachment;filename="Data Peserta Pelatihan - '.ucfirst(ucwords($pelatihan->judul)).'.Xlsx"'); 
		header('Cache-Control: max-age=0');
		ob_end_clean();
		$Excel_writer->save('php://output');
		exit;

		// redirect($_SERVER['HTTP_REFERER']);
	}
}