<?php

class Model_buku extends CI_Model {
    private $table = 'buku';

    public function get_all()
    {
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from($this->table);
        $this->db->join('kategori', 'kategori.id = buku.id_kategori');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function get_by_id($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->get($this->table)->row();
    }

    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        return $this->db->delete($this->table);
    }

    public function update($id, $data)
    {
        $this->db->where('id_buku', $id);
        return $this->db->update($this->table, $data);
    }
    
    public function get_kategori()
    {
        return $this->db->get('kategori')->result();
    }
}