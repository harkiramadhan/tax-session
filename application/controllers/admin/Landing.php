<?php
class Landing extends CI_Controller{
    function __construct(){
		parent::__construct();

		if($this->session->userdata('masuk') != TRUE)
			redirect('admin','refresh');
	}
    
    function index(){
        
    }
}