<?php

class Undangan extends CI_Controller
{
    public function __construct(){
		parent ::__construct();

		// $this->load->helpers(['menuAktif']);
		// $this->load->helpers('text');

        $this->load->model('m_member');
	}
// Tema PF
    public function pf01($url_link)
    {
        $data = array(

            'member'    => $this->m_member->detail_undangan($url_link),
        );
        $this->load->view('undangan/pf/v_pf01', $data);
    }

    public function pf02($url_link)
    {
        $data = array(

            'member'    => $this->m_member->detail_undangan($url_link),
        );
        $this->load->view('template/pf/v_pf02', $data);
    }

    public function pf03($url_link)
    {
        $data = array(

            'member'    => $this->m_member->detail_undangan($url_link),
        );
        $this->load->view('template/pf/v_pf03', $data);
    }

// Tema PT
    public function pt01($url_link)
    {
        $data = array(

            'member'    => $this->m_member->detail_undangan($url_link),
        );
        $this->load->view('template/pt/v_pt01', $data);
    }
}