<?php

class Contoh extends CI_Controller
{
    public function __construct(){
		parent ::__construct();

		// $this->load->helpers(['menuAktif']);
		// $this->load->helpers('text');

        $this->load->model('m_home');
        // $this->load->model('m_kursus');
        // $this->load->model('m_asprak');
	}
// Tema PF
    public function pf01()
    {
        $this->load->view('template/pf/v_pf01');
    }

    public function pf02()
    {
        $this->load->view('template/pf/v_pf02');
    }

    public function pf03()
    {
        $this->load->view('template/pf/v_pf03');
    }

// Tema PT
    public function pt01()
    {
        $this->load->view('template/pt/v_pt01');
    }
}