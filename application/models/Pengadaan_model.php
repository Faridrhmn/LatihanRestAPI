<?php

class Pengadaan_model extends CI_model{

    // READ
    public function getSmallestData()
    {
        $query = $this->db->query('SELECT NamaBuku,Stok,Penerbit FROM buku ORDER BY Stok LIMIT 1');
        return $row = $query->row_array();
    }

}