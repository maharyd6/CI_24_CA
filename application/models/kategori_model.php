<?php

class kategori_model extends CI_Model {

    private $table ='kategori';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function get_by_id($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('kategori')->row();
    }
    public function delete($id)
    {
        return $this->db->delete($this->table,['id'=>$id]);
    }
    public function update($id, $data)
    {
        $this->db->where('id',$id);
        return $this->db->update($this->table, $data);
    }
}