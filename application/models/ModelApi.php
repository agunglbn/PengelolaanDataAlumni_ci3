<?php

class ModelApi extends CI_Model
{

    public $table = "tbl_berita";
    public $id = "id";
    public $order = "DESC";

    function __construct()
    {
        parent::__construct();
    }

    // Tampilkan Semua Berita
    public function getBerita()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // Tampilkan Data sesuai Id
    public function get_berita_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // Insert Data

    function insert_berita($data)
    {
        $this->db->insert($this->table, $data);
    }

    // Update Berita

    function update_berita($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // Delete Berita

    function delete_berita($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}