<?php

class Rest_model extends CI_model{

    // LIHAT BUKU
    public function getALlBook()
    {
        return $this->db->get('buku')->result_array();
    }

    // TAMBAH BUKU
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

    public function deleteBook($IDBuku)
    {
        $this->db->where('IDBuku', $IDBuku);
        $this->db->delete('buku');
    }

    public function updateBook()
    {
        parse_str(file_get_contents('php://input'), $value);

        $buku = array( 
            "IDBuku"=>$value['idBuku'], 
            "Kategori"=>$value['kategori'],
            "NamaBuku"=>$value['nama'],
            "Harga"=>$value['harga'],
            "Stok"=>$value['stok'],
            "Penerbit"=>$value['penerbit']
        );
        $this->db->where('IDBuku', $value['idBuku']);
        $this->db->update('buku', $buku);
    }

}