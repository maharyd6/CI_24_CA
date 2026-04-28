<?php

class dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    $data['total_kategori']=$this->db->count_all('kategori');
    $data['total_buku']=$this->db->count_all('buku');

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/footer');
    }
}