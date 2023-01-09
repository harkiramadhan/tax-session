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

    function detail(){
        $var = [
            'title' => 'Form Daftar Pelatihan ',
            // 'pelatihan' => $pelatihan
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan-detail', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function pembayaran(){
        $var = [
            'title' => 'Tutorial Pembayaran ',
            // 'pelatihan' => $pelatihan
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/pelatihan-pembayaran', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function status(){
        $var = [
            'title' => 'Status Pembayaran Anda ',
            // 'pelatihan' => $pelatihan
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
        if($this->input->post('robot')){}else{
            $cek = $this->db->get_where('peserta', [
                'pelatihan_id' => $this->input->post('pelaid', TRUE),
                'email' => $this->input->post('email', TRUE)
            ]);
            if($cek->num_rows() > 0){
                $this->session->set_flashdata('error', "Anda Sudah Terdaftar");
            }else{
                $dataInsert = [
                    'pelatihan_id' => $this->input->post('pelaid', TRUE),
                    'nama' => $this->input->post('nama', TRUE),
                    'email' => $this->input->post('email', TRUE),
                    'wa' => $this->input->post('wa', TRUE),
                    'jenkel' => $this->input->post('jenkel', TRUE),
                    'pendidikan' => $this->input->post('pendidikan', TRUE)
                ];
                
                $this->db->insert('peserta', $dataInsert);
                if($this->db->affected_rows() > 0){
                    $this->session->set_flashdata('success', "Berhasil Mendaftar");
                }
            }
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}