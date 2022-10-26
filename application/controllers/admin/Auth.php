<?php

class Auth extends CI_Controller {
	public function index(){
        $var['title'] = "Login";
		$this->load->view('admin/login', $var);
	}
}
