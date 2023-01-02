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
		$this->load->view('guest/landing', $var);
		$this->load->view('layout/guest/footer', $var);
        
    }

	function course(){

        $var['title'] = "";

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/course', $var);
		$this->load->view('layout/guest/footer', $var);
	}
}