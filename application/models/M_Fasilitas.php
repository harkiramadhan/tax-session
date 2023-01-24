<?php
class M_Fasilitas extends CI_Model{
    function getAll(){
        return $this->db->get('fasilitas');
    }

    function getById($id){
        return $this->db->get_where('fasilitas', ['id' => $id])->row();
    }

    function getByClass($id){
        return $this->db->select('f.*')
                        ->from('fasilitas_pelatihan fp')
                        ->join('fasilitas f', 'fp.fasilitas_id = f.id')
                        ->where([
                            'fp.pelatihan_id' => $id
                        ])->get();
    }
}