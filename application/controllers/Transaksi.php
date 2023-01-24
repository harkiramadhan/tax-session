<?php 
class Transaksi extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model([
            'M_Pelatihan'
        ]);
    }

    function index(){
        $var = [
            'title' => 'Cek Transaksi',
            'setting' => $this->db->get_where('settings', ['id' => 1])->row(),
            'ajax' => [
                'transaksi'
            ]
        ];

		$this->load->view('layout/guest/header', $var);
		$this->load->view('guest/transaksi', $var);
		$this->load->view('layout/guest/footer', $var);
    }

    function find(){
        $text = $this->input->get('find', TRUE);
        $cekPeserta = $this->M_Pelatihan->getPesertaWhere($text);
        ?>
            <?php if($cekPeserta->num_rows() > 0): ?>
                <!-- MUNCUL JIKA DATA YANG DIMASUKAN ADA DI DATABASE -->
                <div class="px-4 py-3 mb-4 border" style="border-radius: 25px;">
                    <p class="text-sm mb-1"><small>Nama</small></p>
                    <h5 class="mb-2"><?= $cekPeserta->row()->nama ?></h5>
                    <p class="text-sm mb-1"><small>Email</small></p>
                    <h5 class="mb-2"><?= $cekPeserta->row()->email ?></h5>
                    <p class="text-sm mb-1"><small>Nomo HP</small></p>
                    <h5 class="mb-2"><?= $cekPeserta->row()->wa ?></h5>
                </div>
                <p class="text-sm mb-3 text-center">Riwayat Pelatihan Anda</p>

                <?php 
                    foreach($cekPeserta->result() as $row){ 
                        if($row->tanggal_mulai == $row->tanggal_selesai){
                            $tanggal = longdate_indo($row->tanggal_mulai);
                        }elseif(date('m', strtotime($row->tanggal_mulai)) == date('m', strtotime($row->tanggal_selesai))){
                            $tanggal = date('d', strtotime($row->tanggal_mulai))." - ".mediumdate_indo($row->tanggal_selesai);
                        }else{
                            $tanggal = longdate_indo($row->tanggal_mulai)." - ".longdate_indo($row->tanggal_selesai);
                        }
                ?>
                    <!-- TAMPILAN UNTUK RIWAYAT KELAS LUNAS -->
                    <div class="px-4 py-3 mb-4 border d-flex" style="border-radius: 25px;">
                        <img class="d-none d-lg-block rounded shadow" src="<?= base_url('uploads/pelatihan/' . $row->cover_img) ?>" alt="Cover Pelatihan" style="object-fit: cover; height: 100px; width: 130px;">
                        <div class="ms-3">
                            <h5 class="mb-2">#<?= sprintf("%06d", $row->pesertaid)." - ".$row->judul ?></h5>
                            <p class="mb-2"><?= $tanggal." - ".$row->waktu ?></p>
                            <p class="mb-2">
                                <span class="mb-2 px-3 py-1 text-<?= ($row->status_bayar == 1) ? 'bg-success' : 'bg-danger' ?> rounded-pill <?= ($row->status_bayar == 1) ? 'bg-success' : 'bg-danger' ?>" style="width: fit-content;"><?= ($row->status_bayar == 1) ? 'Pembayaran Lunas' : 'Menunggu Pembayaran' ?></span> 
                            </p>
                        </div>
                        <div class="ms-auto d-flex justify-item-cente align-items-center">
                            <?php if($row->status_bayar == 1): ?>
                                <button class="btn btn-light border mb-2 py-3 px-4 text-dark rounded-pill w-100 text-uppercase font-16 weight-reguler btn-redirect" data-url="<?= site_url('pelatihan/' . $row->flag . '/status/' . $row->pesertaid) ?>" type="button">DETAIL TRANSAKSI</button>
                            <?php else: ?>
                                <button class="btn btn-light border mb-2 py-3 px-4 text-dark rounded-pill w-100 text-uppercase font-16 weight-reguler btn-redirect" data-url="<?= site_url('pelatihan/' . $row->flag . '/payment/' . $row->pesertaid) ?>" type="button">BAYAR SEKARANG</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- TAMPILAN UNTUK RIWAYAT KELAS LUNAS -->
                <?php } ?>
            <?php else: ?>
                <!-- MUNCUL JIKA DATA YANG DIINPUT TIDAK ADA -->
                <div class="px-4 pt-4 pb-4 mb-4 border" style="border-radius: 25px;">
                    <h5 class="mb-3 text-center text-muted weight-reguler">Anda belum pernah mengikuti kelas kami</h5>
                    <button class="btn btn-light border mb-2 py-3 px-4 text-dark rounded-pill w-100 text-uppercase font-16 weight-reguler btn-redirect" data-url="<?= site_url('pelatihan') ?>" type="button">Daftar Kelas Sekarang</button>
                </div>
                <!-- MUNCUL JIKA DATA YANG DIINPUT TIDAK ADA DONE -->
            <?php endif; ?>
            <script>
                $('.btn-redirect').click(function(){
                    var url = $(this).attr('data-url')
                    window.location.href = url
                })
            </script>
        <?php
    }
}