<?php

class M_member extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->join('tbl_tema', 'tbl_tema.kode_tema = tbl_member.kode_tema', 'left');
        $this->db->order_by('id_member', 'ASC');

        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tbl_member', $data);
    }

    public function detail_member($id_member)
    {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('id_member', $id_member);
        return $this->db->get()->row(); 
    }

    public function detail_undangan($url_link)
    {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->where('url_link', $url_link);
        return $this->db->get()->row(); 
    }

    public function edit($data)
    {
        $this->db->where('id_member', $data['id_member']);
        $this->db->update('tbl_member', $data);
    }

    public function detail($id_member)
    {
        $this->db->select('*');
        $this->db->from('tbl_member');
        $this->db->join('tbl_tema', 'tbl_tema.kode_tema = tbl_member.kode_tema', 'left');
        $this->db->where('id_member', $id_member);
        return $this->db->get()->row();
    }
}