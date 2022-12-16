<?php
class Landing extends CI_Controller{
    // function __construct(){
	// 	parent::__construct();

	// 	if($this->session->userdata('masuk') != TRUE)
	// 		redirect('admin','refresh');
	// }
    
    function index(){

        $var['title'] = "Selamat Datang di Platform Kami";

		$this->load->view('layout/guest/header', $var);
		// $this->load->view('guest/landing', $var);
		// $this->load->view('layout/admin/footer', $var);
        
    }

	function banner(){

        $var['title'] = "Daftar Banners Landing Page";

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/banners', $var);
		$this->load->view('layout/admin/footer', $var);
	}
}