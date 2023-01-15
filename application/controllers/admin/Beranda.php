<?php

class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model([
			'M_Pelatihan'
		]);

		if($this->session->userdata('masuk') != TRUE)
			redirect('admin','refresh');
	}

	function index(){
        $var['title'] = "Dashboard";

		$var = [
			'title' => 'Dashboard',
			'pelatihan' => $this->M_Pelatihan->getActive()
		];
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/beranda', $var);
		$this->load->view('layout/admin/footer', $var);
	}
}
