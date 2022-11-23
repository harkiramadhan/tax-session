<?php
class Landing extends CI_Controller{
    function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE)
			redirect('admin','refresh');
	}
    
    function index(){
        
    }

	function banner(){

        $var['title'] = "Daftar Banners Landing Page";

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/banners', $var);
		$this->load->view('layout/admin/footer', $var);
	}
	
	function patner(){
		
        $var['title'] = "Daftar Patner Landing Page";

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/patner', $var);
		$this->load->view('layout/admin/footer', $var);
	}
	
	function benefit(){
		
        $var['title'] = "Daftar Patner Landing Page";

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/benefit', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	function faq(){
		
        $var['title'] = "Daftar Testimoni Landing Page";

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/faq', $var);
		$this->load->view('layout/admin/footer', $var);
	}

	function testimoni(){
		
        $var['title'] = "Daftar Testimoni Landing Page";

		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/testimoni', $var);
		$this->load->view('layout/admin/footer', $var);
	}
}