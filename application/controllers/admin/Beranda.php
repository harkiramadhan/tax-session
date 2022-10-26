<?php

class Beranda extends CI_Controller {
	public function index(){
        $var['title'] = "Dashboard";
		$this->load->view('layout/admin-header');
		$this->load->view('admin/beranda');
		$this->load->view('layout/admin-footer');
	}
}
