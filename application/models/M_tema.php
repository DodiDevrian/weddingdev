<?php

class M_tema extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_tema');
        $this->db->order_by('id_tema', 'ASC');

        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tbl_tema', $data);
    }

    public function detail_tema($id_tema)
    {
        $this->db->select('*');
        $this->db->from('tbl_tema');
        $this->db->where('id_tema', $id_tema);
        return $this->db->get()->row(); 
    }

    public function edit($data)
    {
        $this->db->where('id_tema', $data['id_tema']);
        $this->db->update('tbl_tema', $data);
    }
}