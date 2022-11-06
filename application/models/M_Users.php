<?php
class M_Users extends CI_Model{
    function email($email){
        return $this->db->get_where('users', [
            'email' => $email,
        ]);
    }
}