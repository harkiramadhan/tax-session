<?php

class Pelatihan extends CI_Controller {
	
	public function index(){
        $var['title'] = "Pelatihan";
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan', $var);
		$this->load->view('layout/admin/footer', $var);
	}

    public function tambah(){
        $var['title'] = "Tambah Pelatihan Baru";
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan-tambah', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	public function ubah(){
        $var['title'] = "Ubah Pelatihan";
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan-ubah', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	public function peserta(){
        $var['title'] = "Daftar Peserta Pelatihan";
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pelatihan-peserta', $var);
		$this->load->view('layout/admin/footer', $var);
	}
	
}
