<?php

class Home_model extends CI_model{

    // READ
    public function getALlBook()
    {
        return $this->db->get('buku')->result_array();
    }

    // SEARCH
    public function cariData()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('NamaBuku', $cari);
        return $this->db->get('buku')->result_array();
    }

}