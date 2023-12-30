<?php

class Home extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['buku'] = $this->Home_model->getAllBook();
        if($this->input->post('cari')){
            $data['buku'] = $this->Home_model->cariData();
        }
        $this->load->view('templates/header');
        $this->load->view('home/index', $data);
    }
}