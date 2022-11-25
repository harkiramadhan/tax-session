<?php
class M_Benefit extends CI_Model {
    function getAll(){
        return $this->db->get('benefit');
    }

    function getById($id){
        return $this->db->get_where('benefit', ['id' => $id])->row();
    }

    function getActive(){
        return $this->db->get_where('benefit', ['status' => 1]);
    }
}