<?php

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model([
			'M_Users'
		]);
	}

	function index(){
        $var['title'] = "Login";
		$this->load->view('admin/login', $var);
	}

	function action(){
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);

		$checkUsers = $this->M_Users->email($email);
		if($checkUsers->num_rows() > 0){
			$users = $checkUsers->row();
			if($users->password == md5($password)){
				$this->session->set_userdata([
					'email' => $users->email,
					'username' => $users->username,
					'masuk' => TRUE
				]);
				
				redirect('admin/beranda','refresh');
			}else{
				$this->session->set_flashdata('error', "Wrong Password!");
				redirect($_SERVER['HTTP_REFERER']);
			}
		}else{
			$this->session->set_flashdata('error', "User Not Found!");
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('admin','refresh');
	}
}
