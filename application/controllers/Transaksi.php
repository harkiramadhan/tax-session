<?php 
class Transaksi extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    function index(){
        $var = [
            'title' => 'Cek Transaksi',
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/transaksi', $var);
		$this->load->view('layout/guest/footer', $var);
    }
}