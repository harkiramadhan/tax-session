<?php 
class Course extends CI_Controller{
    function __construct(){
        parent::__construct();

        $this->load->model([
            'M_Pelatihan'
        ]);
    }

    function index(){
            
    }
}