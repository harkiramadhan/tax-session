<?php

class Beranda extends CI_Controller {
	public function index(){
        $var['title'] = "Dashboard";
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/beranda', $var);
		$this->load->view('layout/admin/footer', $var);
	}
}
