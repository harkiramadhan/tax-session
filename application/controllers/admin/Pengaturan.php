<?php
class Pengaturan extends CI_Controller{
    function index(){

        $var['title'] = "Pengaturan Admin";

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pengaturan', $var);
		$this->load->view('layout/admin/footer', $var);
        
    }
}