<?php 
class Pelatihan extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model([
            'M_Pelatihan'
        ]);
    }

    function index(){
        $batas = 12;
		$page = $this->input->get('page', TRUE);
		$halaman = isset($page) ? (int)$page : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;

		$previous = $halaman - 1;
		$next = $halaman + 1;

		$jumlah_data = $this->M_Pelatihan->getActive()->num_rows();
		$total_halaman = ceil($jumlah_data / $batas);

        $var = [
            'title' => "Daftar Pelatihan",
            'data' => $this->M_Pelatihan->getPaginate($halaman_awal, $batas),
            'total_data' => $jumlah_data,
			'count' => $total_halaman,
			'next' => $next,
			'previous' => $previous,
			'page' => $halaman,
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function detail($flag){
        $pelatihan = $this->M_Pelatihan->getByFlag($flag);
        $var = [
            'title' => 'Detail Pelatihan ' . $pelatihan->judul,
            'pelatihan' => $pelatihan
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan-detail', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function pembayaran($flag, $id){
        $pelatihan = $this->M_Pelatihan->getByFlag($flag);
        $peserta = $this->M_Pelatihan->getPesertaById($id);
        $var = [
            'title' => 'Pembayaran Pelatihan ' . $pelatihan->judul,
            'pelatihan' => $pelatihan,
            'setting' => $this->db->get_where('settings', ['id' => 1])->row(),
            'peserta' => $peserta
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan-pembayaran', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function status($flag, $id){
        $pelatihan = $this->M_Pelatihan->getByFlag($flag);
        $peserta = $this->M_Pelatihan->getPesertaById($id);
        $var = [
            'title' => 'Status Pembayaran Anda ',
            'pelatihan' => $pelatihan,
            'setting' => $this->db->get_where('settings', ['id' => 1])->row(),
            'peserta' => $peserta
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan-status', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function daftar($flag){
        $pelatihan = $this->M_Pelatihan->getByFlag($flag);
        $var = [
            'title' => 'Form Daftar Pelatihan ' . $pelatihan->judul,
            'pelatihan' => $pelatihan
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan-daftar', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    /* Action */
    function register(){
        if($this->input->post('robot')){
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            $cek = $this->db->get_where('peserta', [
                'pelatihan_id' => $this->input->post('pelaid', TRUE),
                'email' => $this->input->post('email', TRUE)
            ]);
            if($cek->num_rows() > 0){
                $this->session->set_flashdata('error', "Anda Sudah Terdaftar");
                redirect($_SERVER['HTTP_REFERER']);
            }else{
                $dataInsert = [
                    'pelatihan_id' => $this->input->post('pelaid', TRUE),
                    'nama' => $this->input->post('nama', TRUE),
                    'email' => $this->input->post('email', TRUE),
                    'wa' => $this->input->post('wa', TRUE),
                    'jenkel' => $this->input->post('jenkel', TRUE),
                    'pendidikan' => $this->input->post('pendidikan', TRUE),
                    'nominal' => $this->input->post('nominal', TRUE)
                ];
                
                $this->db->insert('peserta', $dataInsert);
                if($this->db->affected_rows() > 0){
                    $ids = $this->db->insert_id();
                    $this->session->set_flashdata('success', "Berhasil Mendaftar");
                    $pelatihan = $this->M_Pelatihan->getById($this->input->post('pelaid', TRUE));
                    redirect('pelatihan/' . $pelatihan->flag . '/payment/' . $ids);
                }
            }
        }
    }
}