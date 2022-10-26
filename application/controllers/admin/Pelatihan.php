<?php

class Pelatihan extends CI_Controller {
	public function index(){
        $var['title'] = "Pelatihan";
		$this->load->view('layout/admin/header');
		$this->load->view('admin/pelatihan', $var);
		$this->load->view('layout/admin/footer');
	}

    public function detail(){
        $var['title'] = "Detail Pelatihan";
		$this->load->view('layout/admin/header');
		$this->load->view('admin/pelatihan-detail', $var);
		$this->load->view('layout/admin/footer');
	}
}
