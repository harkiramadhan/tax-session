<?php
class Partner extends CI_Controller{
    function __construct(){
		parent::__construct();

		$this->load->model([
			'M_Partner'
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
			'title' => 'Daftar Patner Landing Page',
			'partners' => $this->M_Partner->getAll(),
			'ajax' => [
				'partner'
			]
		];
		
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/patner', $var);
		$this->load->view('layout/admin/footer', $var);
    }

    /* Ajax Here! */
    function edit($id){
		$partner = $this->M_Partner->getById($id);
		?>
			<div class="modal-header">
				<h6 class="modal-title" id="tambahPartner">EDIT PARTNER</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= site_url('admin/partner/update/' . $id) ?>" enctype="multipart/form-data" method="post">
				<div class="modal-body bg-gray-100">
					<div class="row">
						<div class="col-lg-12">
							<div class="mb-2 mt-2 text-center">
								<img src="<?= base_url('uploads/partner/' . $partner->img) ?>" class="img-fluid img-center shadow rounded" style="max-height: 250px" id="image-preview2">
							</div>
							<div class="form-group">
								<label class="form-control-label" for="input-gambar">Partner Logo
								<span class="text-danger">*</span></label>
								<div class="mb-3">
									<input class="form-control" type="file" name="img" id="image-source2" onchange="previewImage2()">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Nama Partner <span class="text-danger">*</span></label>
								<input type="text" name="judul" class="form-control" placeholder="Tulis nama Partner" value="<?= $partner->judul ?>" required="">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label class="form-control-label" for="input-nama">Link tujuan <span class="text-danger">*</span></label>
								<input type="text" name="link" class="form-control" placeholder="Cantumkan link pada kolom" value="<?= $partner->link ?>" required="">
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group mb-2">
								<label for="input-aksi">Status <span class="text-danger">*</span></label>
								<select class="form-control" name="status" required="">
									<option value="">- Pilih -</option>
									<option <?= ($partner->status == 1) ? 'selected' : '' ?> value="1">Aktif</option>
									<option <?= ($partner->status == 2) ? 'selected' : '' ?> value="2">Draft</option>
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
		$partner = $this->M_Partner->getById($id);

		?>
			<div class="modal-header">
				<h6 class="modal-title" id="modal-title-notification">Hapus Partner</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="py-3 text-center">
					<h1><i class="fas fa-bell"></i></h1>
					<h4 class="text-gradient text-danger mt-4">Hapus Partner!</h4>
					<div class="text-center">
						<?php if($partner->img): ?>
							<img src="<?= base_url('uploads/partner/' . $partner->img) ?>" class="img-fluid img-center shadow rounded mb-5" style="max-height: 250px" id="image-preview2">
						<?php endif; ?>
					</div>
					<p><?= $partner->judul ?></p>
				</div>
			</div>
			<form action="<?= site_url('admin/partner/delete/' . $id) ?>" method="post">
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger w-100 mb-0">HAPUS</button>
					<button data-bs-dismiss="modal" type="button" class="btn btn-transparant shadow-none w-100 mb-0">KEMBALI</button>
				</div>
			</form>
		<?php
	}

    /* Action Here! */
    function create(){
		$config['upload_path'] = './uploads/partner';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, './uploads/partner/'); 
        }

		$dataInsert = [
			'judul' => $this->input->post('judul', TRUE),
			'link' => $this->input->post('link', TRUE),
			'status' => $this->input->post('status', TRUE),
			'img' => $filename
		];
		$this->db->insert('partner', $dataInsert);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}

	function update($id){
		$partner = $this->M_Partner->getById($id);

		$config['upload_path'] = './uploads/partner';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
			if($partner->img != NULL){
				@unlink('./uploads/partner/' . @$partner->img);
			}

            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, './uploads/partner/'); 
        }else{
			$filename = $partner->img;
		}

		$dataInsert = [
			'judul' => $this->input->post('judul', TRUE),
			'link' => $this->input->post('link', TRUE),
			'status' => $this->input->post('status', TRUE),
			'img' => $filename
		];
		$this->db->where('id', $id)->update('partner', $dataInsert);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}

	function delete($id){
		$partner = $this->M_Partner->getById($id);
		if(@$partner->img){
			@unlink('./uploads/banners/' . @$partner->img);
		}

		$this->db->where('id', $id)->delete('partner');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Hapus");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Hapus");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}
}