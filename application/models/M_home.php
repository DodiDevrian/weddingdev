<?php

class M_home extends CI_Model
{
    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_tema');
        $this->db->order_by('id_tema', 'ASC');

        return $this->db->get()->result();
    }
}