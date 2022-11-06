<?php

class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE)
			redirect('admin','refresh');
	}

	function index(){
        $var['title'] = "Dashboard";
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/beranda', $var);
		$this->load->view('layout/admin/footer', $var);
	}
}
