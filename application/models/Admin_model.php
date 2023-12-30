<?php

class Admin_model extends CI_model{

    // READ
    public function getALlBuku()
    {
        return $this->db->get('buku')->result_array();
    }
    public function getALlPenerbit()
    {
        return $this->db->get('penerbit')->result_array();
    }

    // INSERT
    public function tambahDataPenerbit()
    {
        $data = [
            "IDPenerbit" => $this->input->post('idpenerbit', true), // pengamanan data dengan true
            "namaPenerbit" => $this->input->post('namapenerbit', true),
            "Alamat" => $this->input->post('alamat', true),
            "Kota" => $this->input->post('kota', true),
            "Telepon" => $this->input->post('telp', true)
        ];

        $this->db->insert('penerbit', $data);
    }
    public function tambahDataBuku()
    {
        $data = [
            "IDBuku" => $this->input->post('idBuku', true), // pengamanan data dengan true
            "Kategori" => $this->input->post('kategori', true),
            "NamaBuku" => $this->input->post('namabuku', true),
            "Harga" => $this->input->post('harga', true),
            "Stok" => $this->input->post('stok', true),
            "Penerbit" => $this->input->post('pilihan', true)
        ];

        $this->db->insert('buku', $data);
    }

    // TAMBAH BUAT API
    public function addBook()
    {
        $buku = [
            "IDBuku" => $_POST["id"],
            "Kategori" => $_POST["kategori"],
            "NamaBuku" => $_POST["nama"],
            "Harga" => $_POST["harga"],
            "Stok" => $_POST["stok"],
            "Penerbit" => $_POST["penerbit"]
        ];
        $this->db->insert('buku', $buku);
    }

    // DELETE
    public function hapusDataBuku($IDBuku)
    {
        $this->db->where('IDBuku', $IDBuku);
        $this->db->delete('buku');
    }
    public function hapusDataPenerbit($IDPenerbit)
    {
        $this->db->where('IDPenerbit', $IDPenerbit);
        $this->db->delete('penerbit');
    }

    // Ambil data sesuai ID
    public function dataBukuByID($IDBuku)
    {
        return $this->db->get_where('buku', ['IDBuku' => $IDBuku])->row_array();
    }
    public function dataPenerbitByID($IDPenerbit)
    {
        return $this->db->get_where('penerbit', ['IDPenerbit' => $IDPenerbit])->row_array();
    }

    // EDIT atau UPDATE
    public function editDataBuku()
    {
        $data = [
            "IDBuku" => $this->input->post('idBuku', true), // pengamanan data dengan true
            "Kategori" => $this->input->post('kategori', true),
            "NamaBuku" => $this->input->post('namabuku', true),
            "Harga" => $this->input->post('harga', true),
            "Stok" => $this->input->post('stok', true),
            "Penerbit" => $this->input->post('pilihan', true)
        ];
        $this->db->where('IDBuku', $this->input->post('idBuku'));
        $this->db->update('buku', $data);
    }
    public function editDataPenerbit()
    {
        $data = [
            "IDPenerbit" => $this->input->post('idpenerbit', true), // pengamanan data dengan true
            "namaPenerbit" => $this->input->post('namapenerbit', true),
            "Alamat" => $this->input->post('alamat', true),
            "Kota" => $this->input->post('kota', true),
            "Telepon" => $this->input->post('telp', true)
        ];
        $this->db->where('IDPenerbit', $this->input->post('idpenerbit'));
        $this->db->update('penerbit', $data);
    }
}