<?php

class Admin extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['buku'] = $this->Admin_model->getAllBuku();
        $data['penerbit'] = $this->Admin_model->getAllPenerbit();
        $this->load->view('templates/header');
        $this->load->view('admin/index', $data);
    }

    // TAMBAH
    public function tambahPenerbit()
    {
        $this->form_validation->set_rules('idpenerbit', 'Kode Penerbit', 'required');
        $this->form_validation->set_rules('namapenerbit', 'Nama Penerbit', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('telp', 'Telepon', 'required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('admin/tambahPenerbit');
        } else {
            $this->Admin_model->tambahDataPenerbit();
            $this->session->set_flashdata('flash', 'Data Penerbit Berhasil ditambah!');
            redirect('Admin');
        }
    }
    
    public function tambahBuku()
    {
        $data['penerbit'] = $this->Admin_model->getAllPenerbit();
        $this->form_validation->set_rules('idBuku', 'Kode Buku', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('namabuku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');
        $this->form_validation->set_rules('pilihan', 'Nama Penerbit', 'required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('admin/tambahBuku', $data);
        } else {
            $this->Admin_model->tambahDataBuku();
            $this->session->set_flashdata('flash', 'Data Buku Berhasil ditambah!');
            redirect('Admin');
        }
    }

    // HAPUS
    public function hapusBuku($IDBuku)
    {
        $this->Admin_model->hapusDataBuku($IDBuku);
        $this->session->set_flashdata('flash', 'Data Buku Berhasil Dihapus');
        redirect('Admin');    
    }
    public function hapusPenerbit($IDPenerbit)
    {
        $this->Admin_model->hapusDataPenerbit($IDPenerbit);
        $this->session->set_flashdata('flash', 'Data Buku Berhasil Dihapus');
        redirect('Admin');    
    }

    // DETAIL 
    public function detailBuku($IDBuku)
    {
        $data['buku'] = $this -> Admin_model->dataBukuByID($IDBuku);
        $this->load->view('templates/header');
        $this->load->view('admin/detailBuku', $data);
    }
    public function detailPenerbit($IDPenerbit)
    {
        $data['penerbit'] = $this -> Admin_model->dataPenerbitByID($IDPenerbit);
        $this->load->view('templates/header');
        $this->load->view('admin/detailPenerbit', $data);
    }

    // EDIT
    public function editBuku($IDBuku)
    {
        $data['penerbit'] = $this->Admin_model->getAllPenerbit();
        $data['buku'] = $this->Admin_model->dataBukuByID($IDBuku);
        $this->form_validation->set_rules('idBuku', 'Kode Buku', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('namabuku', 'Nama Buku', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');
        $this->form_validation->set_rules('pilihan', 'Nama Penerbit', 'required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('admin/editBuku', $data);
        } else {
            $this->Admin_model->editDataBuku();
            $this->session->set_flashdata('flash', 'Data Buku Berhasil diedit!');
            redirect('Admin');
        }
    }
    public function editPenerbit($IDPenerbit)
    {
        $data['penerbit'] = $this -> Admin_model->dataPenerbitByID($IDPenerbit);
        $this->form_validation->set_rules('idpenerbit', 'Kode Penerbit', 'required');
        $this->form_validation->set_rules('namapenerbit', 'Nama Penerbit', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('telp', 'Telepon', 'required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('templates/header');
            $this->load->view('admin/editPenerbit', $data);
        } else {
            $this->Admin_model->editDataPenerbit();
            $this->session->set_flashdata('flash', 'Data Penerbit Berhasil diedit!');
            redirect('Admin');
        }
    }
}