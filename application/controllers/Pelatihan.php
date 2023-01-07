<?php 
class Pelatihan extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model([
            'M_Pelatihan'
        ]);
    }

    function index(){

        $var['title'] = "Daftar Pelatihan";

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function daftar(){

        $var['title'] = "Form Daftar Pelatihan (Nama Pelatihan)";

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan-daftar', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    
}