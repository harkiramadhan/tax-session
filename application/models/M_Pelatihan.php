<?php
class M_Pelatihan extends CI_Model{
    function getAll(){
        return $this->db->get('pelatihan');
    }

    function getById($pelatihanid){
        return $this->db->get_where('pelatihan', [
            'id' => $pelatihanid
        ])->row();
    }

    function getByFlag($flag){
        return $this->db->get_where('pelatihan', [
            'flag' => $flag
        ])->row();
    }

    function getActive($limit = false){
        if($limit){
            $this->db->limit($limit);
        }

        return $this->db->select()
                        ->from('pelatihan')
                        ->where([
                            'status' => 1
                        ])->order_by('created_at', "DESC")
                        ->get();
    }

    function getPaginate($rowno, $rowperpage){
        return $this->db->select()
                        ->from('pelatihan')
                        ->where([
                            'status' => 1
                        ])->limit($rowperpage, $rowno)->order_by('created_at', "DESC")->get();
    }

    function getPeserta($id){
        return $this->db->get_where('peserta', [
            'pelatihan_id' => $id
        ]);
    }

    function getPesertaById($id){
        return $this->db->get_where('peserta', [
            'id' => $id
        ])->row();
    }

    function getPaid($id){
        return $this->db->select('id')->get_where('peserta', [
            'pelatihan_id' => $id,
            'status_bayar' => 1
        ]);
    }

    function getUnpaid($id){
        return $this->db->select('id')->get_where('peserta', [
            'pelatihan_id' => $id,
            'status_bayar !=' => 1
        ]);
    }

    function getPesertaWhere($text){
        return $this->db->select('p.id pesertaid, p.nama, p.email, p.wa, p.jenkel, p.pendidikan, p.nominal, p.status_bayar')
                        ->select('pl.*')
                        ->from('peserta p')
                        ->join('pelatihan pl', 'p.pelatihan_id = pl.id')
                        ->where('p.email', $text)
                        ->or_where('p.wa', $text)->order_by('id', "DESC")->get();
    }
}