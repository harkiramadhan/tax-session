<?php

class AdminPelatihan extends CI_Controller {
	

	public function index()
	{
        $var['title'] = "Pelatihan";
		$this->load->view('layout/admin-header');
		$this->load->view('admin/pelatihan');
		$this->load->view('layout/admin-footer');
	}
}
