<?php
class Testimoni extends CI_Controller{
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
			'title' => 'Daftar Testimoni Landing Page',
			'testimoni' => $this->M_Testimoni->getAll(),
			'ajax' => [
				'testimoni'
			]
		];
		
		$this->load->view('layout/admin/header', $var);
		$this->load->view('admin/testimoni', $var);
		$this->load->view('layout/admin/footer', $var);
    }

    /* Ajax Here! */
    function edit($id){
        $testimoni = $this->M_Testimoni->getById($id);

        ?>
            <div class="modal-header">
				<h6 class="modal-title" id="tambahTestimoni">EDIT TESTIMONI</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= site_url('admin/testimoni/update/' . $id) ?>" enctype="multipart/form-data" method="POST">
				<div class="modal-body bg-gray-100">
					<div class="col-lg-12">
						<div class="mb-2 mt-2 text-center">
							<img src="<?= base_url('uploads/testimoni/' . $testimoni->img) ?>" class="img-fluid img-center shadow rounded" style="max-height: 250px" id="image-preview2">
						</div>
						<div class="form-group">
							<label class="form-control-label" for="input-gambar">Profil Testimoni
							<span class="text-danger">*</span></label>
							<div class="mb-3">
								<input class="form-control" type="file" name="img" id="image-source2" onchange="previewImage2()">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group mb-2">
							<label class="form-control-label" for="input-nama">Nama <span class="text-danger">*</span></label>
							<input type="text" name="nama" class="form-control" placeholder="Tulis nama patner" value="<?= $testimoni->nama ?>" required="">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group mb-2">
							<label class="form-control-label" for="input-nama">Jabatan <span class="text-danger">*</span></label>
							<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?= $testimoni->jabatan ?>" required="">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group mb-2">
							<label class="form-control-label" for="input-nama">Deskripsi <span class="text-danger">*</span></label>
							<textarea name="deskripsi" class="form-control font-weight-bold text-muted" cols="30" rows="5" required=""><?= $testimoni->deskripsi ?></textarea>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group mb-2">
							<label for="input-aksi">Status <span class="text-danger">*</span></label>
							<select class="form-control" name="status" required="">
								<option value="">- Pilih -</option>
								<option <?= ($testimoni->status == 1) ? 'selected' : '' ?> value="1">Aktif</option>
								<option <?= ($testimoni->status == 2) ? 'selected' : '' ?> value="2">Draft</option>
							</select>
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
        $testimoni = $this->M_Testimoni->getById($id);

        ?>
            <div class="modal-header">
				<h6 class="modal-title" id="modal-title-notification">Hapus Testimoni</h6>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="py-3 text-center">
					<h1><i class="fas fa-bell"></i></h1>
					<h4 class="text-gradient text-danger mt-4">Hapus Testimoni!</h4>
					<div class="text-center">
						<?php if($testimoni->img): ?>
							<img src="<?= base_url('uploads/testimoni/' . $testimoni->img) ?>" class="img-fluid img-center shadow rounded mb-5" style="max-height: 250px" id="image-preview2">
						<?php endif; ?>
					</div>
					<p><?= $testimoni->nama." - ".$testimoni->jabatan." <br> ".$testimoni->deskripsi ?></p> 
				</div>
			</div>
			<form action="<?= site_url('admin/testimoni/delete/' . $id) ?>" method="post">
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger w-100 mb-0">HAPUS</button>
					<button data-bs-dismiss="modal" type="button" class="btn btn-transparant shadow-none w-100 mb-0">KEMBALI</button>
				</div>
			</form>
        <?php
    }

    /* Action Here! */
    function create(){
        $config['upload_path'] = './uploads/testimoni';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, './uploads/testimoni/'); 
        }

        $dataInsert = [
            'img' => $filename,
            'nama' => $this->input->post('nama', TRUE),
            'jabatan' => $this->input->post('jabatan', TRUE),
            'deskripsi' => $this->input->post('deskripsi', TRUE),
            'status' => $this->input->post('status', TRUE),
        ];
        $this->db->insert('testimoni', $dataInsert);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
    }

    function update($id){
        $testimoni = $this->M_Testimoni->getById($id);

        $config['upload_path'] = './uploads/testimoni';  
		$config['allowed_types'] = 'jpg|jpeg|png'; 
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
        if($this->upload->do_upload('img')){
			if($testimoni->img != NULL){
				@unlink('./uploads/testimoni/' . @$testimoni->img);
			}

            $data = $this->upload->data();
            $filename = $data['file_name'];
			$this->resizeImage($filename, './uploads/testimoni/'); 
        }else{
			$filename = $testimoni->img;
		}

        $dataUpdate = [
            'img' => $filename,
            'nama' => $this->input->post('nama', TRUE),
            'jabatan' => $this->input->post('jabatan', TRUE),
            'deskripsi' => $this->input->post('deskripsi', TRUE),
            'status' => $this->input->post('status', TRUE),
        ];
        $this->db->where('id', $id)->update('testimoni', $dataUpdate);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Simpan");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Simpan");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
    }

    function delete($id){
        $testimoni = $this->M_Testimoni->getById($id);
        if($testimoni->img != NULL){
            @unlink('./uploads/testimoni/' . @$testimoni->img);
        }

        $this->db->where('id', $id)->delete('testimoni');
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('suecces', "Data Berhasil Di Hapus");
		}else{
			$this->session->set_flashdata('error', "Data Gagal Di Hapus");
		}
		
		redirect($_SERVER['HTTP_REFERER']);
    }
}