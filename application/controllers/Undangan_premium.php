<?php

class Undangan_premium extends CI_Controller
{
    public function __construct(){
		parent ::__construct();

		// $this->load->helpers(['menuAktif']);
		// $this->load->helpers('text');

        $this->load->model('m_home');
        // $this->load->model('m_kursus');
        // $this->load->model('m_asprak');
	}
    
    public function pf01()
    {
        $data = array(
            'title'                 => 'Kursus Online',
            'title2'                => 'Laboratorium Teknik Informatika',
            'tema'   => $this->m_home->lists(),
        );
        $this->load->view('v_home', $data, FALSE);
    }
}