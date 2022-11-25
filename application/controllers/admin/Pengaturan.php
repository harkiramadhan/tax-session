<?php
class Pengaturan extends CI_Controller{
    function __construct(){
		parent::__construct();

		$this->load->model([
			'M_Testimoni'
		]);
		$this->load->library('image_lib');
		if($this->session->userdata('masuk') != TRUE){
			redirect('admin','refresh');
		}
	}

	private function resizeImage($filename, $path){
        $config['image_library'] = 'gd2';  
        $config['source_image'] = $path.$filename;  
        $config['create_thumb'] = FALSE;  
        $config['maintain_ratio'] = TRUE;  
        $config['quality'] = '75%';  
        $config['new_image'] = $path.$filename;  
        $config['width'] = 500;              
  
        $this->image_lib->initialize($config);
        $this->image_lib->resize();  
        $this->image_lib->clear();
    }

    function index(){
        $var = [
			'title' => 'Pengaturan Admin',
			'settings' => $this->db->get_where('settings', ['id' => 1])->row()
		];
		
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/pengaturan', $var);
		$this->load->view('layout/admin/footer', $var);
    }

    function save(){
        $settings = $this->db->get_where('settings', ['id' => 1])->row();
        $config['upload_path'] = './assets/img';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('logo_bank')){
            if(@$settings->logo_bank != NULL){
				@unlink('./assets/img/' . @$settings->logo_bank);
			}

            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, './assets/img/'); 
        }else{
            $filename = $settings->logo_bank;
        }

        $dataUpdate = [
            'kontak' => $this->input->post('kontak', TRUE),
            'instagram' => $this->input->post('instagram', TRUE),
            'facebook' => $this->input->post('facebook', TRUE),
            'tiktok' => $this->input->post('tiktok', TRUE),
            'youtube' => $this->input->post('youtube', TRUE),
            'norek' => $this->input->post('norek', TRUE),
            'nama' => $this->input->post('nama', TRUE),
            'bank' => $this->input->post('bank', TRUE),
            'logo_bank' => $filename
        ];
        $this->db->where('id', 1)->update('settings', $dataUpdate);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('success', "Simpan Data");
        }else{
            $this->session->set_flashdata('error', "Simpan Data");
        }
        
        redirect($_SERVER['HTTP_REFERER']);
    }
}