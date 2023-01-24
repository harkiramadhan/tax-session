<?php
class Fasilitas extends CI_Controller{
    function __construct(){
		parent::__construct();

		$this->load->model('M_Fasilitas');
		if($this->session->userdata('masuk') != TRUE)
			redirect('admin','refresh');
	}

    function index(){
        $var = [
			'title' => 'Daftar Fasilitas Kelas',
			'fasilitas' => $this->M_Fasilitas->getAll(),
            'fontawesome' => $this->db->get('fontawesome'),
			'ajax' => [
				'fasilitas'
			]
		];

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/fasilitas', $var);
		$this->load->view('layout/admin/footer', $var);
    }

    function create(){
        $dataInsert = [
            'fasilitas' => $this->input->post('fasilitas', TRUE),
            'icon' => $this->input->post('icon', TRUE),
        ];
        $this->db->insert('fasilitas', $dataInsert);
        if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $dataUpdate = [
            'fasilitas' => $this->input->post('fasilitas', TRUE),
            'icon' => $this->input->post('icon', TRUE),
        ];
        $this->db->where('id', $id)->update('fasilitas', $dataUpdate);
        if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $this->db->where('id', $id)->delete('fasilitas');
        if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success', "Data Berhasil Di Hapus");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Hapus");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
    }
}