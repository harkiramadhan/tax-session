<?php 
class Benefit extends CI_Controller{
    function __construct(){
		parent::__construct();

		$this->load->model([
			'M_Benefit'
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
			'title' => 'Daftar Benefit Landing Page',
            'benefit' => $this->M_Benefit->getAll(),
            'ajax' => [
                'benefit'
            ]
		];
		
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/benefit', $var);
		$this->load->view('layout/admin/footer', $var);
    }

    /* Ajax Here! */
	function edit($id){
		$benefit = $this->M_Benefit->getById($id);
		?>
			<div class="modal-header">
				<h6 class="modal-title" id="tambahBenefit">EDIT BENEFIT</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= site_url('admin/benefit/update/' . $id) ?>" enctype="multipart/form-data" method="post">
				<div class="modal-body bg-gray-100">
					<div class="row">
						<div class="col-lg-12">
							<div class="mb-2 mt-2 text-center">
								<img src="<?= base_url('uploads/benefit/' . $benefit->img) ?>" class="img-fluid img-center shadow rounded" style="max-height: 250px" id="image-preview2">
							</div>
							<div class="form-group">
								<label class="form-control-label" for="input-gambar">Benefit Logo
								<span class="text-danger">*</span></label>
								<div class="mb-3">
									<input class="form-control" type="file" name="img" id="image-source2" onchange="previewImage2()">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Judul <span class="text-danger">*</span></label>
								<input type="text" name="judul" value="<?= $benefit->judul ?>" class="form-control" placeholder="Tulis judul banner" value="" required="">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Deskripsi <span class="text-danger">*</span></label>
								<input type="text" name="deskripsi" value="<?= $benefit->deskripsi ?>" class="form-control" placeholder="Tulis nama patner" value="" required="">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label for="input-aksi">Status <span class="text-danger">*</span></label>
								<select class="form-control" name="status" required="">
									<option value="">- Pilih -</option>
									<option <?= ($benefit->status == 1) ? 'selected' : '' ?> value="1">Aktif</option>
									<option <?= ($benefit->status == 2) ? 'selected' : '' ?> value="2">Draft</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer pb-0 d-flex justify-content-start">
					<button type="submit" class="btn bg-gradient-dark w-100 mb-0">SIMPAN</button>
					<button type="button" class="btn btn-link text-secondary w-100 mb-2" data-bs-dismiss="modal">TUTUP</button>
				</div>
			</form>

			<script>
				function previewImage2() {
					var element = document.getElementById("image-preview2")
					element.classList.remove("d-none")
					document.getElementById("image-preview2").style.display = "block"

					var oFReader = new FileReader()
					oFReader.readAsDataURL(document.getElementById("image-source2").files[0])
					oFReader.onload = function(oFREvent) {
					document.getElementById("image-preview2").src = oFREvent.target.result
				}
				}
			</script>
		<?php
	}


    function remove($id){
		$benefit = $this->M_Benefit->getById($id);

		?>
			<div class="modal-header">
				<h6 class="modal-title" id="modal-title-notification">Hapus Benefit</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="py-3 text-center">
					<h1><i class="fas fa-bell"></i></h1>
					<h4 class="text-gradient text-danger mt-4">Hapus Benefit!</h4>
					<div class="text-center">
						<?php if($benefit->img): ?>
							<img src="<?= base_url('uploads/benefit/' . $benefit->img) ?>" class="img-fluid img-center shadow rounded mb-5" style="max-height: 250px" id="image-preview2">
						<?php endif; ?>
					</div>
					<p><?= $benefit->judul ?></p>
				</div>
			</div>
			<form action="<?= site_url('admin/benefit/delete/' . $id) ?>" method="post">
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger w-100 mb-0">HAPUS</button>
					<button data-bs-dismiss="modal" type="button" class="btn btn-transparant shadow-none w-100 mb-0">KEMBALI</button>
				</div>
			</form>
		<?php
	}

    /* Action Here! */
	function create(){
		$config['upload_path'] = './uploads/benefit';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, './uploads/benefit/'); 
        }

		$dataInsert = [
			'judul' => $this->input->post('judul', TRUE),
			'deskripsi' => $this->input->post('deskripsi', TRUE),
			'status' => $this->input->post('status', TRUE),
			'img' => $filename
		];
		$this->db->insert('benefit', $dataInsert);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}

    function update($id){
		$benefit = $this->M_Benefit->getById($id);

		$config['upload_path'] = './uploads/benefit';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
			if($benefit->img != NULL){
				@unlink('./uploads/benefit/' . @$benefit->img);
			}

            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, './uploads/benefit/'); 
        }else{
			$filename = $benefit->img;
		}

		$dataUpdate = [
			'judul' => $this->input->post('judul', TRUE),
			'deskripsi' => $this->input->post('deskripsi', TRUE),
			'status' => $this->input->post('status', TRUE),
			'img' => $filename
		];
		$this->db->where('id', $id)->update('benefit', $dataUpdate);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}

    function delete($id){
		$benefit = $this->M_Benefit->getById($id);
		if(@$benefit->img){
			@unlink('./uploads/benefit/' . @$benefit->img);
		}

		$this->db->where('id', $id)->delete('benefit');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Hapus");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Hapus");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}
}