<?php
class Landing extends CI_Controller{
    function __construct(){
		parent::__construct();

		$this->load->model([
			'M_Banners',
			'M_Partner',
			'M_Benefit',
			'M_Faq',
			'M_Testimoni',
			'M_Pelatihan'
		]);
	}
    
    function index(){

        $var = [
			'title' => 'Selamat Datang di Platform Kami',
			'banners' => $this->M_Banners->getActive(),
			'partners' => $this->M_Partner->getActive(),
			'benefits' => $this->M_Benefit->getActive(),
			'class' => $this->M_Pelatihan->getActive(3),
			'faqs' => $this->M_Faq->getActive(),
			'testimoni' => $this->M_Testimoni->getActive()
		];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/landing', $var);
		$this->load->view('layout/guest/footer', $var);
        
    }

}