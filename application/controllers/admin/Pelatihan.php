<?php

class Pelatihan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('image_lib');

		$this->load->model('M_Pelatihan');
		if($this->session->userdata('masuk') != TRUE)
			redirect('admin','refresh');
	}

	private function resizeImage($filename){
        $config['image_library'] = 'gd2';  
        $config['source_image'] = './uploads/pelatihan/'.$filename;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = TRUE;  
        $config['quality'] = '75%';  
        $config['new_image'] = './uploads/pelatihan/'.$filename;  
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

	function participant(){
        $var['title'] = "Daftar Peserta Pelatihan";
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan-peserta', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	/* Action */
	function create(){
		$filename = NULL;
		$config['upload_path'] = './uploads/pelatihan';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename); 
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
			$this->resizeImage($filename); 
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
	
}
