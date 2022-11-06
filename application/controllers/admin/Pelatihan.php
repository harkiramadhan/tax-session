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
			'pelatihan' => $this->M_Pelatihan->getAll()
		];

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan', $var);
		$this->load->view('layout/admin/footer', $var);
	}

    function add(){
		$var = [
			'title' => 'Tambah Pelatihan Baru',
			'ajax'	=> [
				'pelatihan'
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
			$this->session->set_flashdata('success', "Pelatihan Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Pelatihan Gagal Di Simpan");
		}

		redirect($_SERVER['HTTP_REFERER']);
	}
	
}
