<?php

class Tema extends CI_Controller
{
    public function __construct(){
        parent ::__construct();

        $this->load->model('m_tema');
    }
    
    public function index()
    {
        $data = array(
            'tema'                  => $this->m_tema->lists(),
            'isi'                   => 'admin/tema/v_lists',
            'tema'   => $this->m_tema->lists(),
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}