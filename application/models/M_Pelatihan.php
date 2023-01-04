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
}