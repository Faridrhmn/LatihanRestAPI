<?php

class Pengadaan extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Pengadaan_model');
    }

    public function index()
    {
        $data['buku'] = $this->Pengadaan_model->getSmallestData();
        $this->load->view('templates/header',$data);
        $this->load->view('pengadaan/index');
    }
}