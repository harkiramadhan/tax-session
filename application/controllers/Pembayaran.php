<?php 
class Pembayaran extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    function index(){
        $var = [
            'title' => 'Cek Transaksi',
            'setting' => $this->db->get_where('settings', ['id' => 1])->row(),
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pembayaran', $var);
		$this->load->view('layout/guest/footer', $var);
    }
}