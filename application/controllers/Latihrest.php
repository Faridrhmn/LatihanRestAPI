<?php
require APPPATH.'/libraries/REST_Controller.php';
class Latihrest extends REST_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Rest_model');
    }

    public function mahasiswaList_get()
    {
        $mahasiswa1 = array( 
            "nama"=>"udin", 
            "nim"=>"234", 
            "jenisKelamin"=>'L'
        );
        $mahasiswa2 = array( 
            "nama"=>"udin2", 
            "nim"=>"2342", 
            "jenisKelamin"=>'P'
        );
        $number = array($mahasiswa1, $mahasiswa2);
        $mhs = $mahasiswa1;

        $this->response( $number, 200 );
    }

    public function add_mahasiswa_post()
    {
        $mahasiswa1 = array( 
            "nama"=>$_POST["nama"], 
            "nim"=>$_POST["nim"], 
            "jenisKelamin"=>$_POST["jenis_kelamin"]
        );

        $this->response( $mahasiswa1, 200 );
    }

    // FUNGSI GET UNTUK BACA
    public function list_book_get()
    {
        $data['buku'] = $this->Rest_model->getAllBook();
        $this->response( $data, 200 );
    }

    // FUNGSI POST UNTUK TAMBAH seperti posting
    public function add_book_post()
    {
        $buku['buku'] = $this->Rest_model->addBook();
        $this->response( "ditambahkan!", 200 );
    }

    public function del_book_delete()
    {
        parse_str(file_get_contents('php://input'), $value);

        $id = $value['idBuku'];
        $this->Rest_model->deleteBook($id);
        $this->response( "terhapus!", 200 );
    }

    public function up_book_put()
    {
        $this->Rest_model->updateBook();
        $this->response( "terupdate!", 200 );
    }
}