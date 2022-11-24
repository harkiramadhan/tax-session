<?php

class Faq extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model([
			'M_Faq'
		]);

		if($this->session->userdata('masuk') != TRUE){
			redirect('admin','refresh');
		}
	}

	public function index(){
        $var = [
			'title' => 'Daftar FAQ Landing Page',
			'faq' => $this->M_Faq->getAll(),
			'ajax' => [
				'faq'
			]
		];
		
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/faq', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	/* Ajax Here */
	function edit($id){
		$faq = $this->M_Faq->getById($id);

		?>
			<div class="modal-header">
				<h6 class="modal-title" id="tambahFaq">EDIT PERTANYAAN</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= site_url('admin/faq/update/' . $id) ?>" method="post">
			<div class="modal-body bg-gray-100">
				<div class="row">
					<div class="col-lg-12">
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Pertanyaan <span class="text-danger">*</span></label>
								<input type="text" name="question" class="form-control" placeholder="Tulis nama patner" value="<?= $faq->question ?>" required="">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Jawaban <span class="text-danger">*</span></label>
								<textarea name="answer" class="form-control font-weight-bold text-muted" cols="30" rows="5" required=""><?= $faq->answer ?></textarea>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label for="input-aksi">Status <span class="text-danger">*</span></label>
								<select class="form-control" name="status" required="">
									<option value="">- Pilih -</option>
									<option <?= ($faq->status == 1) ? 'selected' : '' ?> value="1">Aktif</option>
									<option <?= ($faq->status == 2) ? 'selected' : '' ?> value="2">Draft</option>
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
		<?php
	}

	function remove($id){
		$faq = $this->M_Faq->getById($id);

		?>
			<div class="modal-header">
				<h6 class="modal-title" id="modal-title-notification">Hapus Faq</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="py-3 text-center">
					<h1><i class="fas fa-bell"></i></h1>
					<h4 class="text-gradient text-danger mt-4">Hapus Faq!</h4>
					<p><?= $faq->question . ' <br> ' . $faq->answer ?></p>
				</div>
			</div>
			<form action="<?= site_url('admin/faq/delete/' . $id) ?>" method="post">
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger w-100 mb-0">HAPUS</button>
					<button data-bs-dismiss="modal" type="button" class="btn btn-transparant shadow-none w-100 mb-0">KEMBALI</button>
				</div>
			</form>
		<?php
	}

	/* Action Here */
	function create(){
		$dataInsert = [
			'question' => $this->input->post('question', TRUE),
			'answer'=> $this->input->post('answer', TRUE),
			'status' => $this->input->post('status', TRUE)
		];
		$this->db->insert('faq', $dataInsert);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}

	function update($id){
		$dataUpdate = [
			'question' => $this->input->post('question', TRUE),
			'answer'=> $this->input->post('answer', TRUE),
			'status' => $this->input->post('status', TRUE)
		];
		$this->db->where('id', $id)->update('faq', $dataUpdate);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}

	function delete($id){
		$this->db->where('id', $id)->delete('faq');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Hapus");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Hapus");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}
}

