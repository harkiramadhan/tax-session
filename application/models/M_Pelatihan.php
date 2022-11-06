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
}