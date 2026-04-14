<?php

class Buku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_buku');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['buku'] = $this->model_buku->get_all();
        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['kategori'] = $this->model_buku->get_kategori();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {

            $data = [
                'kode_buku'   => $this->input->post('kode_buku'),
                'judul_buku'  => $this->input->post('judul_buku'),
                'penulis'     => $this->input->post('penulis'),
                'penerbit'    => $this->input->post('penerbit'),
                'tahun'       => $this->input->post('tahun'),
                'id_kategori' => $this->input->post('id_kategori'),
                'stok'        => $this->input->post('stok'),
                'lokasi_rak'  => $this->input->post('lokasi_rak')
            ];

            $this->model_buku->insert($data);
            $this->session->set_flashdata('success', 'Data Buku Berhasil disimpan');
            redirect('buku');
        }
    }

    public function hapus($id)
    {
        $this->model_buku->delete($id);
        $this->session->set_flashdata('success', 'Data Buku Berhasil dihapus');
        redirect('buku');
    }

    public function edit($id)
    {
        // Ambil data satu buku berdasarkan ID (Soal No. 2)
        $data['buku'] = $this->model_buku->get_by_id($id);
        // Ambil data kategori buat dropdown (Soal No. 1)
        $data['kategori'] = $this->model_buku->get_kategori();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        // Validasi minimal sesuai standar dosen
        $this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'kode_buku'   => $this->input->post('kode_buku'),
                'judul_buku'  => $this->input->post('judul_buku'),
                'penulis'     => $this->input->post('penulis'),
                'penerbit'    => $this->input->post('penerbit'),
                'tahun'       => $this->input->post('tahun'),
                'id_kategori' => $this->input->post('id_kategori'),
                'stok'        => $this->input->post('stok'),
                'lokasi_rak'  => $this->input->post('lokasi_rak')
            ];

            $this->model_buku->update($id, $data);
            $this->session->set_flashdata('success', 'Data Buku Berhasil diupdate');
            redirect('buku');
        }
    }

}